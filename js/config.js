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
}
navigationResponsive.init();