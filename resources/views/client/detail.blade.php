@extends('client.layout')

@section('title')
{{$detail->name}}
@endsection

@section('content')

<!--breadcumb area start -->
<div class="breadcumb-area overlay pos-rltv">
    <div class="bread-main">
        <div class="bred-hading text-center">
            <h5>Prodcut Details</h5>
        </div>
        <ol class="breadcrumb">
            <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
            <li class="active">product-details</li>
        </ol>
    </div>
</div>
<!--breadcumb area end -->

<!--single-protfolio-area are start-->
<div class="single-protfolio-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="portfolio-thumbnil-area">
                    <div class="product-more-views">
                        <div class="tab_thumbnail" data-tabs="tabs">
                            <div class="thumbnail-carousel">
                                <ul>
                                    <li class="active">
                                        <a href="#view11" class="shadow-box" aria-controls="view11" data-toggle="tab"><img src="/client/images/product/{{$detail->image}}" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#view22" class="shadow-box" aria-controls="view22" data-toggle="tab"><img src="/client/images/product/{{$detail->image}}" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#view33" class="shadow-box" aria-controls="view33" data-toggle="tab"><img src="/client/images/product/{{$detail->image}}" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#view44" class="shadow-box" aria-controls="view44" data-toggle="tab"><img src="/client/images/product/{{$detail->image}}" alt="" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content active-portfolio-area pos-rltv">
                        <div class="social-tag">
                            <a href="#"><i class="zmdi zmdi-share"></i></a>
                        </div>
                        <div role="tabpanel" class="tab-pane active" id="view11">
                            <div class="product-img">
                                <a class="fancybox" data-fancybox-group="group" href="/client/images/product/{{$detail->image}}"><img src="/client/images/product/{{$detail->image}}" alt="Single portfolio" /></a>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="view22">
                            <div class="product-img">
                                <a class="fancybox" data-fancybox-group="group" href="/client/images/product/{{$detail->image}}"><img src="/client/images/product/{{$detail->image}}" alt="Single portfolio" /></a>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="view33">
                            <div class="product-img">
                                <a class="fancybox" data-fancybox-group="group" href="/client/images/product/{{$detail->image}}"><img src="/client/images/product/{{$detail->image}}" alt="Single portfolio" /></a>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="view44">
                            <div class="product-img">
                                <a class="fancybox" data-fancybox-group="group" href="/client/images/product/{{$detail->image}}"><img src="/client/images/product/{{$detail->image}}" alt="Single portfolio" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="single-product-description">
                    <div class="sp-top-des">
                        <h3>{{$detail->name}} <span>(Brand)</span></h3>
                        <div class="prodcut-ratting-price">
                            <div class="prodcut-ratting">
                                <a href="#" tabindex="0"><i class="fa fa-star-o"></i></a>
                                <a href="#" tabindex="0"><i class="fa fa-star-o"></i></a>
                                <a href="#" tabindex="0"><i class="fa fa-star-o"></i></a>
                                <a href="#" tabindex="0"><i class="fa fa-star-o"></i></a>
                                <a href="#" tabindex="0"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="prodcut-price">
                                <div class="new-price"> {{ number_format($detail->priceSale, 0, ',', '.') }}đ </div>
                                <div class="old-price"> <del>{{ number_format($detail->price, 0, ',', '.') }}đ</del> </div>
                            </div>
                        </div>
                    </div>

                    <div class="sp-des">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</p>
                    </div>
                    <div class="sp-bottom-des">
                        <div class="single-product-option">
                            <div class="sort product-type">
                                <label>Color: </label>
                                <select id="input-sort-color">
                                    <option value="#">Red</option>
                                    <option value="#">Blue</option>
                                    <option value="#">Green</option>
                                    <option value="#">Purple</option>
                                    <option value="#">Yellow</option>
                                    <option value="#">Black</option>
                                    <option value="#">Grey</option>
                                    <option value="#">White</option>
                                    <option value="#" selected>Chose Your Color</option>
                                </select>
                            </div>
                            <div class="sort product-type">
                                <label>Size: </label>
                                <select id="input-sort-size">
                                    <option value="#">S</option>
                                    <option value="#">M</option>
                                    <option value="#">L</option>
                                    <option value="#">XL</option>
                                    <option value="#">XXL</option>
                                    <option value="#" selected="">Chose Your Size</option>
                                </select>
                            </div>
                        </div>
                        <div class="quantity-area">
                            <label>Qty :</label>
                            <div class="cart-quantity">
                                <form action="#" method="POST" id="myform">
                                    <div class="product-qty">
                                        <div class="cart-quantity">
                                            <div class="cart-plus-minus">
                                                <div class="dec qtybutton">-</div>
                                                <input type="text" value="01" name="qtybutton" class="cart-plus-minus-box">
                                                <div class="inc qtybutton">+</div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="social-icon socile-icon-style-1">
                            <ul>
                                <li><a href="#" data-tooltip="Add To Cart" class="add-cart add-cart-text" data-placement="left" tabindex="0">Add To Cart<i class="fa fa-cart-plus"></i></a></li>
                                <li><a href="#" data-tooltip="Wishlist" class="w-list" tabindex="0"><i class="fa fa-heart-o"></i></a></li>
                                <li><a href="#" data-tooltip="Compare" class="cpare" tabindex="0"><i class="fa fa-refresh"></i></a></li>
                                <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal" tabindex="0"><i class="fa fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--single-protfolio-area are start-->

