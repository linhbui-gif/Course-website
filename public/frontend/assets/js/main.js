window.onload = () => {
    menu.init();
    owlCarousel.init();
    tab.init();
    collapse.init();
    modal.init();
    submitFileStep.init();
    updateInfoSturyAbroadStep.init();
    wowJs.init();
};

const menu = {
    init: function () {
        this.menuMobile();
        this.accountMenuDekstop();
        this.accountMenuMobile();
    },
    menuMobile: function () {
        const btn = document.querySelector(".header-mobile .Header-actions-item.menu");
        const main = document.querySelector(".header-mobile .Navigation");
        const closeBtn = main.querySelector(".header-mobile .Navigation-close");
        const overlay = main.querySelector(".header-mobile .Navigation-overlay");

        btn.addEventListener("click", () => {
            main.classList.add("active");
        });

        closeBtn.addEventListener("click", () => {
            main.classList.remove("active");
        });

        overlay.addEventListener("click", () => {
            main.classList.remove("active");
        });
    },
    accountMenuDekstop: function () {
        const openBtn = document.querySelector(".header-desktop .Header-actions-item.account");
        const main = document.querySelector(".header-desktop .DropdownAccount");

        openBtn?.addEventListener("click", () => {
            main.classList.toggle("active");
        });

        const listener = (event) => {
            if (!main || main.contains(event.target)) {
                return;
            }
            main?.classList?.remove("active");
        };
        document.addEventListener("mousedown", listener);
        document.addEventListener("touchstart", listener);
    },
    accountMenuMobile: function () {
        const openBtn = document.querySelector(".header-mobile .Header-actions-item.account");
        const main = document.querySelector(".header-mobile .DropdownAccount");

        openBtn?.addEventListener("click", () => {
            main.classList.toggle("active");
        });

        const listener = (event) => {
            if (!main || main.contains(event.target)) {
                return;
            }
            main?.classList?.remove("active");
        };
        document.addEventListener("mousedown", listener);
        document.addEventListener("touchstart", listener);
    },
};

