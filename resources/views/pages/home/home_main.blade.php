<!--carousel nội dung trang web -->
@extends('layout')
@section('content')
    <br><br><br>
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
                                    <h1><span><img src="{{ URL::to('public/frontend/images/logo2.jpg') }}"
                                                style="width:150px; height:80px" alt="" />THEGIOISACH</span>.COM
                                    </h1>
                                    <h2>Tổng Hợp Những Bộ Sách Giáo Khoa Mới Nhất</h2>
                                    <p>Được nhận rất nhiều ưu đãi khi mua bộ sách lớp 1 mới nhất, kèm theo những quà tặng
                                        hấp dẫn dành cho bé...</p>
                                    {{-- <button type="button" class="btn btn-default get">Đến ngay</button> --}}
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ URL::to('public/frontend/images/td1.jpg') }}" class="girl img-responsive"
                                        alt="" />
                                    <img src="images/home/pricing.png" class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item ">
                                <div class="col-sm-6">
                                    <h1><span><img src="{{ URL::to('public/frontend/images/logo2.jpg') }}"
                                                style="width:150px; height:80px" alt="" />THEGIOISACH</span>.COM
                                    </h1>
                                    <h2>Tổng Hợp Những Cuốn Sách Nổi Tiếng Của JIM ROHN</h2>
                                    <p>Được giảm 30% khi mua tại TheGioiSach...</p>
                                    {{-- <button type="button" class="btn btn-default get">Đến ngay</button> --}}
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ URL::to('public/frontend/images/td2.jpg') }}" class="girl img-responsive"
                                        alt="" />
                                    <img src="images/home/pricing.png" class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item ">
                                <div class="col-sm-6">
                                    <h1><span><img src="{{ URL::to('public/frontend/images/logo2.jpg') }}"
                                                style="width:150px; height:80px" alt="" />THEGIOISACH</span>.COM
                                    </h1>
                                    <h2>Những Cuốn Tiểu Thuyết Hay</h2>
                                    <p>Săn SALE Ngay Để Tặng Được Nhiều Quà Tặng Hấp Dẫn...</p>
                                    {{-- <button type="button" class="btn btn-default get">Đến ngay</button> --}}
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ URL::to('public/frontend/images/td3.jpg') }}" class="girl img-responsive"
                                        alt="" />
                                    <img src="images/home/pricing.png" class="pricing" alt="" />
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

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh Mục Sản Phẩm</h2>
                        <!--category-productsr-->

                        <div class="panel-group category-products" id="accordian">
                            @foreach ($category_home as $key => $cate)
                                <div class="panel panel-default">

                                    <div class="panel-heading">
                                        <h3 class="panel-title"><a
                                                href="{{ URL::to('/home_danhmuc/' . $cate->category_id) }}">{{ $cate->category_name }}</a>
                                        </h3>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!--/category-products-->

                        <!--brands_products-->

                        <div class="brands_products">

                            <h2>Thương Hiệu Sản Phẩm</h2>

                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach ($brand_home as $key => $brand)
                                        <li><a href="{{ URL::to('/home_thuonghieu/' . $brand->brand_id) }}"> <span
                                                    class="pull-right"></span>{{ $brand->brand_name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                        <div class="brands_products">

                            <h2>Sách Sale</h2>

                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">

                                </ul>
                            </div>

                        </div>

                        <!--/brands_products-->



                    </div>
                </div>

                <!-- Phần bên phải nd trang web -->
                <div class="col-sm-9 padding-right ">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">Sách mới nhất</h2>
                        @foreach ($product_home as $key => $product)
                            <a href="{{ URL::to('Chi-tiet-sp/' . $product->product_id) }}">

                                <div class="col-6 col-sm-4 col-md-4 col-mp mt-2">
                                    <div class="browseBookCard">
                                        <div class="discount text-center">
                                            <p class="text-light off-text "> <b> <span></span><br /> <small
                                                        class="text-small m-up-5">OFF</small></b></p>
                                        </div>
                                        <img class="pointer"
                                            src="{{ URL::to('public/uploads/product/' . $product->product_image) }}"
                                            style="height: 200px">
                                        <div class="mt-2 mb-1">
                                            <b class="text-dark">{{ $product->product_name }}</b>
                                            <span class="to-right"><i class="fa fa-heart" aria-hidden="true"
                                                    style="color: red"></i>{{-- <i class="fa-solid fa-star text-primary "></i> --}}&nbsp;
                                                <span class="text-primary"></span>
                                            </span>
                                        </div>

                                        <small th:attr="onclick=|clickOnBook('${book.bookId}')|"
                                            class="text-small pointer m-up-10  text-muted"></small>

                                        <small class="m-up-5 "><i class="fa fa-star text-dyellow"></i><i
                                                class="fa fa-star text-dyellow"></i><i
                                                class="fa fa-star text-dyellow"></i><i
                                                class="fa fa-star text-dyellow"></i></small>

                                        <div class="bookBuyFooter d-flex  m-up-10">
                                            <p class="text-success text-size-20"><b th:text="${price}">Giá:
                                                    {{ number_format($product->product_price) . ' ' . 'VNĐ' }}</b>
                                                <br> <small class="text-danger mx-2"><del th:text="${book.bookPrice}">Giá
                                                        gốc: 150.000 VND</del> </small>
                                            </p>
                                            <i th:attr="onclick=|addToCart('${book.bookId}','${book.bookTitle}','${dprice}')|"
                                                class=" pointer fa-solid fa-cart-plus to-right text-muted "></i>

                                        </div>

                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <br>
                    {{-- đánh dấu trang 123 --}}
                    <div class="row ">
                        <div class="pull-right " style="height: 100px;font-size:18px">
                            {{ $product_home->render() }}
                        </div>
                    </div>
                    {{-- đánh dấu trang 123 --}}

                </div>





            </div>
        </div>
    </section>
@endsection
