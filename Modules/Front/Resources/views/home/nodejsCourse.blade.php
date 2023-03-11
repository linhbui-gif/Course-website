@extends('front::layouts.master')

@section('content')
    <div id="blocks" data-ss-school-id='146684' class="blocks-page blocks-page-course_sales_page ">
        <div class="course-top-row has-hero-image" style="background:#fb4d44">
            <div class="black-overlay" style="opacity: 0;">&nbsp;</div>
            <div class="container">
                <div class="row">

                    <div class="col-12 course-header-container">
                        <h1 class="course-title">
                            Khóa học NodeJS Complete API
                        </h1>
                        <h2 class="course-subtitle">
                            Tìm hiểu cách xây dựng các API RESTful có khả năng mở rộng cao, nhanh chóng với Node, Express và MongoDB.
                        </h2>
                    </div>
                </div>

            </div>
        </div>
        <div class="course-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Học cách xây dựng các ứng dụng NodeJS như một chuyên gia</h2>
                        <p>Bạn muốn học Node.js, nhưng cảm thấy mệt mỏi với những người hướng dẫn dài dòng và chậm chạp, và bạn vẫn chưa thể đi làm với mức thu nhập mong muốn?</p>
                        <p>Và tôi có một <strong>khóa học hoàn hảo nhất dành cho bạn</strong>.Một khóa học NodeJS <strong>thực chiến</strong> có thể giúp bạn tự tin apply vào các công ty và có thể phát triển xa hơn. </p>
                        <p>Một sự kết hợp hoàn hảo giữa lý thuyết và thực hành sẽ theo sát bạn đến khi khóa học kết thúc.</p>
                        <p>Tự tin tìm hiểu cách xây dựng API RESTful với Node, Express và MongoDB.</p>
                        <p><strong>Tất cả được nằm trong một khóa học thực chiến về NodeJS sẽ khiến bạn hài lòng nhất.</strong></p>
                    </div>
                    <div class="col-md-offset-1 col-md-5">
                        <div class="features">
                            <ul>
                                <li>
                                    <div class="glyphicon glyphicon-stats"></div>Người mới bắt đầu
                                </li>
                                <li>
                                    <div class="glyphicon glyphicon-facetime-video"></div>12 chương học
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
                            <li>Tự tin xây dựng,test và Deploy triển khai các dự án NodeJS</li>
                            <li>Lưu trữ dữ liệu phức tạp trong MongoDB.</li>
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
                            <li>Tất cả về hệ thống modules NodeJS</li>
                            <li>Sử dụng các Node Package hoặc Publish Package của riêng bạn</li>
                            <li>Viết code asynchronous JavaScript code (promises and async/await)</li>
                            <li>Xây dựng các tính năng CRUD</li>
                            <li>Lưu trữ dữ liệu quan hệ, phức tạp trong MongoDB bằng Mongoose</li>
                            <li>Triển khai data validation</li>
                            <li>Triển khai authentication and authorization</li>
                            <li>Handle and log errors</li>
                            <li>Deploy your Node apps to Heroku</li>
                            <li>Handle and log errors</li>
                            <li>Và còn nhiều hơn thế nữa !</li>
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
                            <li>Những bạn định hướng theo <strong>MEARN STACK</strong></li>
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
    </div>

@endsection

@section('after_scripts')
    <script src="{{ asset('/frontend/assets/js/node-course.js') }}"></script>
@stop
