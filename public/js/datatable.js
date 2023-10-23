$(document).ready(function () {
    $("#example").DataTable({
        responsive: true,
        columnDefs: [{ className: "dt-center", targets: "_all" }],
    });
});