const owlCarousel = {
    init: function () {
        this.setupHomeBannerCarousel();
        this.setupCustomersCarousel();
        this.setupEventsCarousel();
        this.setupCoreValuesCarousel();
        this.setupFeedbacksCarousel();
        this.setupModalAuthCarousel();
        this.setupFeedbackCarousel();
        this.setupGalleryCarousel();
        this.setupRelatedSchoolCarousel();
        this.setupPartnersCarousel();
        this.setupModalAuthRegisterCarousel();
        this.setupModalAuthResetCarousel();
    },
    setupHomeBannerCarousel: function () {
        const $owl = $("#HomeBanner-carousel").owlCarousel({
            responsive: {
                0: {
                    items: 1,
                    slideBy: 1,
                },
            },
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            smartSpeed: 300,
            //lazyLoad: true,
            dots: false,
            nav: false,
            // navText: [
            //   '<img src="./assets/icons/icon-arrow-left-white.svg" alt="" />',
            //   '<img src="./assets/icons/icon-arrow-right-white.svg" alt="" />',
            // ],
            margin: 0,
        });
    },
    setupCustomersCarousel: function () {
        const $owl = $("#Customers-carousel").owlCarousel({
            responsive: {
                0: {
                    items: 1.3,
                    slideBy: 1.3,
                    margin: 16,
                },
                768: {
                    items: 3,
                    slideBy: 1,
                },
            },
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            smartSpeed: 300,
            lazyLoad: true,
            dots: true,
            nav: true,
            navText: [
                '<img src="/frontend/assets/icons/icon-angle-left.svg" alt="" />',
                '<img src="/frontend/assets/icons/icon-angle-right.svg" alt="" />',
            ],
            margin: 20,
        });
    },
    setupEventsCarousel: function () {
        const $owl = $("#Events-carousel").owlCarousel({
            responsive: {
                0: {
                    items: 1,
                    slideBy: 1,
                    margin: 16,
                },
                768: {
                    items: 3,
                    slideBy: 1,
                    margin: 16,
                },
                991: {
                    items: 3,
                    slideBy: 1,
                },
            },
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            smartSpeed: 300,
            lazyLoad: true,
            dots: true,
            nav: false,
            // navText: [
            //   '<img src="./assets/icons/icon-arrow-left-white.svg" alt="" />',
            //   '<img src="./assets/icons/icon-arrow-right-white.svg" alt="" />',
            // ],
            margin: 10,
        });
    },
    setupCoreValuesCarousel: function () {
        const $owl = $("#CoreValues-carousel").owlCarousel({
            responsive: {
                0: {
                    items: 1,
                    slideBy: 1,
                },
                768: {
                    items: 2,
                    slideBy: 1,
                },
                991: {
                    items: 3,
                    slideBy: 1,
                },
            },
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            smartSpeed: 300,
            lazyLoad: true,
            dots: false,
            nav: true,
            navText: [
                '<img src="/frontend/assets/icons/icon-angle-circle-left.svg" alt="" />',
                '<img src="/frontend/assets/icons/icon-angle-circle-right.svg" alt="" />',
            ],
            margin: 20,
        });
    },
    setupFeedbackCarousel: function () {
        const $owl = $("#Feedback-carousel").owlCarousel({
            responsive: {
                0: {
                    items: 1,
                    slideBy: 1,
                    margin: 16,
                },
                768: {
                    items: 3,
                    slideBy: 1,
                    margin: 16,
                },
                991: {
                    items: 3,
                    slideBy: 1,
                },
            },
            loop: false,
            autoplay: false,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            smartSpeed: 300,
            lazyLoad: true,
            dots: true,
            nav: false,
            // navText: [
            //   '<img src="./assets/icons/icon-arrow-left-white.svg" alt="" />',
            //   '<img src="./assets/icons/icon-arrow-right-white.svg" alt="" />',
            // ],
            margin: 20,
        });
    },
    setupFeedbacksCarousel: function () {
        const $owl = $("#Feedbacks-carousel").owlCarousel({
            responsive: {
                0: {
                    items: 1,
                    slideBy: 1,
                },
                768: {
                    items: 2,
                    slideBy: 1,
                },
                991: {
                    items: 3,
                    slideBy: 1,
                },
            },
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            smartSpeed: 300,
            lazyLoad: true,
            dots: false,
            nav: false,
            navText: [
                '<img src="/frontend/assets/icons/icon-angle-circle-left.svg" alt="" />',
                '<img src="/frontend/assets/icons/icon-angle-circle-right.svg" alt="" />',
            ],
            margin: 20,
        });
    },
    setupGalleryCarousel: function () {
        const $owl = $("#Gallery-carousel").owlCarousel({
            responsive: {
                0: {
                    items: 1,
                    slideBy: 1,
                },
                768: {
                    items: 2,
                    slideBy: 1,
                },
                991: {
                    items: 3,
                    slideBy: 1,
                },
            },
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            smartSpeed: 300,
            lazyLoad: true,
            dots: false,
            nav: false,
            navText: [
                '<img src="/frontend/assets/icons/icon-angle-circle-left.svg" alt="" />',
                '<img src="/frontend/assets/icons/icon-angle-circle-right.svg" alt="" />',
            ],
            margin: 20,
        });
    },
    setupRelatedSchoolCarousel: function () {
        const $owl = $("#RelatedSchool-carousel").owlCarousel({
            responsive: {
                0: {
                    items: 1,
                    slideBy: 1,
                },
                768: {
                    items: 2,
                    slideBy: 1,
                },
                991: {
                    items: 2,
                    slideBy: 1,
                },
            },
            loop: false,
            autoplay: false,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            smartSpeed: 300,
            lazyLoad: true,
            dots: false,
            nav: false,
            navText: [
                '<img src="/frontend/assets/icons/icon-angle-circle-left.svg" alt="" />',
                '<img src="/frontend/assets/icons/icon-angle-circle-right.svg" alt="" />',
            ],
            margin: 20,
        });
    },
    setupModalAuthCarousel: function () {
        const $owl = $("#ModalAuth-carousel").owlCarousel({
            responsive: {
                0: {
                    items: 1,
                    slideBy: 1,
                },
            },
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            smartSpeed: 300,
            lazyLoad: true,
            dots: true,
            nav: false,
            navText: [
                '<img src="/frontend/assets/icons/icon-angle-circle-left.svg" alt="" />',
                '<img src="/frontend/assets/icons/icon-angle-circle-right.svg" alt="" />',
            ],
            margin: 0,
        });
    },
    setupModalAuthRegisterCarousel: function () {
        const $owl = $("#ModalRegister-carousel").owlCarousel({
            responsive: {
                0: {
                    items: 1,
                    slideBy: 1,
                },
            },
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            smartSpeed: 300,
            lazyLoad: true,
            dots: true,
            nav: false,
            navText: [
                '<img src="/frontend/assets/icons/icon-angle-circle-left.svg" alt="" />',
                '<img src="/frontend/assets/icons/icon-angle-circle-right.svg" alt="" />',
            ],
            margin: 0,
        });
    },
    setupModalAuthResetCarousel: function () {
        const $owl = $("#ModalReset-carousel").owlCarousel({
            responsive: {
                0: {
                    items: 1,
                    slideBy: 1,
                },
            },
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            smartSpeed: 300,
            lazyLoad: true,
            dots: true,
            nav: false,
            navText: [
                '<img src="/frontend/assets/icons/icon-angle-circle-left.svg" alt="" />',
                '<img src="/frontend/assets/icons/icon-angle-circle-right.svg" alt="" />',
            ],
            margin: 0,
        });
    },
    setupPartnersCarousel: function () {
        const $owl = $("#Partners-carousel").owlCarousel({
            responsive: {
                0: {
                    items: 2,
                    slideBy: 1,
                },
                768: {
                    items: 3,
                    slideBy: 1,
                },
                991: {
                    items: 7,
                    slideBy: 1,
                },
            },
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            smartSpeed: 300,
            lazyLoad: true,
            dots: true,
            nav: true,
            navText: [
                '<img src="/frontend/assets/icons/icon-angle-left.svg" alt="" />',
                '<img src="/frontend/assets/icons/icon-angle-right.svg" alt="" />',
            ],
            margin: 20,
        });
    },
};

