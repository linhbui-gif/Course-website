@extends('front::layouts.master')

@section('content')
    <div id="blocks" data-ss-school-id='146684' class="blocks-page blocks-page-course_sales_page ">
        <div class="course-top-row has-hero-image" style="background:#fb4d44">
            <div class="black-overlay" style="opacity: 0;">&nbsp;</div>
            <div class="container">
                <div class="row">

                    <div class="col-12 course-header-container">
                        <h1 class="course-title">
                            Khóa học PHP OOP nâng cao
                        </h1>
                        <h2 class="course-subtitle">
                            Kiến thức nâng cao về PHP có thể giúp bạn làm chủ mọi Framework trong dự án thực tế.
                        </h2>
                    </div>
                </div>

            </div>
        </div>
        <div class="course-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Bạn gặp khó khăn khi tiếp cận các Framework của PHP?</h2>
                        <p>Khóa học này sẽ giúp bạn hiểu sâu hơn về PHP thông qua các Project thực tế với các tính năng nâng cao vượt trội.</p>
                        <p>Trong khóa học PHP nâng cao này, bạn sẽ được học các kĩ thuật tối ưu code, kĩ thuật làm các tính năng liên quan đến <strong>Search nâng cao</strong>,các tính năng phức tạp mà bất kì website bán hàng nào cũng cần thiết. </p>
                        <p><strong>Đặc biệt hơn nữa, bạn sẽ được học về cách sử dụng Amazon Web Services - Một kiến thức rất thực tế và cần thiết ở bất cứ công ty nào, mình tin rằng rất ít bạn nắm được khi học ở các khóa học khác.</strong></p>
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
                            <li>Tự tin triển khai các tính năng nâng cao trong hệ thống website bán hàng : Payment, Order tracking, Search Optimize...</li>
                            <li>Hiểu cách triển khai dự án lên Amazon web services.</li>
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
                            <li>Xây dựng một cấu trúc dự án hoàn chỉnh chuyên nghiệp từ A-Z</li>
                            <li>Áp dụng kĩ thuật Search nâng cao vào dự án.</li>
                            <li>Processing Credit Card Transactions</li>
                            <li>Sử dụng Amazon.com Web Services</li>
                            <li>Tính năng Payment dành cho website bán hàng</li>
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
                            <li>Khóa học dành cho những bạn muốn học sâu kiến thức về PHP và có thể dễ dàng tiếp cận các Framework của PHP</li>
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
    <script src="{{ asset('/frontend/assets/js/php-advance.js') }}"></script>
@stop
