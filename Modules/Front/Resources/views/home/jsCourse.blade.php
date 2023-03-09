@extends('front::layouts.master')

@section('content')
    <div id="blocks" data-ss-school-id='146684' class="blocks-page blocks-page-course_sales_page ">
        <div class="course-top-row has-hero-image" style="background:#fb4d44">
            <div class="black-overlay" style="opacity: 0;">&nbsp;</div>
            <div class="container">
                <div class="row">

                    <div class="col-12 course-header-container">
                        <h1 class="course-title">
                            Series Javascript nền tảng chuyên sâu
                        </h1>
                        <h2 class="course-subtitle">
                            Làm chủ JavaScript: Đi từ cơ bản đến Chuyên nghiệp
                        </h2>
                    </div>
                </div>

            </div>
        </div>
        <div class="course-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Học cách viết code bằng JavaScript với sự tự tin</h2>
                        <p>JavaScript là một trong những ngôn ngữ lập trình phổ biến nhất trên thế giới. Các công ty như Walmart, Netflix và PayPal chạy các ứng dụng nội bộ lớn xung quanh JavaScript.</p>
                        <p>Nếu bạn đang tìm kiếm một công việc trong lĩnh vực phát triển ứng dụng web hoặc di động, thì bạn PHẢI biết rõ về JavaScript.</p>
                        <p>Vấn đề là: JavaScript rất phức tạp và hầu hết các cuốn sách cũng như khóa học đều không thể giải thích nó một cách chính xác, bằng những từ ngữ đơn giản, theo cách mà hầu hết mọi người có thể hiểu được. Đó là lý do tại sao tôi đã tạo ra danh sách các bài học này cho bạn.</p>
                        <p>Tôi chia nhỏ JavaScript thành các phần dễ hiểu và dễ hiểu bằng cách sử dụng các ví dụ thực tế, bài tập và giải pháp từng bước.</p>
                    </div>
                    <div class="col-md-offset-1 col-md-5">
                        <div class="features">
                            <ul>
                                <li>
                                    <div class="glyphicon glyphicon-stats"></div>Người mới bắt đầu
                                </li>
                                <li>
                                    <div class="glyphicon glyphicon-facetime-video"></div>8 chương học
                                </li>
                                <li>
                                    <div class="glyphicon glyphicon-time"></div>3 tháng
                                </li>
                                <li>
                                    <div class="glyphicon glyphicon-list-alt"></div>Bài tập rèn luyện
                                </li>
                                <li>
                                    <div class="glyphicon glyphicon-globe"></div>Thực chiến qua dự án
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="course-block block rich_text  even-stripe" id="block-6193388">
            <div class="container">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 course-description">
                        <h2>Đến cuối khóa học này, bạn sẽ có thể…</h2>
                        <ul class="outcomes optimized-padding-left">
                            <li>Tự tin phát triển và xử lý lỗi các chương trình JavaScript</li>
                            <li>Hiểu và khắc phục các lỗi phổ biến</li>
                            <li>Sẵn sàng học phát triển web/app mobile bằng JavaScript</li>
                            <li>Có nền tảng vững chắc khi tiếp cận ReactJS/VueJS...</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="course-block block rich_text  odd-stripe" id="block-6298322">
            <div class="container">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 course-description">
                        <h2>Bạn sẽ học được những gì...</h2>
                        <ul class="outcomes optimized-padding-left">
                            <li>Nguyên tắc cơ bản của lập trình</li>
                            <li>Kiến thức sâu về biến</li>
                            <li>Toán tử (So sánh, logic v.v.)</li>
                            <li>Câu lệnh điều kiện (if/else, switch/case)</li>
                            <li>Vòng lặp (for, while, do-white)</li>
                            <li>Object-oriented programming</li>
                            <li>Functions</li>
                            <li>Getters and setters</li>
                            <li>Functions</li>
                            <li>Con trỏ "this"</li>
                            <li>Các tính năng "thông dụng" được sử dụng trong dự án thực tế</li>
                            <li>Và còn nhiều, nhiều hơn thế nữa !</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="course-block block rich_text  even-stripe" id="block-18589593">
            <div class="container">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 course-description">
                        <h2>Khóa học này dành cho ai?</h2>
                        <ul class="optimized-padding-left">
                            <li>Bất cứ ai theo đuổi sự nghiệp phát triển web hoặc app mobile</li>
                            <li>Các nhà phát triển JavaScript muốn cải thiện các kỹ năng JavaScript của bản thân</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @include('front::home.leatures')
        <div class="course-block block curriculum  even-stripe" id="block-62816558">
            <div class='container'>
                <div class='row'>
                    <div class='col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2'>
                        <h2>
                            Nội Dung Khóa Học
                        </h2>
                        <br>

                        <div class='row' id="content_wrapper">

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="course-block block bundle_contents  odd-stripe" id="block-111929869">
            <div class="container">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
                        <h2>
                            Khóa học đề xuất
                        </h2>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6">

                                <div class="course-listing bundle">
                                    <a class="row" href="{{route('reactcourse')}}">
                                        <div class="col-lg-12">

                                            <div class="course-box-image-container">
                                                <img class="course-box-image" src="{{asset('/frontend/assets/images/react.jpg')}}">
                                            </div>
                                            <div class="course-listing-title">
                                                Reactjs Từ Cơ Bản Đến Nâng Cao
                                            </div>

                                            <div class="course-listing-subtitle">
                                                Master React: Go from Novice to Professional. Everything you need to code in React in one bundle!
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">

                                <div class="course-listing bundle">
                                    <a class="row" href="{{route('nodejscourse')}}">
                                        <div class="col-lg-12">

                                            <div class="course-box-image-container">
                                                <img class="course-box-image" src="{{asset('/frontend/assets/images/nodejs-1500x844.png')}}">
                                            </div>
                                            <div class="course-listing-title">
                                                Nodejs Complete Api
                                            </div>

                                            <div class="course-listing-subtitle">
                                                Master Nodejs: Go from Novice to Professional. Everything you need to code in Nodejs in one bundle!
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('after_scripts')
    <script src="{{ asset('/frontend/assets/js/js-course.js') }}"></script>
@stop