const tab = {
    init: function () {
        this.config();
    },
    config: function () {
        const mains = document.querySelectorAll(".Tab");
        mains.forEach((main) => {
            const tabItems = main.querySelectorAll(".Tab-header-item");
            const tabMainItems = main.querySelectorAll(".Tab-main-item");

            tabItems.forEach((item, index) =>
                item.addEventListener("click", () => {
                    tabItems.forEach((i) => i.classList.remove("active"));
                    tabMainItems.forEach((i) => i.classList.remove("active"));

                    tabItems[index]?.classList?.add("active");
                    tabMainItems[index]?.classList?.add("active");
                })
            );

            tabItems[0]?.classList?.add("active");
            tabMainItems[0]?.classList?.add("active");
        });
    },
};

const collapse = {
    init: function () {
        this.config();
    },
    config: function () {
        const mains = document.querySelectorAll(".Collapse");

        mains.forEach((item) => {
            const header = item.querySelector(".Collapse-header");
            header.addEventListener("click", () => {
                item.classList.toggle("active");
            });
        });
    },
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
                console.log(item.dataset);

                const modal = document.querySelector(targetId);
                if (modal) {
                    modal.classList.add("active");
                    // modal.style.display = "block";
                    const overlay = modal.querySelector(".Modal-overlay");
                    const close = modal.querySelectorAll(".Modal-close");

                    overlay.addEventListener("click", () => {
                        modal.classList.remove("active");
                        console.log(overlay);
                        // console.log('vao');
                        // modal.style.display = "none";
                    });
                    close.forEach((item) =>
                        item.addEventListener("click", () => {
                            modal.classList.remove("active");
                            // modal.style.display = "none";
                        })
                    );
                }
            })
        );
    },
};

const submitFileStep = {
    init: function () {
        this.configSubmitFilePage();
        this.configUpdateFilesPage();
    },
    configSubmitFilePage: function () {
        let step = 0;
        const stepHeader = document.querySelectorAll(
            ".SubmitFilePage-step-header-item"
        );
        const stepBody = document.querySelectorAll(
            ".SubmitFilePage-step-body-item"
        );
        const nextStepBtn = document.querySelectorAll(
            ".SubmitFilePage-form-submit"
        );

        const triggerStep = (currentStep) => {
            stepHeader.forEach((i) => i.classList.remove("active"));
            stepBody.forEach((i) => i.classList.remove("active"));

            stepHeader?.[currentStep]?.classList?.add("active");
            stepBody?.[currentStep]?.classList?.add("active");
        };

        triggerStep(step);

        nextStepBtn.forEach((item) =>
            item.addEventListener("click", () => {
                var validated = true;
                if(step == 0){
                    validated = validateStep1();
                }
                if(!validated) return false;
                if (step < stepHeader.length - 1) {
                    step += 1;
                    triggerStep(step);
                }
            })
        );

        stepHeader.forEach((item, index) =>
            item.addEventListener("click", () => {
                step = index;
                triggerStep(step);
            })
        );
    },
    configUpdateFilesPage: function () {
        let step = 0;
        const stepHeader = document.querySelectorAll(
            ".SubmitFilePage-step-header-item"
        );
        const stepBody = document.querySelectorAll(
            ".UpdateInfoSturyAbroad-step"
        );
        const nextStepBtn = document.querySelectorAll(
            ".UpdateInfoSturyAbroad-step-submit"
        );

        const triggerStep = (currentStep) => {
            stepHeader.forEach((i) => i.classList.remove("active"));
            stepBody.forEach((i) => i.classList.remove("active"));

            stepHeader?.[currentStep]?.classList?.add("active");
            stepBody?.[currentStep]?.classList?.add("active");
        };

        triggerStep(step);

        nextStepBtn.forEach((item) =>
            item.addEventListener("click", () => {
                if (step < stepHeader.length - 1) {
                    step += 1;
                    triggerStep(step);
                }
            })
        );

        stepHeader.forEach((item, index) =>
            item.addEventListener("click", () => {
                step = index;
                triggerStep(step);
            })
        );
    },
};

