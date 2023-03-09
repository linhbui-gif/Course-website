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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" type="image/png" href="{{ $settings['favicon_ico']['value'] }}">

        <link rel="stylesheet" href="https://fedora.teachablecdn.com/assets/bootstrap-a14e0219bff457941c01e229139fcb9f4709e289d96efa3a24bad96561d56e6c.css" />
        <link rel="stylesheet" href="{{asset('/frontend/assets/css/bootrap2.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/assets/css/base46b9.css')}}?v={{ time() }}">
    @yield('meta')
        <link rel="stylesheet" href="{{asset('css/toastr.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/assets/css/style.css')}}">
    @yield('after_styles')
    </head>
    <body>
    <style>
        .course-section .section-title:after{
            background: url("{{asset('/frontend/assets/icons/next.svg')}}") no-repeat;
            background-size: cover;
            content: "";
            display: block;
            height: 12px;
            transition: .3s;
            -webkit-transition: .3s;
            -moz-transition: .3s;
            -ms-transition: .3s;
            -o-transition: .3s;
            opacity: .4;
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            width: 12px;
        }
    </style>
        @include('front::includes.header')
        <div role="main" class='view-school'>
        @yield('content')
        </div>
        @include('front::home.modal')
        <script src="{{ asset('/frontend/assets/js/jquery-3.3.1.slim.min.js') }}" ></script>
        <script src="{{ asset('/frontend/assets/js/popper.min.js') }}"></script>
        {{-- Jquery --}}
        <script src="{{ asset('/frontend/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('/js/function.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/toastr.min.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/config.js') }}"></script>
        <script>
            $('#ModalContactInformation #contact_frm').validate({
                ignore: ".ignore",
                rules: {
                    name: "required",
                    phone: "required",
                    email: "required",
                    national: "required",
                },
                messages: {
                    name: "Vui lòng nhập họ & tên",
                    phone: "Vui lòng nhập số điện thoại",
                    email: "Email không hợp lệ",
                    national: "Vui lòng chọn khóa học",
                },
                submitHandler: function (form) {
                    var data = $(form).serializeArray();
                    var url = $(form).attr('action');
                    request_ajax(url, data, "POST", function (res) {
                        ajax_loading(false);
                        if (res.rs === 1) {
                            toastr.success('Gửi thông tin thành công...', 'Success')
                            $(form).find('.form-group #name').val('')
                            $(form).find('.form-group #email').val('')
                            $(form).find('.form-group #phone').val('')
                            $(form).find('.form-group #course-change').val('0')
                            $(form).find('.form-group #link').val('')
                            $('.Modal').removeClass('active')
                            // $(".noty_error").html('<div class="alert alert-danger" role="alert">'+res.msg+'</div>');
                        } else if (res.errors) {
                            $.each(res.errors, function (key, msg) {
                                $('#' + key + '-error').html(msg).show();
                            });
                        }
                    });
                    return false;
                }
            });
           $('.link-zalo').hide();
           $('#course-change').change(function(){
               $('.link-zalo').show();
               checkLinkZaloCase($(this).val())
           })
            function checkLinkZaloCase(value){
                if(value == 1){
                    $('.link-zalo .form-control').val('https://zalo.me/g/aqskmw542');
                } else if(value == 2){
                    $('.link-zalo .form-control').val('https://zalo.me/g/nmzqkw576');
                } else{
                    $('.link-zalo .form-control').val('');
                }
            }
            $(document).ready(function() {
                $(".course-section > .section-title").on("click", function() {
                    if ($(this).hasClass("active")) {
                        $(this).removeClass("active");
                        $(this)
                            .siblings(".section-list")
                            .slideUp(200);
                        $(this).parent('#content_wrapper')
                            .removeClass("active")
                            .addClass("show");
                    } else {
                        $(this)
                            .parent('#content_wrapper')
                            .removeClass("active")
                            .addClass("show");
                        $(".course-section > .section-title").removeClass("active");
                        $(this).addClass("active");
                        $(".section-list").slideUp(200);
                        $(this)
                            .siblings(".section-list")
                            .slideDown(200);
                    }
                });
            });

        </script>
    </body>
    @yield('after_scripts')

</html>
{{--@include('front::includes.script')--}}
