window.onload = () => {
    navigationResponsive.init();
    modal.init();
};
const navigationResponsive = {
    init:function (){
        this.toggle();
    },
    toggle:function (){
        let button = document.querySelector('.btstrp-navbar-toggle');
        let nav = document.querySelector('.header_top-list');
        button.addEventListener('click', function (){
            nav.classList.toggle('show')
        })
    }
};

const modal = {
    init: function () {
        this.config();
    },
    config: function () {
        const openBtn = document.querySelectorAll(".js-open-modal");
        openBtn.forEach((item) =>
            item.addEventListener("click", () => {
                const targetId = item.dataset.modalId;

                const modal = document.querySelector(targetId);
                if (modal) {
                    modal.classList.add("active");
                    const overlay = modal.querySelector(".Modal-overlay");
                    const close = modal.querySelectorAll(".Modal-close");

                    overlay.addEventListener("click", () => {
                        modal.classList.remove("active");
                    });
                    close.forEach((item) =>
                        item.addEventListener("click", () => {
                            modal.classList.remove("active");
                        })
                    );
                }
            })
        );
    },
};
