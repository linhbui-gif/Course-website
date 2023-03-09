<!DOCTYPE html>
<html lang="en">
<?php
$ver_js = \App\Helpers\General::get_version_js();
$ver_css = \App\Helpers\General::get_version_css();
$ac = \App\Helpers\General::get_controller_action();
$settings = \App\Helpers\General::get_settings();
?>

    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('/frontend/assets/css/main.css')}}?v={{ time() }}">
        <link rel="icon" type="image/png" href="{{ $settings['favicon_ico']['value'] }}">
    @yield('meta')
    <link rel="stylesheet" href="{{asset('/frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/assets/css/jquery.fancybox.min.css')}}" >
    <link rel="stylesheet" href="{{asset('/frontend/assets/css/toastr.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/assets/css/custome.css')}}">
    @yield('after_styles')
    </head>
    <body>
        @include('front::includes.header')
        @yield('content')
{{-- Script --}}
<script src="{{ asset('/frontend/assets/js/jquery-3.3.1.slim.min.js') }}" ></script>
<script src="{{ asset('/frontend/assets/js/popper.min.js') }}"></script>
        {{-- Jquery --}}
        <script src="{{ asset('/frontend/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/bootstrap.min.js') }}" ></script>
<script src="{{ asset('/frontend/assets/js/wow.min.js') }}" ></script>
<script src="{{ asset('/frontend/assets/js/jquery.fancybox.min.js') }}"></script>

<!--Carousel-->
<script src="{{ asset('/frontend/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/frontend/assets/js/toastr.min.js') }}"></script>
<script src="{{ asset('/frontend/assets/js/main.js') }}?v={{ time() }}"></script>
<script src="{{ asset('/frontend/assets/js/custome.js') }}"></script>
    @include('front::includes.footer')

        @if(\Request::route()->getName() != "listCompare")
    <div id="compare_item">
        @if(Session::has('compare_list'))
            @php
                $compares = Session::get('compare_list');
            @endphp
            @if($compares)
                <div class="Compare-school show">
                    <div class="container">
                        <div class="Compare-school-wrapper flex items-center justify-between flex-wrap">
                            <div class="Compare-school-wrapper-name">University Comparison</div>
                            <ul class="Compare-school-wrapper-logo flex items-center">
                                @foreach($compares as $id)
                                    @php
                                        $school = \Modules\Admin\Entities\School::find($id);
                                    @endphp
                                    <li class="Compare-school-wrapper-logo-item" >
                                        <div class="Compare-school-wrapper-logo-item-remove" onclick="removeItem(this)" data-id="{{ $id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <g fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path fill="currentColor" fill-rule="nonzero" d="M12,2 C6.48,2 2,6.48 2,12 C2,17.52 6.48,22 12,22 C17.52,22 22,17.52 22,12 C22,6.48 17.52,2 12,2 Z M17,13 L7,13 L7,11 L17,11 L17,13 Z"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="Compare-school-wrapper-logo-item-images"><img src="{{ $school->logo }}"></div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="Compare-school-wrapper-button">
                                <div class="Button middle bordered" data-modal-id="">
                                    <a  href="/so-sanh-truong" class="Button-control flex items-center justify-center" type="button"><span class="Button-control-title">So sánh</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif
    </div>
            @endif
    </body>
    @yield('after_scripts')
</html>
@include('front::includes.script')