const updateInfoSturyAbroadStep = {
    init: function () {
        this.config();
    },
    config: function () {
        let step = 0;
        const main = document.querySelectorAll(".UpdateInfoSturyAbroad-step");
        const nextStepBtn = document.querySelectorAll(
            ".UpdateInfoSturyAbroad-step-submit"
        );

        const triggerStep = (currentStep) => {
            window.scrollTo(0,0);
            main.forEach((i) => i.classList.remove("active"));
            main?.[currentStep]?.classList?.add("active");
        };

        triggerStep(step);

        nextStepBtn.forEach((item) =>
            item.addEventListener("click", () => {
                if (step < nextStepBtn.length - 1) {
                    step += 1;
                    triggerStep(step);
                }
            })
        );
    },
};


// const wowJs = {
//     init: function() {
//         this.config()
//     },
//     config: function() {
//         new WOW().init();
//     },
// }
function validateStep1(){

    $(".error").remove();

    var full_name = $("#full_name").val();
    if(full_name == ""){
        $("<label class='error'>Họ tên không được rỗng </label>" ).insertAfter( "#full_name" );
        return false;
    }

    var phone = $("#phone").val();
    if(phone == ""){
        $("<label class='error'>Số điện thoại không được rỗng </label>" ).insertAfter( "#phone" );
        return false;
    }

    var email = $("#email_user").val();
    if(email == ""){
        $("<label class='error'>Email không được rỗng </label>" ).insertAfter( "#email_user" );
        return false;
    }

    var country_id = $("#country_id").val();
    if(country_id == ""){
        $("<label class='error'>Quốc gia không được rỗng</label>" ).insertAfter( "#country_id" );
        return false;
    }

    var level_id = $("#level_id").val();
    if(level_id == ""){
        $("<label class='error'>Bật học không được rỗng</label>" ).insertAfter( "#level_id" );
        return false;
    }

    return true;
}
// $(document).ready(function() {
//     $(window).scroll(function() {
//
//         let headerH = $('.header-desktop').outerHeight(true);
//
//         let scrollVal = $(this).scrollTop();
//         if ( scrollVal > headerH ) {
//             $('.header-desktop').addClass('fixed');
//             $('.header-mobile').addClass('fixed');
//             // $('.Navigation').css('top',headerH);
//             // $('.Header').addClass('fixed');
//         } else {
//             $('.header-desktop').removeClass('fixed');
//             $('.header-mobile').removeClass('fixed');
//             // $('.Header').removeClass('fixed');
//             // $('.Navigation').css('top',0);
//         }
//     });
// });
var tabLinks = document.querySelectorAll(".list-link .nav .menu-item .menu-item-link");
var tabContent =document.querySelectorAll(".tab-contents");

tabLinks.forEach(function(el) {
    el.addEventListener("click", openTabs);
});


function openTabs(el) {
    var btn = el.currentTarget; // lắng nghe sự kiện và hiển thị các element
    var electronic = btn.dataset.electronic; // lấy giá trị trong data-electronic

    tabContent.forEach(function(el) {
        el.classList.remove("active");
    });

    tabLinks.forEach(function(el) {
        el.classList.remove("active");
    });

    document.querySelector("#" + electronic).classList.add("active");

    btn.classList.add("active");
}
const openSidebar = {
    init:function (){
        this.show();
        this.hideOverlay()
    },
    show:function (){
        let button = document.querySelector(".icon-mobile")
        let nav = document.querySelector('.header__link .list-link')
        let overlay = document.querySelector('.overlay');
        if(button){
            button.addEventListener('click', function (){
                nav.classList.toggle('show')
                this.classList.add('hide')
                overlay.classList.add('overlay-active')
            })
        }
    },
    hideOverlay:function (){
        let button = document.querySelector(".icon-mobile")
        let nav = document.querySelector('.header__link .list-link')
        let overlay = document.querySelector('.overlay')
        overlay.addEventListener('click', function (){
            nav.classList.remove('show')
            button.classList.remove('hide')
            overlay.classList.remove('overlay-active')
        })
    }
}
openSidebar.init();

