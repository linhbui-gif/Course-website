@php
   $main_menu = Menu::get(7);
@endphp
<nav class="Navigation">
  <div class="Navigation-overlay"> </div>
  <div class="container">
    <div class="Navigation-wrapper">
      <div class="Navigation-close"> <img src="{{asset('frontend/assets/icons/icon-x.svg')}}" alt=""></div>
      <form class="Header-search flex items-center" action="#">
        <input class="Header-search-control" type="text" placeholder="Tìm kiếm">
        <button class="Header-search-button" type="submit"><img src="{{asset('/frontend/assets/icons/icon-search-white.svg')}}" alt=""></button>
      </form>
      <div class="Navigation-list flex items-center justify-around">
          @if(!empty($main_menu))
          @foreach($main_menu as $menu)
              <div class="Navigation-list-wrapper {{$menu['id'] === 8 ? "has-dropdown" : ''}}">
                  <a href="{{ $menu['link'] }}" class="Navigation-list-item">{{ $menu['label'] }}</a>
                  @if($menu['id'] === 8)
                          <div class="Navigation-list-children flex">
                                 <div class="Navigation-list-children-item">
                                     <img src="https://kingstudy.vn/static/2023/03/02/f684c5df5dd155220268a72ba4e56d3bd8024aa5.png" alt="">
                                     <a class="Navigation-list-item" href="#" title="#">Du học Anh</a>
                                 </div>
                              <div class="Navigation-list-children-item">
                                     <img src="https://kingstudy.vn/static/2023/03/02/3e90cedd193e75a783210a5115f3720fc2673958.png" alt="">
                                     <a class="Navigation-list-item" href="#" title="#">Du học úc</a>
                                 </div>
                              <div class="Navigation-list-children-item">
                                     <img src="https://kingstudy.vn/static/2023/03/02/b3e114beb6936f8883c60c159e28da0bafdd81ec.png" alt="">
                                     <a class="Navigation-list-item" href="#" title="#">Du học canada</a>
                              </div>
                              <div class="Navigation-list-children-item">
                                  <ul class="Navigation-list-children-item-list">
                                      <li class="children-item-list-text"><a href="#" class="children-item-list-text-link">Hành trang bay</a></li>
                                      <li class="children-item-list-text"><a href="#" class="children-item-list-text-link">Khi bạn đến nơi</a></li>
                                      <li class="children-item-list-text"><a href="#" class="children-item-list-text-link">Học tập & Làm việc</a></li>
                                      <li class="children-item-list-text"><a href="#" class="children-item-list-text-link">Lợi ích của du học</a></li>
                                      <li class="children-item-list-text"><a href="#" class="children-item-list-text-link">Cảm nhận của sinh viên</a></li>
                                      <li class="children-item-list-text"><a href="#" class="children-item-list-text-link">Câu hỏi thường gặp</a></li>
                                      <li class="children-item-list-text"><a href="#" class="children-item-list-text-link">Blog du học</a></li>
                                  </ul>
                              </div>
                          </div>
                  @endif
              </div>
          @endforeach
          @endif
      </div>
    </div>
  </div>
</nav>
