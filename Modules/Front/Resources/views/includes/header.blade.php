@php
    $main_menu = Menu::get(7);
@endphp
<div class="header">
    <div class="container">
        <div class="header_top d-flex items-center justify-content-between">
            <div class="header_top-logo">
                <a href="/"><img src="{{asset('/frontend/assets/images/logo.png')}}" width="85px" alt=""></a>
            </div>
            <button class="btstrp-navbar-toggle" >
					<span class="btstrp-sr-only">
					Toggle navigation
					</span>
                <span class="btstrp-icon-bar"></span>
                <span class="btstrp-icon-bar"></span>
                <span class="btstrp-icon-bar"></span>
            </button>
            <ul class="header_top-list d-flex align-items-center mb-0">
                @if(!empty($main_menu))
                    @foreach($main_menu as $menu)
                       <li class="list_item"><a href="{{ $menu['link'] }}" target="_blank" class="list_item-link">{{ $menu['label'] }}</a></li>
                    @endforeach
                @endif
                <li class="list_item"><a class="btn btn-primary pull-right btn-lg js-open-modal" id="header-sign-up-btn" href="javascript:void(0)" data-modal-id="#ModalContactInformation" >Đăng ký học Offline Miễn Phí</a></li>
            </ul>
        </div>

    </div>
</div>
