<div class="header-desktop">
    <header class="Header">
        <div class="container">
            <div class="Header-wrapper flex items-center justify-between">
                <a class="Header-logo" href="{{route('trang-chu')}}">
                    <img src="{{asset('frontend/assets/logo_king.jpg')}}" alt="">
                </a>
                <form class="Header-search flex items-center" action="{{route('search_school')}}" mthod="post">
                    <input class="Header-search-control search_keywords_header_" type="text" name="keywords_" placeholder="Tìm kiếm">
                    <button class="Header-search-button" type="submit">
                        <img src="{{asset('frontend/assets/icons/icon-search-white.svg')}}" alt="">
                    </button>
                </form>
                <div class="Header-actions flex items-center">
                    @if(auth()->check())
                        <div class="Header-actions-item account">
                            <div class="Header-actions-item-icon"><img onerror="this.src='/frontend/assets/images/user.png';" src="{{ auth()->user()->image_url }}" alt=""></div>
                            <div class="Header-actions-item-label flex items-center">{{ auth()->user()->email }}<img src="{{ asset('frontend/assets/icons/icon-caret-down.svg') }}" alt=""></div>
                            <div class="DropdownAccount">
                                <div class="Card">
                                    <div class="Card-header text-center">Tài khoản</div>
                                    <div class="Card-body">
                                        <ul class="ProfilePage-table-content-list">
                                            <li class="ProfilePage-table-content-list-item"> <a href="{{ route('formProfile') }}">Tài khoản của bạn</a></li>
                                            <li class="ProfilePage-table-content-list-item"> <a href="{{ route('theodoiHoSo') }}">Theo dõi hồ sơ</a></li>
                                            <li class="ProfilePage-table-content-list-item"> <a href="{{ route('manageProfile') }}">Quản lý hồ sơ</a></li>
                                            <li class="ProfilePage-table-content-list-item"> <a href="{{ route('listWishlist') }}">Trường yêu thích</a></li>
                                            <li class="ProfilePage-table-content-list-item"> <a href="#">Điều khoản chính sách</a></li>
                                            <li class="ProfilePage-table-content-list-item"> <a href="#">Đổi mật khẩu</a></li>
                                            <li class="ProfilePage-table-content-list-item"> <span class="js-open-modal" data-modal-id="#ModalLogout">Đăng xuất</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="Header-actions-item">
                            <div class="Header-actions-item-icon"> <img src="{{asset('frontend/assets/icons/icon-user-circle.svg')}}" alt=""></div>
                            <div class="Header-actions-item-label"> <span class="js-open-modal" data-modal-id="#ModalAuth">Đăng nhập</span>/<span class="js-open-modal" data-modal-id="#ModalRegister">Đăng ký</span></div>
                        </div>
                    @endif
                    <a href="{{ route('listCompare') }}">
                        <div class="Header-actions-item">
                            <div class="Header-actions-item-icon"> <img src="{{asset('frontend/assets/icons/icon-heart-circle.svg')}}" alt=""></div>
                            <div class="Header-actions-item-label">So sánh</div>
                        </div></a>
                    <div class="Header-actions-item menu">
                        <div class="Header-actions-item-icon"> <img src="{{asset('frontend/assets/icons/icon-menu.svg')}}" alt=""></div>
                        <div class="Header-actions-item-label">Menu</div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @include('front::includes.navigation')
</div>
<div class="header-mobile">
    <header class="Header">
        <div class="container">
            <div class="Header-wrapper flex items-center justify-between">
                <a class="Header-logo" href="{{route('trang-chu')}}">
                    <img src="{{asset('frontend/assets/logo_king.jpg')}}" alt="">
                </a>
                <form class="Header-search flex items-center" action="{{route('search_school')}}" mthod="post">
                    <input class="Header-search-control search_keywords_header_" type="text" name="keywords_" placeholder="Tìm kiếm">
                    <button class="Header-search-button" type="submit">
                        <img src="{{asset('frontend/assets/icons/icon-search-white.svg')}}" alt="">
                    </button>
                </form>
                <div class="Header-actions flex items-center">
                    @if(auth()->check())
                        <div class="Header-actions-item account">
                            <div class="Header-actions-item-icon"><img onerror="this.src='/frontend/assets/images/user.png';" src="{{ auth()->user()->image_url }}" alt=""></div>
                            <div class="Header-actions-item-label flex items-center">{{ auth()->user()->email }}<img src="{{ asset('frontend/assets/icons/icon-caret-down.svg') }}" alt=""></div>
                            <div class="DropdownAccount">
                                <div class="Card">
                                    <div class="Card-header text-center">Tài khoản</div>
                                    <div class="Card-body">
                                        <ul class="ProfilePage-table-content-list">
                                            <li class="ProfilePage-table-content-list-item"> <a href="{{ route('formProfile') }}">Tài khoản của bạn</a></li>
                                            <li class="ProfilePage-table-content-list-item"> <a href="{{ route('theodoiHoSo') }}">Theo dõi hồ sơ</a></li>
                                            <li class="ProfilePage-table-content-list-item"> <a href="{{ route('manageProfile') }}">Quản lý hồ sơ</a></li>
                                            <li class="ProfilePage-table-content-list-item"> <a href="{{ route('listWishlist') }}">Trường yêu thích</a></li>
                                            <li class="ProfilePage-table-content-list-item"> <a href="#">Điều khoản chính sách</a></li>
                                            <li class="ProfilePage-table-content-list-item"> <a href="#">Đổi mật khẩu</a></li>
                                            <li class="ProfilePage-table-content-list-item"> <span class="js-open-modal" data-modal-id="#ModalLogout">Đăng xuất</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="Header-actions-item">
                            <div class="Header-actions-item-icon"> <img src="{{asset('frontend/assets/icons/icon-user-circle.svg')}}" alt=""></div>
                            <div class="Header-actions-item-label"> <span class="js-open-modal" data-modal-id="#ModalAuth">Đăng nhập</span>/<span class="js-open-modal" data-modal-id="#ModalRegister">Đăng ký</span></div>
                        </div>
                    @endif
                    <a href="{{ route('listCompare') }}">
                        <div class="Header-actions-item">
                            <div class="Header-actions-item-icon"> <img src="{{asset('frontend/assets/icons/icon-heart-circle.svg')}}" alt=""></div>
                            <div class="Header-actions-item-label">So sánh</div>
                        </div></a>
                    <div class="Header-actions-item menu">
                        <div class="Header-actions-item-icon"> <img src="{{asset('frontend/assets/icons/icon-menu.svg')}}" alt=""></div>
                        <div class="Header-actions-item-label">Menu</div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @include('front::includes.navigation')
</div>
@include('front::includes.modal')
