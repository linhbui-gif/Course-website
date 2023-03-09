@extends('front::layouts.master')
<?php
use App\Helpers\Auth;
$user = Auth::getUserInfo();
$settings = \App\Helpers\General::get_settings();
?>
@section('meta')

    @include("front::includes.meta", [
        'meta_title' => $settings['site_title']['value'],
        'meta_description' => $settings['og_description']['value'],
        'link' => route('studyAbroad',['slug' => @$obj['slug']]),
        'thumbnail' =>  $settings['og_image']['value'],
        'robots' => 1
    ])
@stop
@section('content')
    <div class="overlay"></div>
  <section class="Banner">
        <div class="Banner-wrapper">
          <div class="Banner-image" >
          <div class="Banner-overlay"></div>
              <h1 class="Banner-text">{{$obj['name_country']}}</h1>
        </div>
  </section>
  <section class="header__link">
      <div class="list-link">
          <div class="container">
              <ul class="nav">
                  <li class="menu-item menu-item-type-post_type menu-item-object-du_hoc current-menu-item menu-item-27583"><a class="" href="{{ route('studyAbroad', [ 'slug' => $obj['slug'] ]) }}" data-electronic="school" target="_self" rel="follow noopener noreferrer">Tổng quan</a></li>
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-university_category"><a class="active" href="javascript:void(0)">Các trường Đại Học</a></li>
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-university_category"><a class="" href="{{ route('chuongtrinhhocbong', [ 'slug' => $obj['slug'] ] ) }}" data-electronic="cthb" target="_self" rel="follow noopener noreferrer">Chương trình học bổng</a></li>
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-university_category"><a class="" href="{{ route('cacnganhhoc', [ 'slug' => $obj['slug'] ] )}}" data-electronic="nganhhoc" target="_self" rel="follow noopener noreferrer">Các ngành học</a></li>
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-university_category"><a class="" href="{{ route('cacthanhpho', [ 'slug' => $obj['slug'] ] )}}" data-electronic="city" target="_self" rel="follow noopener noreferrer">Các thành phố</a></li>
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-university_category"><a class="" href="{{ $obj['news_link'] }}" data-electronic="news" target="_self" rel="follow noopener noreferrer">Tin tức du học</a></li>
              </ul>
          </div>
      </div>
      <div class="icon-mobile">
          <svg width="20px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-bars fa-w-14 fa-2x"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path></svg> <span>Menu</span>
      </div>
  </section>
  <section class="country-content">
      <div class="container">
          <div class="tab-contents active" id="dh">
              <div class="SchoolListPage-wrapper">
                  <div class="SchoolListPage-list flex flex-wrap">
                      @foreach($schools as $school)
                      <div class="SchoolListPage-list-item">
                          <div class="SchoolBlock @if($school->type_school == 3) {{'odd'}} @elseif($school->type_school == 2) {{'even'}} @else {{'custom_red'}} @endif ">
                              <div class="SchoolBlock-image"> <a href="{{route('details_school',['slug'=> $school->slug] )}}"> <img src="{{$school->logo}}" alt="{{$school->name}}"></a></div>
                              <div class="line"></div>
                              <div class="SchoolBlock-info">
                                  <a class="SchoolBlock-title" href="{{route('details_school',['slug'=> $school->slug] )}}">{{$school->name}}</a>
                                  <p class="SchoolBlock-description">{{$school['heading']}}</p>
                                  <div class="SchoolBlock-row flex justify-between items-center">
                                      <div class="SchoolBlock-country flex items-center">
                                          <div class="SchoolBlock-country-flag"> <img src="{{$school->icon}}" alt="{{$school->name}}"></div>{{@$school['country']['name']}}
                                      </div>
                                      <div class="SchoolBlock-tag">
                                          @if($school->type_school == 3) {{'Available'}} @elseif($school->type_school == 2) {{'Partner'}} @else {{'Close'}} @endif
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                          @endforeach
                  </div>
              </div>
          </div>
      </div>
  </section>
    @include("front::study-abroad.form")
@endsection

@section('after_styles')
  <style>
    {{--#study-abroad{--}}
    {{--  max-width:1200px;--}}
    {{--  margin:50px auto;--}}
    {{--}--}}
    .Banner-image{
      background-image: url({{ $obj['image_location']}});
      background-repeat: no-repeat;
      background-size: cover;
    }

    {{--.Banner-overlay{--}}
    {{--  background-color: rgba(0,0,0,.42);--}}
    {{--  opacity: 1;--}}
    {{--  transition: background 0.3s,border-radius 0.3s,opacity 0.3s;--}}
    {{--}--}}
    {{--.Banner-text{--}}
    {{--  text-align:center;--}}
    {{--}--}}
    {{--.background{--}}
    {{--  min-height:300px;--}}
    {{--  background-color: rgba(32,32,32,.6784313725490196);--}}
    {{--  background-repeat: no-repeat;--}}
    {{--  background-size: cover;--}}
    {{--  width:100%;--}}
    {{--  height:100%;--}}
    {{--  transition: all .5s ease-in-out;--}}
    {{--}--}}
    {{--.study-abroad-item{--}}
    {{--  margin-bottom:20px;--}}
    {{--}--}}
    {{--.item-wrapper{--}}
    {{--  position: relative;--}}
    {{--}--}}
    {{--.item-wrapper:hover .Banner-overlay{--}}
    {{--  opacity:0;--}}
    {{--}--}}
    {{--.study-abroad-item:hover .background{--}}
    {{--  transform: scale(1.1);--}}
    {{--}--}}
    {{--.item-wrapper:hover .background::before{--}}
    {{--  display:block;--}}
    {{--}--}}
    {{--.Banner-text-button{--}}
    {{--  margin-top:12px;--}}
    {{--  text-align:center;--}}

    {{--}--}}
    {{--.Banner-text-button a{--}}
    {{--  color:#fff;--}}
    {{--  padding:12px;--}}
    {{--  font-size:14px;--}}
    {{--  border:2px solid #fff;--}}
    {{--}--}}

  </style>
@stop
@section('after_scripts')

@stop