<!--descripton-area start -->
<div class="descripton-area">
    <div class="container">
        <div class="row">
            <div class="product-area tab-cars-style">
                <div class="title-tab-product-category">
                    <div class="col-md-12 text-center">
                        <ul class="nav mb-40 heading-style-2" role="tablist">
                            <li role="presentation"><a href="#newarrival" aria-controls="newarrival" role="tab" data-toggle="tab">Mô tả</a></li>
                            <li role="presentation" class="active"><a href="#bestsellr" aria-controls="bestsellr" role="tab" data-toggle="tab">Review</a></li>
                            <li role="presentation"><a href="#specialoffer" aria-controls="specialoffer" role="tab" data-toggle="tab">Tags</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-12">
                    <div class="content-tab-product-category">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fix fade in" id="newarrival">
                                <div class="review-wraper">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        <br> veniam, quis nostrud exercitation.
                                    </p>
                                    <h5>ABOUT ME</h5>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                    <h5>SIZE & FIT</h5>
                                    <ul>
                                        <li>Model wears: Style Photoliya U2980</li>
                                        <li>Model's height: 185”66</li>
                                    </ul>
                                    <h5>Overview</h5>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fix fade in active" id="bestsellr">
                                <div class="review-wraper">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br> veniam, quis nostrud exercitation.</p>
                                    <h5>SIZE & FIT</h5>
                                    <ul>
                                        <li>Model wears: Style Photoliya U2980</li>
                                        <li>Model's height: 185”66</li>
                                    </ul>
                                    <h5>ABOUT ME</h5>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                    <h5>Overview</h5>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fix fade in" id="specialoffer">
                                <ul class="tag-filter">
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Women</a></li>
                                    <li><a href="#">Winter</a></li>
                                    <li><a href="#">Street Style</a></li>
                                    <li><a href="#">Style</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Collection</a></li>
                                    <li><a href="#">Spring 2016</a></li>
                                    <li><a href="#">Street Style</a></li>
                                    <li><a href="#">Style</a></li>
                                    <li><a href="#">Shop</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--descripton-area end-->\

<div class="new-arrival-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="heading-title heading-style pos-rltv mb-50 text-center">
                    <h5 class="uppercase">Bình luận</h5>
                </div>
            </div>

            <form class="border border-success p-3" method="post" action="/savecomment">
                <p>
                    <textarea class="form-control shadow-none fs-5" name="noi_dung" rows="4" placeholder="Mời nhập bình luận"></textarea>
                </p>
                <p class="text-end">
                    <input type="hidden" name="id_sp" value="{{$detail->id}}">
                    <button class="btn btn-primary"> Gửi bình luận</button>
                <p>
                @csrf
            </form>

        </div>
    </div>
</div>

<!--new arrival area start-->
<div class="new-arrival-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="heading-title heading-style pos-rltv mb-50 text-center">
                    <h5 class="uppercase">Sản phẩm liên quan</h5>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="total-new-arrival new-arrival-slider-active carsoule-btn">
                @foreach ($relatedPro as $product)
                <div class="col-md-3">
                    <!-- single product start-->
                    <div class="single-product">
                        <div class="product-img">
                            <div class="product-label">
                                <div class="new">New</div>
                            </div>
                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                <a href="{{ url('/detail', [$product->id]) }}"> <img alt="" src="/client/images/product/{{$product->image}}" class="primary-image"> <img alt="" src="/client/images/product/{{$product->image}}" class="secondary-image"> </a>
                            </div>
                            <div class="product-icon socile-icon-tooltip text-center">
                                <ul>
                                    <li><a href="#" data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                    <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li>
                                    <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="prodcut-name"> <a href="{{ url('/detail', [$product->id]) }}">{{$product->name}}</a> </div>
                            <div class="prodcut-ratting-price">
                                <div class="prodcut-price">
                                    <div class="new-price"> {{ number_format($product->priceSale, 0, ',', '.') }}đ </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product end-->
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!--new arrival area end-->

@endsection