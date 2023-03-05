let mainCourse = [
    {
        name: "Khóa Học Php Cơ Bản",
        link: "course-php-basic.html",
        image: "php.jpg",
        decription: "Master Php: Go from Novice to Professional. Everything you need to code in Php in one bundle!"
    },
    {
        name: "Javascipt Nền Tảng Lập Trình",
        link: "course-js-basic.html",
        image: "js.png",
        decription: "Master Js: Go from Novice to Professional. Everything you need to code in Js in one bundle!"
    },
    {
        name: "Khởi Đầu Với Laravel",
        link: "course-laravel-basic.html",
        image: "laravel.png",
        decription: "Master Laravel: Go from Novice to Professional. Everything you need to code in Laravel in one bundle!"
    },
    {
        name: "Nodejs Complete Api",
        link: "course-nodejs.html",
        image: "nodejs-1500x844.png",
        decription: "Master Nodejs: Go from Novice to Professional. Everything you need to code in Nodejs in one bundle!"
    },
    {
        name: "Master ReactJS",
        link: "course-reactjs.html",
        image: "react.jpg",
        decription: "Master React: Go from Novice to Professional. Everything you need to code in React in one bundle!"
    },
    {
        name: "Khóa Học Php Nâng Cao",
        link: "course-php-advanced.html",
        image: "php-t.jpg",
        decription: "Master Php OOP Advance: Go from Novice to Professional. Everything you need to code in Php OOP Advance in one bundle!"
    }
];
let courseContent = '';
for (let i = 0; i < mainCourse.length; i++) {
    courseContent += `<div class='col-xs-12 col-sm-6 col-md-4'>
            <div class='course-listing'>
                    <a href="${mainCourse[i].link}" data-role="course-box-link">
                            <div class='course-box-image-container'>
                                <img class='course-box-image'
                                    src='images/${mainCourse[i].image}'
                                    role="presentation">
                            </div>
                            <div class='course-listing-title'>
                            ${mainCourse[i].name}
                            </div>
                            <div class="course-listing-subtitle">
                                ${mainCourse[i].decription}
                            </div>

                    </a>

            </div>
        </div>`;
    }
    document.getElementById("content_wrapper").innerHTML = courseContent;
