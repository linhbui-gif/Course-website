@extends('front::layouts.master')
<?php
use App\Helpers\Auth;
$user = Auth::getUserInfo();
$settings = \App\Helpers\General::get_settings();
?>

@section('meta')

    @include("front::includes.meta", [
        'meta_title' => @$settings['site_title']['value'],
        'meta_description' => @$settings['og_description']['value'],
        'link' => route('trang-chu'),
        'thumbnail' =>  @$settings['og_image']['value'],
        'robots' => 1
    ])

@stop

@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    <div class='view-directory course-directory '>
        <div class='container'>
            <div class='row course-list list' id="content_wrapper">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="course-listing">
                        <a href="{{route('phpcourse')}}" data-role="course-box-link">
                            <div class="course-box-image-container">
                                <img class="course-box-image" src="{{asset('/frontend/assets/images/php.jpg')}}" role="presentation">
                            </div>
                            <div class="course-listing-title">
                                Khóa Học Php Cơ Bản
                            </div>
                            <div class="course-listing-subtitle">
                                Master Php: Go from Novice to Professional. Everything you need to code in Php in one bundle!
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="course-listing">
                        <a href="{{route('jscourse')}}" data-role="course-box-link">
                            <div class="course-box-image-container">
                                <img class="course-box-image" src="{{asset('/frontend/assets/images/js.png')}}" role="presentation">
                            </div>
                            <div class="course-listing-title">
                                Javascipt Nền Tảng Lập Trình
                            </div>
                            <div class="course-listing-subtitle">
                                Master Js: Go from Novice to Professional. Everything you need to code in Js in one bundle!
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="course-listing">
                        <a href="{{route('laravelcourse')}}" data-role="course-box-link">
                            <div class="course-box-image-container">
                                <img class="course-box-image" src="{{asset('/frontend/assets/images/laravel.png')}}" role="presentation">
                            </div>
                            <div class="course-listing-title">
                                Khởi Đầu Với Laravel
                            </div>
                            <div class="course-listing-subtitle">
                                Master Laravel: Go from Novice to Professional. Everything you need to code in Laravel in one bundle!
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="course-listing">
                        <a href="{{route('nodejscourse')}}" data-role="course-box-link">
                            <div class="course-box-image-container">
                                <img class="course-box-image" src="{{asset('/frontend/assets/images/nodejs-1500x844.png')}}" role="presentation">
                            </div>
                            <div class="course-listing-title">
                                Nodejs Complete Api
                            </div>
                            <div class="course-listing-subtitle">
                                Master Nodejs: Go from Novice to Professional. Everything you need to code in Nodejs in one bundle!
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="course-listing">
                        <a href="{{route('reactcourse')}}" data-role="course-box-link">
                            <div class="course-box-image-container">
                                <img class="course-box-image" src="{{asset('/frontend/assets/images/react.jpg')}}" role="presentation">
                            </div>
                            <div class="course-listing-title">
                                Master ReactJS
                            </div>
                            <div class="course-listing-subtitle">
                                Master React: Go from Novice to Professional. Everything you need to code in React in one bundle!
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="course-listing">
                        <a href="{{route('phpAdcourse')}}" data-role="course-box-link">
                            <div class="course-box-image-container">
                                <img class="course-box-image" src="{{asset('/frontend/assets/images/php-t.jpg')}}" role="presentation">
                            </div>
                            <div class="course-listing-title">
                                Khóa Học Php Nâng Cao
                            </div>
                            <div class="course-listing-subtitle">
                                Master Php OOP Advance: Go from Novice to Professional. Everything you need to code in Php OOP Advance in one bundle!
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
