@extends('modules.user.layout.main')

@section('index')
<section id="slider">
    <!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>Bengkel</span>-Techno</h1>
                                <h2>Free</h2>
                                <p>Belanja Murah Harga HematLorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt.
                                </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="" class="girl img-responsive" alt="" />
                                <img src="" class="pricing" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2>100% Responsive Design</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="" class="girl img-responsive" alt="" />
                                <img src="" class="pricing" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2>Free Ecommerce Template</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="" class="girl img-responsive" alt="" />
                                <img src="" class="pricing" alt="" />
                            </div>
                        </div>
                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<!--/slider-->


<div class="row">
    <div class="col-sm-3">
        @include('modules.user.sidebar.category')
    </div>

    <div class="col-sm-9 padding-right">
        <!--features_items-->
        {{-- @include('item.future') --}}
        <div class="features_items">
            <!--features_items-->
            <h2 class="title text-center">Features Items</h2>
            @foreach ($content as $content)
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="/assets/images/index/{{$content->GAMBAR}}" width="200px" />
                            <h5>Rp. {{ number_format($content->HARGA_JUAL) }}</h5>
                            <p>{{ $content->NAMA_BARANG }}</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
                                Add tocart
                            </a>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <h5>Rp.{{ number_format($content->HARGA_JUAL) }}</h5>
                                <p>{{ $content->NAMA_BARANG }}</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                    to
                                    cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a>
                            </li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!--features_items-->
        <!--/category-tab-->
        @include('modules.user.item.category-tab')
        <!--/category-tab-->
        <!--recommended_items-->
        @include('modules.user.item.recomend-item')
        <!--/recommended_items-->

    </div>
</div>
@endsection
