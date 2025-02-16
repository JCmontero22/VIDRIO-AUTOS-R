function init() {
    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(() => {
            document.querySelector(".header").classList.add("show");
        }, 200);
    });
}


init();