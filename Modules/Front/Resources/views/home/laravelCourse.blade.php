@extends('front::layouts.master')

@section('content')
    <div id="blocks" data-ss-school-id='146684' class="blocks-page blocks-page-course_sales_page ">
        <div class="course-top-row has-hero-image" style="background:#fb4d44;">
            <div class="black-overlay" style="opacity: 0;">&nbsp;</div>
            <div class="container">
                <div class="row">

                    <div class="col-12 course-header-container">
                        <h1 class="course-title">
                            Khóa học Laravel Framework
                        </h1>
                        <!--                        <h2 class="course-subtitle">-->
                        <!--                            Tìm hiểu cách xây dựng các API RESTful có khả năng mở rộng cao, nhanh chóng và an toàn với Node, Express và MongoDB.-->
                        <!--                        </h2>-->
                    </div>
                </div>

            </div>
        </div>
        <div class="course-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Bạn mới bắt đầu học Laravel?</h2>
                        <p>Khóa học này sẽ đưa bạn qua các phần được sử dụng nhiều nhất trong các dự án thực tế để giúp bạn bắt đầu thuận lợi và phát triển tốt nhất.</p>
                        <p>Trong khóa học Laravel Cơ bản này, bạn sẽ học cách xây dựng các ứng dụng web với Laravel. Khi bạn hoàn thành khóa học này, bạn sẽ có các kỹ năng và kiến thức về Laravel framework cần thiết để dễ dàng xây dựng các trang web sử dụng Laravel.</p>
                    </div>
                    <div class="col-md-offset-1 col-md-5">
                        <div class="features">
                            <ul>
                                <li>
                                    <div class="glyphicon glyphicon-stats"></div>Người mới bắt đầu
                                </li>
                                <li>
                                    <div class="glyphicon glyphicon-facetime-video"></div>16 chương học
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
                            <li>Tự tin xây dựng website sử dụng Framework Laravel</li>
                            <li>Hiểu sâu về cấu trúc core và cách hoạt động của Laravel như : Container,Routing,Controller, Eloquent,Queues,Jobs...</li>
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
                            <li>Cấu trúc các thành phần trong core của Laravel</li>
                            <li>Database and Eloquent</li>
                            <li>Container</li>
                            <li>Testing</li>
                            <li>Xây dựng API</li>
                            <li>Mail and Notifications</li>
                            <li>Queues, Jobs, Events, Broadcasting, and the Scheduler</li>
                            <li>Handle and log errors</li>
                            <li>Deployment</li>
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
                            <li>Bất cứ ai muốn học sâu về cách hoạt động của Laravel Framework để có thể Apply được vào các công ty công nghệ lớn trong và ngoài nước</li>
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
    <script src="{{ asset('/frontend/assets/js/laravel-basic.js') }}"></script>
@stop
