<?php
    $category = DB::table('category')
    ->get();
?>
        <ul>
          <li><a class="nav-link scrollto active" href="{{ url('/') }}">Trang chủ</a></li>
          <!-- <li><a class="nav-link scrollto" href="#about">Sản phẩm</a></li> -->
          <li class="dropdown"><a href="#"><span>Danh mục</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @foreach ($category as $category)
              <li><a href="{{ url('/category', [$category->id]) }}">{{$category->name}}</a></li>
              @endforeach
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Liên hệ</a></li>
          <li><a class="getstarted scrollto" href="{{ url('/login') }}">Đăng nhập</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>