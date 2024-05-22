@extends('layout')

@section('tieudetrang')
    Sản phẩm {{$category->name}}
@endsection

@section('noidung')

    <main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>{{$category->name}}</li>
            </ol>
            <h2>{{$category->name}}</h2>

        </div>
        </section><!-- End Breadcrumbs -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Tất cả sản phẩm của {{$category->name}}</h2>
          </div>

          <!-- <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Tất cả</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul> -->

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            @foreach ($list_product as $product)
              <div class="col-12 col-md-4 col-lg-3 mb-5 portfolio-item">
                <a class="product-item" href="{{ url('/detail', [$product->id]) }}">
                  <img src="/assets/img/{{$product->image}}" class="img-fluid product-thumbnail">
                  <h3 class="product-title">{{$product->name}}</h3>
                  <strong class="product-price">{{ number_format($product->price, 0, ',', '.') }} VNĐ</strong>

                  <span class="icon-cross">
                    <!-- <img src="images/cross.svg" class="img-fluid"> -->
                    <i class="fa-solid fa-cart-plus"></i>
                  </span>
                </a>
              </div>
            @endforeach

          </div>

          <div class="d-flex justify-content-center">
              {{ $list_product->links() }}
          </div>

        </div>
      </section><!-- End Portfolio Section -->
    </main>
@endsection