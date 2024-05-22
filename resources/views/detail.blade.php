@extends('layout')

@section('tieudetrang')
    Trang chi tiết
@endsection

@section('noidung')
    
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
            <li><a href="index.html">Home</a></li>
            <li>Details</li>
            </ol>
            <h2>Details</h2>

        </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

            <div class="col-lg-5">
                <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">

                    <div class="swiper-slide">
                    <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                    <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                    <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                    </div>

                </div>
                <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-7 about-product">
                <div class="portfolio-info">
                <h3>Iphone 15 pro</h3>
                <div class="d-flex">
                    <div class="rating me-5">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h5 class="review-count">54 Đánh giá</h5>
                </div>
                <div class="item-price">
                    <div class="current-price">
                        <span class="price">35.000.000</span>
                        <span class="currency">đ</span>
                    </div>
                    <div class="previous-price">
                        <span class="price">39.000.000</span>
                        <span class="currency">đ</span>
                    </div>
                </div>
                <div class="cart-counter">
                    <button class="item-plus"><i class="fa-solid fa-plus"></i></button>
                    <span class="count">0</span>
                    <button class="item-minus"><i class="fa-solid fa-minus"></i></button>
                </div>
                <select class="color drop-select" id="">
                    <option value>Màu</option>
                    <option value="1">Đen</option>
                    <option value="2">Trắng</option>
                    <option value="3">Hồng</option>
                </select>
                <select class="color drop-select" id="">
                    <option value>Dung lượng</option>
                    <option value="1">256GB</option>
                    <option value="2">512GB</option>
                    <option value="3">1TB</option>
                </select>
                <div class="buttons my-5">
                    <button class="add-cart">
                    <div class="svg-wrapper-1">
                        <div class="svg-wrapper">
                            <i class="fa-solid fa-cart-plus"></i>
                        </div>
                    </div>
                    <span>Thêm vào giỏ hàng</span>
                    </button>
                </div>
                <!-- <ul>
                    <li><strong>Category</strong>: Web design</li>
                    <li><strong>Client</strong>: ASU Company</li>
                    <li><strong>Project date</strong>: 01 March, 2020</li>
                    <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                </ul> -->
                </div>
                
            </div>

            </div>

        </div>
        </section><!-- End Portfolio Details Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Mô tả sản phẩm</h2>
            </div>

            <!-- <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">Tất cả</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
            </ul> -->

            <div class="row" data-aos="fade-up" data-aos-delay="200">

                <div class="portfolio-description">
                    <h2>This is an example of portfolio detail</h2>
                    <p>
                        Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                    </p>
                </div>

            </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Sản phẩm tương tự</h2>
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

    </main>

@endsection