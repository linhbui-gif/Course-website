@extends('front::layouts.master')
<?php
use App\Helpers\Auth;
$user = Auth::getUserInfo();
$settings = \App\Helpers\General::get_settings();
?>
@section('meta')
    
    @include("front::includes.meta", [
        'meta_title' => @$details['meta_title'],
        'meta_description' => @$details['meta_description'],
        'link' => route('details_news',['slug' => @$details->alias]),
        'thumbnail' =>  @$settings['og_image']['value'],
        'robots' => 1
    ])
@stop
@section('content')
  <div class="NewPage">
      <section class="Banner">
        <div class="Banner-wrapper"> 
          <div class="Banner-image" style="height: 50rem;"><img src="{{asset('frontend/assets/images/image-new.png')}}" alt=""></div>
        </div>
      </section>
      <div class="container">
        <div class="NewPage-wrapper flex flex-wrap"> 
          <div class="NewPage-wrapper-item">
            @if(isset($details))
            <div class="NewPage-detail">
              <div class="NewPage-detail-header">
                <h1 class="NewPage-detail-header-title">{{$details->title}}</h1>
                <div class="NewPage-detail-header-row flex justify-between items-center">
                  <div class="NewPage-detail-socials flex flex-wrap"> 
                    <a class="NewPage-detail-socials-item" href="#"><img src="{{asset('frontend/assets/icons/icon-facebook-yellow.svg')}}" alt=""></a>
                    <a class="NewPage-detail-socials-item" href="#"><img src="{{asset('frontend/assets/icons/icon-twitter-yellow.svg')}}" alt=""></a>
                    <a class="NewPage-detail-socials-item" href="#"><img src="{{asset('frontend/assets/icons/icon-instagram-yellow.svg')}}" alt=""></a>
                    <a class="NewPage-detail-socials-item" href="#"><img src="{{asset('frontend/assets/icons/icon-google-yellow.svg"')}}" alt=""></a>
                  </div>
                  <h6 class="NewPage-detail-header-date">Tin tức | {{date('d/m/Y',strtotime($details->created_at))}}</h6>
                </div>
              </div>
              <div class="NewPage-detail-content style-content">
                  {!! $details->content !!}
              </div>
            </div>
            @endif
          </div>
          <div class="NewPage-wrapper-item">
            <div class="Card">
              <div class="Card-header">Tin tức và sự kiện</div>
              <div class="Card-body"> 
                <div class="NewPage-list-hightlight">
                @if(isset($list_news))
                  @foreach($list_news as $news)
                  <div class="NewPage-list-hightlight-item">
                    <div class="NewBlock horizontal"><a class="NewBlock-image" href="{{route('details_news',['slug'=> $news['alias'] ] )}}">
                      <img src="{{$news['image_location']}}" alt=""></a>
                      <div class="NewBlock-info">
                        <a class="NewBlock-info-title" href="{{route('details_news',['slug'=> $news['alias'] ])}}">{{$news['title']}}</a>
                      </div>
                      <div class="NewBlock-date flex justify-between"> 
                        <span>TIN TỨC</span><span>{{date('d/m/Y',strtotime($news['created_at']))}}</span>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  @endif
                </div>
                <div class="NewPage-list-hightlight-btn"> 
                  <div class="Button secondary small" data-modal-id="">
                    <button class="Button-control flex items-center justify-center" type="button"><span class="Button-control-title">Xem thêm</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('after_styles')
@stop

@section('after_scripts')

@endsection
