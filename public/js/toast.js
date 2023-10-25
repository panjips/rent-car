document.addEventListener("DOMContentLoaded", function () {
    const toastTriggerDelete = document.getElementById("toastDeleteBtn");
    const toastLiveDelete = document.getElementById("toastDelete");

    const toastTriggerEditUser = document.getElementById("toastEditUserBtn");
    const toastTriggerEditMobil = document.getElementById("toastEditMobilBtn");
    const toastTriggerEditPenyewaan = document.getElementById(
        "toastEditPenyewaanBtn"
    );
    const toastLiveEdit = document.getElementById("toastEdit");

    if (toastTriggerDelete) {
        const toastBootstrap =
            bootstrap.Toast.getOrCreateInstance(toastLiveDelete);
        toastTriggerDelete.addEventListener("click", () => {
            toastBootstrap.show();
        });
    }

    if (toastTriggerEditUser) {
        const toastBootstrap =
            bootstrap.Toast.getOrCreateInstance(toastLiveEdit);
        toastTriggerEditUser.addEventListener("click", () => {
            toastBootstrap.show();
        });
    }

    if (toastTriggerEditMobil) {
        const toastBootstrap =
            bootstrap.Toast.getOrCreateInstance(toastLiveEdit);
        toastTriggerEditMobil.addEventListener("click", () => {
            toastBootstrap.show();
        });
    }

    if (toastTriggerEditPenyewaan) {
        const toastBootstrap =
            bootstrap.Toast.getOrCreateInstance(toastLiveEdit);
        toastTriggerEditPenyewaan.addEventListener("click", () => {
            toastBootstrap.show();
        });
    }
});
