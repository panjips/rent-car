<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\ReviewRating;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobil = Mobil::get();
        return view('admins.mobil.index', ['mobil' => $mobil]);
    }

    public function showCatalog()
    {
        $catalog = Mobil::where('status', '=', 'Tersedia')->get();
        return view('home.catalog', compact('catalog'));
    }

    public function showDetail(string $id)
    {
        $replace = str_replace('_', ' ', $id);
        $mobil = Mobil::find($replace);
        $review = ReviewRating::where('no_plat', $replace)->with(['User', 'Mobil'])->get();

        return view('home.detailCatalog', ['mobil' => $mobil, 'review' => $review]);
    }

    public function create(Request $request)
    {
        return view('admins.mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required',
            'merek' => 'required',
            'nama' => 'required',
            'transmisi' => 'required',
            'bahan_bakar' => 'required',
            'harga_sewa' => 'required',
            'warna' => 'required',
            'status' => 'required',
        ]);

        $datas = $request->all();
        $mobil = Mobil::find($request->id);
        if (!is_null($mobil)) return view('admins.mobil.create');

        $image = $request->gambar;
        $storeToPublic = time() . '.' . $image->getClientOriginalExtension();
        Storage::disk('local')->put('public/' . $storeToPublic, file_get_contents($image));
        $datas['gambar'] = $storeToPublic;

        Mobil::create($datas);

        $mobil = Mobil::get();
        // print_r($mobil);

        try {
            return view('admins.mobil.index', ['mobil' => $mobil]);
        } catch (Exception $e) {
            return view('admins.mobil.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(Request $request, string $id, string $id_mobil)
    {
        $mobil = Mobil::find($id_mobil);
        return view('admins.mobil.update', compact('mobil'));
    }
    public function update(Request $request, string $id, string $id_mobil)
    {
        $mobil = Mobil::find($id_mobil);
        if ($request->hasFile('gambar')) {
            File::delete("storage/" . $mobil->gambar);
            $image = $request->gambar;
            $storeToPublic = time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('local')->put('public/' . $storeToPublic, file_get_contents($image));
            $mobil->update([
                'id' => $request->id,
                'keterangan' => $request->keterangan,
                'gambar' => $storeToPublic,
                'merek' => $request->merek,
                'nama' => $request->nama,
                'transmisi' => $request->transmisi,
                'bahan_bakar' => $request->bahan_bakar,
                'harga_sewa' => $request->harga_sewa,
                'warna' => $request->warna,
                'status' => $request->status,
            ]);
        } else {
            $mobil->update([
                'id' => $request->id,
                'keterangan' => $request->keterangan,
                'gambar' => $mobil->gambar,
                'merek' => $request->merek,
                'nama' => $request->nama,
                'transmisi' => $request->transmisi,
                'bahan_bakar' => $request->bahan_bakar,
                'harga_sewa' => $request->harga_sewa,
                'warna' => $request->warna,
                'status' => $request->status,
            ]);
        }
        $mobil->save();

        $mobil = Mobil::get();
        return view('admins.mobil.index', ['mobil' => $mobil]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, $id_mobil)
    {
        $mobil = Mobil::find($id_mobil);
        $mobil->delete();
        File::delete("storage/" . $mobil->gambar);

        $mobil = Mobil::get();
        return view('admins.mobil.index', ['mobil' => $mobil]);
    }
}
