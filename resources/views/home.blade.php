@extends('layout')

@section('tieudetrang')
    Trang chủ
@endsection

@section('noidung')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h1>Sở hữu ngay điện thoại mơ ước với giá ưu đãi!</h1>
            <h2>Cùng chúng tôi trải nghiệm những dòng điện thoại mới nhất</h2>
            <div class="d-flex justify-content-center justify-content-lg-start">
              <a href="#about" class="btn-get-started scrollto">Bắt đầu</a>
              <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/img/ip12-bg.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- End Hero -->

    <main id="main">
      <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients section-bg">
        <div class="container">

          <div class="row" data-aos="zoom-in">

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
            </div>

          </div>

        </div>
      </section><!-- End Cliens Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Sản phẩm nổi bật</h2>
          </div>

          <!-- <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Tất cả</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul> -->

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-12 col-md-4 col-lg-3 mb-5 portfolio-item">
              <a class="product-item" href="{{ url('/detail') }}">
                <img src="assets/img/ip15pro-removebg.png" class="img-fluid product-thumbnail">
                <h3 class="product-title">Iphone 15 pro</h3>
                <strong class="product-price">35.000.000đ</strong>

                <span class="icon-cross">
                  <!-- <img src="images/cross.svg" class="img-fluid"> -->
                  <i class="fa-solid fa-cart-plus"></i>
                </span>
              </a>
            </div>
            <div class="col-12 col-md-4 col-lg-3 mb-5 portfolio-item">
              <a class="product-item" href="#">
                <img src="assets/img/ip15pro-removebg.png" class="img-fluid product-thumbnail">
                <h3 class="product-title">Iphone 15 pro</h3>
                <strong class="product-price">35.000.000đ</strong>

                <span class="icon-cross">
                  <!-- <img src="images/cross.svg" class="img-fluid"> -->
                  <i class="fa-solid fa-cart-plus"></i>
                </span>
              </a>
            </div>
            <div class="col-12 col-md-4 col-lg-3 mb-5 portfolio-item">
              <a class="product-item" href="#">
                <img src="assets/img/ip15pro-removebg.png" class="img-fluid product-thumbnail">
                <h3 class="product-title">Iphone 15 pro</h3>
                <strong class="product-price">35.000.000đ</strong>

                <span class="icon-cross">
                  <!-- <img src="images/cross.svg" class="img-fluid"> -->
                  <i class="fa-solid fa-cart-plus"></i>
                </span>
              </a>
            </div>
            <div class="col-12 col-md-4 col-lg-3 mb-5 portfolio-item">
              <a class="product-item" href="#">
                <img src="assets/img/ip15pro-removebg.png" class="img-fluid product-thumbnail">
                <h3 class="product-title">Iphone 15 pro</h3>
                <strong class="product-price">35.000.000đ</strong>

                <span class="icon-cross">
                  <!-- <img src="images/cross.svg" class="img-fluid"> -->
                  <i class="fa-solid fa-cart-plus"></i>
                </span>
              </a>
            </div>

          </div>

        </div>
      </section><!-- End Portfolio Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Sản phẩm mới</h2>
          </div>

          <!-- <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Tất cả</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul> -->

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-12 col-md-4 col-lg-3 mb-5 portfolio-item">
              <a class="product-item" href="#">
                <img src="assets/img/ip15pro-removebg.png" class="img-fluid product-thumbnail">
                <h3 class="product-title">Iphone 15 pro</h3>
                <strong class="product-price">35.000.000đ</strong>

                <span class="icon-cross">
                  <!-- <img src="images/cross.svg" class="img-fluid"> -->
                  <i class="fa-solid fa-cart-plus"></i>
                </span>
              </a>
            </div>

          </div>

        </div>
      </section><!-- End Portfolio Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Sản phẩm xem nhiều</h2>
          </div>

          <!-- <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Tất cả</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul> -->

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-12 col-md-4 col-lg-3 mb-5 portfolio-item">
              <a class="product-item" href="#">
                <img src="assets/img/ip15pro-removebg.png" class="img-fluid product-thumbnail">
                <h3 class="product-title">Iphone 15 pro</h3>
                <strong class="product-price">35.000.000đ</strong>

                <span class="icon-cross">
                  <!-- <img src="images/cross.svg" class="img-fluid"> -->
                  <i class="fa-solid fa-cart-plus"></i>
                </span>
              </a>
            </div>
            <div class="col-12 col-md-4 col-lg-3 mb-5 portfolio-item">
              <a class="product-item" href="#">
                <img src="assets/img/ip15pro-removebg.png" class="img-fluid product-thumbnail">
                <h3 class="product-title">Iphone 15 pro</h3>
                <strong class="product-price">35.000.000đ</strong>

                <span class="icon-cross">
                  <!-- <img src="images/cross.svg" class="img-fluid"> -->
                  <i class="fa-solid fa-cart-plus"></i>
                </span>
              </a>
            </div>
            <div class="col-12 col-md-4 col-lg-3 mb-5 portfolio-item">
              <a class="product-item" href="#">
                <img src="assets/img/ip15pro-removebg.png" class="img-fluid product-thumbnail">
                <h3 class="product-title">Iphone 15 pro</h3>
                <strong class="product-price">35.000.000đ</strong>

                <span class="icon-cross">
                  <!-- <img src="images/cross.svg" class="img-fluid"> -->
                  <i class="fa-solid fa-cart-plus"></i>
                </span>
              </a>
            </div>
            <div class="col-12 col-md-4 col-lg-3 mb-5 portfolio-item">
              <a class="product-item" href="#">
                <img src="assets/img/ip15pro-removebg.png" class="img-fluid product-thumbnail">
                <h3 class="product-title">Iphone 15 pro</h3>
                <strong class="product-price">35.000.000đ</strong>

                <span class="icon-cross">
                  <!-- <img src="images/cross.svg" class="img-fluid"> -->
                  <i class="fa-solid fa-cart-plus"></i>
                </span>
              </a>
            </div>

          </div>

        </div>
      </section><!-- End Portfolio Section -->
    </main>
@endsection