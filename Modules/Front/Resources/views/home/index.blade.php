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
    <section class="HomeBanner">
      <div class="HomeBanner-wrapper">
        <div class="owl-carousel" id="HomeBanner-carousel">
            @if(!empty($banners))
                @foreach($banners as $k => $v)
                   <div class="HomeBanner-carousel-item" style="background: url({{$v->image_url . $v->image_location}});background-size: cover">
                       <div class="HomeBanner-carousel-item-action container">
                           <h3>{{$v->name}} <br/>{{$v->title_sub}}</h3>
                           <p>{{$v->description}}</p>
                           <div class="HomeBanner-button">
                               <div class="Button small">
                                   <a class="Button-control flex items-center justify-center" target="_blank" href="{{$v->url}}"><span class="Button-control-title">ĐĂNG KÝ NGAY</span></a>
                               </div>
                           </div>

                       </div>
                   </div>
                @endforeach
            @endif
        </div>
      </div>
    </section>
    @include('front::home.filter')
    {{-- Welcome --}}
    <section class="Welcome">
        @if(isset($datas['5']))
      <div class="Welcome-wrapper">
        <div class="Welcome-title flex items-center justify-center wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
          <h2>
            {{$datas['5']['locale_vi']['title'] ?? ''}}
           </h2>
        </div>
        <div class="container">
          <div class="Welcome-row flex flex-wrap">
            <div class="Welcome-row-item">
              <div class="Welcome-row-item-content">
                {!! $datas['5']['locale_vi']['content'] !!}
              </div>
            </div>
            <div class="Welcome-row-item first image">
              <div class="Welcome-row-item-image"><img src="{{$datas['5']['image_location']}}" alt=""></div>
            </div>
          </div>
        </div>
        @endif
      </div>
    </section>
    {{-- Contact --}}
    <section class="Contact">
      <div class="container">
        <div class="Contact-wrapper flex flex-wrap">
          <div class="Contact-wrapper-item">
            <div class="Contact-item-image"> <img src="{{ $items[5][0]['image_location']}}" alt=""></div>
            <div class="Contact-item-btn flex justify-center">
              <div class="Button radius middle" data-modal-id="">
                  @if(\auth()->user())
                      <a href="{{ $items[5][0]['link'] ?? "#"}}" class="Button-control flex items-center justify-center" type="button">
                          <span class="Button-control-title">{{ $items[5][0]['locale_vi']['title'] }}</span>
                      </a>
                  @else
                      <div class="Button js-open-modal radius middle" data-modal-id="#ModalAuth">
                          <button class="Button-control flex items-center justify-center" type="button">
                              <span class="Button-control-title">{{ $items[5][0]['locale_vi']['title'] }}</span>
                          </button>
                      </div>
                  @endif

              </div>
            </div>
          </div>
          <div class="Contact-wrapper-item">
            <div class="Contact-item-image"> <img src="{{ $items[5][1]['image_location']}}" alt=""></div>
            <div class="Contact-item-btn flex justify-center">
              <div class="Button js-open-modal radius middle" data-modal-id="#ModalContactInformation">
                <button class="Button-control flex items-center justify-center" type="button">
                    <span class="Button-control-title">{{ $items[5][1]['locale_vi']['title'] }}</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- Country --}}
    <section class="Country">
     @if(isset($datas['15']))

      <div class="container">
        <div class="Country-title flex items-center justify-center wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
          <h2>{{$datas['15']['locale_vi']['title'] ?? ''}}</h2>
        </div>
        <div class="row">
        @if(isset($items) && !empty($items[15]))
        @foreach($items[15] as $item)
          <div class="col-md-4">
            <a class="Country-item" href="{{$item['link']}}" style="color: black">
                <img src="{{ $item['image_location']}}">
                <p class="Country-item-name text-center">{{$item['locale_vi']['title']}}</p>
            </a>
          </div>
        @endforeach
        @endif
        </div>
      </div>
      @endif
    </section>
    {{-- Customers --}}
    <section class="Customers">
    <div class="Customers-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="Customers-title wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <h2>{{$datas[16]['locale_vi']['title']}}</h2>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="owl-carousel" id="Customers-carousel">
                @if(isset($items) && !empty($items[16]))
                @foreach($items[16] as $item)
                <div class="item">
                  <div class="Customers-carousel-item flex items-center">
                    <div class="Customers-carousel-item-image"><img src="{{$item['image_url'].$item['image_location']}}" alt="">
                      <div class="Customers-carousel-item-text">
                        <h5 class="Customers-carousel-item-info-title">{{ $item['locale_vi']['title'] }}</h5>
                        <h6 class="Customers-carousel-item-info-subtitle">{{ $item['locale_vi']['subtitle'] }}</h6>
                      </div>
                    </div>
                    <div class="Customers-carousel-item-info">
                      <p class="Customers-carousel-item-info-description">{{ $item['locale_vi']['description'] }}</p>
                    </div>
                  </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
    </section>
    {{-- Eventes --}}
    <section class="Events">
    <div class="Events-wrapper">
        <div class="Events-title flex items-center justify-center wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
            <h2>{{$datas[17]['locale_vi']['title']}}</h2>
        </div>
        <div class="container">
            <div class="owl-carousel" id="Events-carousel">
                @if(isset($items) && !empty($items[17]))
                @foreach($items[17] as $item)
                <div class="item">
                    <div class="Events-carousel-item">
                        <img src="{{$item['image_url'] . $item['image_location']}}" alt="">
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
        </div>
    </section>
    {{-- Course --}}
    <section class="Courses">
      <div class="container">
        <div class="Courses-wrapper">
          <div class="Courses-title flex items-center justify-center wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
            <h2>Khóa học mới nhất</h2>
          </div>
        @if(isset($courses))
              <div class="Courses-list">
                <div class="row">
                @foreach($courses as $course)
                  <div class="col-lg-4 col-md-6 col-6 col-6">
                    <div class="Courses-list-item">
                      <div class="Courses-list-item-image">
                          <img src="{{$course['image_url']}}" alt="">
                        <h3 class="Courses-list-item-title">{{$course['name']}}</h3>
                      </div>
                      <p class="Courses-list-item-description">{!! Str::words($course['description'],15) !!}</p>
                    </div>
                  </div>
                @endforeach
                </div>
              </div>
        @endif
{{--                          <div class="Courses-list">--}}
{{--                            <div class="row">--}}
{{--                              <div class="col-lg-4 col-md-6 col-6 col-6">--}}
{{--                                <div class="Courses-list-item">--}}
{{--                                  <div class="Courses-list-item-image">--}}
{{--                                      <img src="{{asset('frontend/assets/images/course-1.png')}}" alt="">--}}
{{--                                    <h3 class="Courses-list-item-title">Law</h3>--}}
{{--                                  </div>--}}
{{--                                  <p class="Courses-list-item-description">{!! Str::words($course['description'],15) !!}</p>--}}
{{--                                </div>--}}
{{--                              </div>--}}
{{--                            </div>--}}
{{--                          </div>--}}
        </div>
      </div>
    </section>
    {{-- End course --}}
    {{-- Partners --}}
     <section class="Partners">
      <div class="container">
        <div class="Partners-wrapper">
          <div class="Partners-title wow animate__animated animate__fadeInUp">
            <h2>{{$datas[31]['locale_vi']['title'] ?? "" }}</h2>
          </div>
          <div class="Partners-list-carousel">
            <div class="owl-carousel" id="Partners-carousel">
              @if(isset($items[31]) && !empty($items[31]))
              @foreach($items[31] as $item)
              <div class="item">
                <div class="Partners-list-item-group">
                  <div class="Partners-list-item">
                    <img src="{{$item['image_url'] . $item['image_location']}}" alt="{{$item['locale_vi']['title'] ?? '' }}">
                  </div>
                </div>
              </div>
             @endforeach
             @endif
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- Feed back --}}
    <section class="Feedback">
      <div class="Feedback-wrapper">
        <div class="Feedback-title wow animate__animated animate__fadeInUp">
          <h2>Feedback</h2>
        </div>
        <div class="container">
          <div class="owl-carousel" id="Feedback-carousel">
            @if(isset($items) && !empty($items[18]))
            @foreach($items[18] as $item)
            <div class="item">
                <div class="Feedback-carousel-item" >
                    <img src="{{ $item['image_location'] }}" alt="">
                    <div class="Feedback-carousel-item-icon" data-link="{{ $item['link'] }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                            <g clip-path="url(#clip0_983_9163)">
                                <path d="M44.0728 11.6977C43.5541 9.76992 42.0342 8.25038 40.1068 7.73128C36.5854 6.76758 22.4996 6.76758 22.4996 6.76758C22.4996 6.76758 8.41412 6.76758 4.89267 7.69455C3.00235 8.2133 1.44538 9.77027 0.926624 11.6977C0 15.2188 0 22.5212 0 22.5212C0 22.5212 0 29.8604 0.926624 33.3448C1.44573 35.2722 2.96527 36.7921 4.89302 37.3112C8.4512 38.2749 22.4999 38.2749 22.4999 38.2749C22.4999 38.2749 36.5854 38.2749 40.1068 37.3479C42.0345 36.8291 43.5541 35.3093 44.0732 33.3818C44.9998 29.8604 44.9998 22.5583 44.9998 22.5583C44.9998 22.5583 45.0369 15.2188 44.0728 11.6977Z" fill="#FF0000"/>
                                <path d="M18.0146 29.2679L29.7277 22.5217L18.0146 15.7754V29.2679Z" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_983_9163">
                                    <rect width="45" height="45" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
          </div>
        </div>
      </div>
    </section>
    {{-- end --}}

@endsection

@section('after_scripts')
    <script>
        $( document ).ready(function() {
            $(".Feedback-carousel-item-icon").on("click", function(e){
                var link = $(this).data("link");
                console.log(link);
                $("#ModalFeedBack iframe").attr("src", link);
                $("#ModalFeedBack").addClass("active");

            });
            $(".Modal-close").on("click", function(e){
                $("#ModalFeedBack").removeClass("active");
                $("#ModalFeedBack iframe").attr("src", '');
            })
        });
    </script>
@stop
