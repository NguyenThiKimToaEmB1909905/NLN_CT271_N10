{{-- chi tiết sản phẩm --}}
@extends('layout')
@section('content')
    <br><br><br>
    <section id="slider">
        {{--     <!--slider-->
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
                                <h1><span><img src="{{ URL::to('public/frontend/images/logo.jpg') }}"
                                            style="width:80px; height:80px" alt="" />THEGIOISACH</span>.COM</h1>
                                <h2>Tổng Hợp Những Bộ Sách Giáo Khoa Mới Nhất</h2>
                                <p>Được nhận rất nhiều ưu đãi khi mua bộ sách lớp 1 mới nhất, kèm theo những quà tặng hấp dẫn dành cho bé...</p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ URL::to('public/frontend/images/td1.jpg') }}" class="girl img-responsive"
                                    alt="" />
                                <img src="images/home/pricing.png" class="pricing" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span><img src="{{ URL::to('public/frontend/images/logo.jpg') }}"
                                            style="width:80px; height:80px" alt="" />THEGIOISACH</span>.COM</h1>
                                <h2>Tổng Hợp Những Cuốn Sách Nổi Tiếng Của JIM ROHN</h2>
                                <p>Được giảm 30% khi mua tại TheGioiSach...</p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ URL::to('public/frontend/images/td2.jpg') }}" class="girl img-responsive"
                                    alt="" />
                                <img src="images/home/pricing.png" class="pricing" alt="" />
                            </div>
                        </div>
                        <div class="item ">
                            <div class="col-sm-6">
                                <h1><span><img src="{{ URL::to('public/frontend/images/logo.jpg') }}"
                                            style="width:80px; height:80px" alt="" />THEGIOISACH</span>.COM</h1>
                                <h2>Những Cuốn Tiểu Thuyết Hay</h2>
                            <p>Săn SALE Ngay Để Tặng Được Nhiều Quà Tặng Hấp Dẫn...</p>
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
    </div> --}}
    </section>

    <section>
        <div class="container-fluid p-0 mb-10 " style="height: 100vh">

            <div class="bookBanner glass">
                @foreach ($product_details as $key => $detail)
                    <div class="d-flex " style="height: 35vh">
                        <div class="col-12 col-sm-5 text-center">
                            <img src="{{ URL::to('public/uploads/product/' . $detail->product_image) }}"
                                style="border-radius: 15px 15px 15px 15px; width: 300px;" class="bookCover"
                                alt="Cover not found" />

                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="singleBookInfo">

                                <h1 class="text-muted">
                                    <b>{{ $detail->product_name }}</b>
                                </h1>
                                <h4 class="title-700 text-muted m-up-0">
                                    <span>Tác giả: </b> {{ $detail->brand_name }}</span>
                                </h4>
                                <br>
                                <p>Mã sản phẩm :<b> {{ $detail->product_id }}</b></p>
                                <p>Số sách còn:<b> {{ $detail->product_quantity }}</b></p>

                                <a href=""><img src="images/product-details/share.png" class="share img-responsive"
                                        alt="" /></a>
                                <form action="{{ URL::to('/save_cart/') }}" method="POST">
                                    {{ csrf_field() }}
                                    <p class="m-up-10">
                                        <span style="font-size: 25px" class="text-success">Giá:
                                            {{ number_format($detail->product_price) . ' ' . 'VNĐ' }}</span><br>
                                        <del class="text-danger" style="font-size: 20px">Giá gốc: 150.000 VNĐ</del>

                                    </p>
                                    <label>Số lượng:</label>
                                    <input name="qty" type="number" min="1" value="1" />
                                    <input name="productid_hidden" type="hidden" value="{{ $detail->product_id }}" />

                                    <br><br><br>
                                    <div class="m-up-2000 ratings">
                                        <button type="submit" class="btn rounded-btn btn-outline-success "><b>Thêm vào giỏ
                                                hàng <i class="fa fa-shopping-cart"></i></b></button>
                                        <button class="btn rounded-btn btn-outline-danger ">Thêm vào trang yêu thích <i
                                                class=" ml-2 text-danger fa fa-heart"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br><br><br><br><br>
                    <div class="d-flex">
                        <div class="col-12 col-sm-3 " style="left: 70px;">
                            <div class="" style="padding: 110px 10px 5px 80px;">
                                <h1 class="text-muted">Thông tin chi tiết</h1>
                                <p class=" text-justify">
                                    {{ $detail->product_desc }}
                                </p>

                                <div class="my-2 text-right">
                                    <a class="btn btn-outline-primary m-1 btn-sm"></a>
                                </div>
                            </div>
                        </div>
                @endforeach

                <div class="col-12 col-sm-7" style="left: 260px">
                    <!-- <a class="btn  rounded-btn bg-fyellow text-dark px-4 mx-3">Buy
                                                                                                <span th:text="${book.bookPrice}"></span> <i
                                                                                                class="fa-solid fa-indian-rupee-sign"></i>
                                                                                            </a> -->

                    <div class="alsoLikeBlock mt-10 pt-3">
                        <h1 class="text-muted">Sản phẩm liên quan</h1>
                        @foreach ($related as $key => $lienquan)
                            <a href="{{ URL::to('Chi-tiet-sp/' . $lienquan->product_id) }}">

                                <div class="col-6 col-sm-4 col-md-4 col-mp mt-2">
                                    <div class="browseBookCard">
                                        <div class="discount text-center">
                                            <p class="text-light off-text "> <b> <span></span><br /> <small
                                                        class="text-small m-up-5">OFF</small></b></p>
                                        </div>
                                        <img class="pointer"
                                            src="{{ URL::to('public/uploads/product/' . $lienquan->product_image) }}"
                                            style="height: 200px">
                                        <div class="mt-2 mb-1">
                                            <b class="text-dark">{{ $lienquan->product_name }}</b>
                                            <span class="to-right"><i class="fa fa-heart" aria-hidden="true"
                                                    style="color: red"></i>{{-- <i class="fa-solid fa-star text-primary "></i> --}}&nbsp;
                                                <span class="text-primary"></span>
                                            </span>
                                        </div>

                                        <small th:attr="onclick=|clickOnBook('${book.bookId}')|"
                                            class="text-small pointer m-up-10  text-muted"
                                            th:text="${book.bookAuthor}"></small>

                                        <small class="m-up-5 "><i class="fa fa-star text-dyellow"></i><i
                                                class="fa fa-star text-dyellow"></i><i
                                                class="fa fa-star text-dyellow"></i><i
                                                class="fa fa-star text-dyellow"></i></small>

                                        <div class="bookBuyFooter d-flex  m-up-10">
                                            <p class="text-success text-size-20"><b th:text="${dprice}">Giá:
                                                    {{ number_format($lienquan->product_price) . ' ' . 'VNĐ' }}</b>
                                                <br> <small class="text-danger mx-2"><del>Giá gốc: 150.000 VND</del>
                                                </small>
                                            </p>
                                            <i th:attr="onclick=|addToCart('${book.bookId}','${book.bookTitle}','${dprice}')|"
                                                class=" pointer fa-solid fa-cart-plus to-right text-muted "></i>

                                        </div>

                                    </div>
                                </div>
                        @endforeach
                        </a>





                    </div>
                </div>
            </div>
        </div>


        </div>


        <br><br>




        {{-- Đánh giá san phẩm --}}
        <div th:if="${!loginUser.equals('none') && loginUser.enabled}" class="alert alert-success container"
            style="margin-top:80px;border-radius: 20px">
            <div class="row">
                <div class="col-sm-4 text-center">
                    <img style="width: 150px; height: 140px" src="{{ URL::to('resources/image/webImg/starBook.png') }}"
                        alt="" />
                </div>
                <div class="col-sm-8 pt-3">
                    <div class="rating text-center">
                        <h2>
                            <b>Đánh Giá Sản Phẩm</b>
                        </h2>
                        <br>
                        <div class="starrr"> <small class="m-up-5 "><i
                                    class="fa fa-star text-dyellow"style="font-size: 20px"></i>

                                <i class="fa fa-star text-dyellow" style="font-size: 20px"></i>
                                <i class="fa fa-star text-dyellow"style="font-size: 20px"></i>
                                <i class="fa fa-star text-dyellow"style="font-size: 20px"></i>
                                <i class="fa fa-star text-dyellow"style="font-size: 20px"></i>
                            </small></div>
                    </div>
                    <div class="reveiw hide text-center" tabindex="0" id="id">
                        <p class="ratemsg text-muted"></p>
                        <p class="reviewmsg text-muted"></p>
                        <div class="bookReveiw">
                            <textarea class="bookReveiwTxt form-control" placeholder="Enter the book review"></textarea>
                            <div class="text-left text-danger"><small>please do not enter the personal information like
                                    your email and phone number or your address for privacy.</small></div>
                            <button class="btn btn-block btn-success">Submit review</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        {{-- <div class="container" style="margin-top: 100px;margin-bottom: 50px">
        <div class="divider"></div>
        <h4 class="my-5 text-muted">Book user reviews</h4>
        <div th:each="br : ${book.getBookRating()}" th:if="${br.review!=null}" class="row my-4">
            <div class="col-sm-5 text-center">
                <img style="width:170px;height:170px;border-radius: 50%" th:src="@{'/image/webContent/userImages/'+${br.rateuser.userPic}}" alt="" class="mt-2" />
            </div>
            <div class="col-sm-7">
                <i class="fa-solid fa-quote-left text-primary"></i>
                <p class="ml-3 text-dark text-justify" th:text="${br.review}"></p>
                <small th:text="${br.date}"></small><br />
                <div class="ratings" th:attr="data-rating=|${br.bookRate}|"></div>
                <h4 class="text-capitalize"><b th:text="${br.rateuser.userName}"></b></h4>
            </div>
        </div>

    </div> --}}


        <script>
            $(function() {
                $(".starrr")
                    .starrr()
                    .on(
                        "starrr:change",
                        function(event, value) {
                            var rate = value;
                            var bookId = $(this).attr("data-id");
                            $(".ratemsg")
                                .html(
                                    "<i class='text-success fa-solid fa-check'></i> &nbsp;Your responce saved...")
                            $(".rating").addClass("hide");
                            $(".reveiw").removeClass("hide");

                            $.ajax({
                                type: 'POST',
                                url: '/user/saveRatings',
                                data: JSON.stringify({
                                    bid: bookId,
                                    rate: rate
                                }),
                                dataType: 'json',
                                contentType: 'application/json',
                                cache: 'false',
                                processData: 'false',
                                success: function(response) {
                                    window.scrollBy({
                                        top: 700,
                                        behavior: 'smooth',
                                    });
                                    console.log("save rating");
                                },
                            });

                        });

                var rating = document.getElementsByClassName("ratings");
                for (var a = 0; a < rating.length; a++) {
                    $(rating[a]).starrr({
                        readOnly: true,
                        rating: rating[a].getAttribute("data-rating")
                    });
                }

            });

            function clickOnBook(id) {
                window.location.assign("/bookInfo/" + id);
            }

            function storeReview(id) {
                var rev = $(".bookReveiwTxt").val();
                $.ajax({
                    type: 'POST',
                    url: '/user/saveReview',
                    data: JSON.stringify({
                        bid: id,
                        review: rev
                    }),
                    dataType: 'json',
                    contentType: 'application/json',
                    cache: 'false',
                    processData: 'false',
                    success: function(response) {
                        $(".ratemsg").addClass("hide");
                        $(".bookReveiw").addClass("hide");
                        $(".reviewmsg")
                            .html(
                                "<i class='fa-solid fa-3x text-primary fa-face-grin-stars'></i><br><i class='text-success fa-solid fa-check'></i> &nbsp;Your review saved...<br> Thanks for your responce."
                            )
                        console.log("save rating");
                    },
                });
            }

            function favoriteBook(bid) {
                $.ajax({
                    type: 'post',
                    url: '/user/addTofavorite/' + bid, //This line
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == "present")
                            swal.fire("Information", "This book is alredy present in your favorite list", "info");
                        else
                            swal.fire("Success", "Book added to your favorite list successfully.", "success");

                    },
                    error: function(response) {

                        swal.fire("something went wrong!!", "book not added to your favorite list try later..",
                            "error");
                    }
                });
            }
        </script>
    </section>
@endsection


{{-- trang quản lý admin --}}
@extends('admin_layout')
@section('admin_content')
    <section>
        <div class="mt-2 p-5 ">
            <h5 class="text-muted my-2">Quản lý đơn hàng</h5>
            <div class="fullDivider"></div>

            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="#">All
                            </a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Most
                                Rated</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Most
                                Populer</a></li>
                    </ul>
                    <form action="#" class="form-inline my-1000 my-lg-10">
                        <div class="input-group mb-2">
                            <input type="text" class="bookSearchName form-control rounded-input"
                                placeholder="Username">
                            <div class="input-group-append">
                                <div class="input-group-text bg-dyellow pointer" style="border-radius: 25px;">
                                    <i class=" fa fa-search"></i>
                                </div>
                            </div>
                        </div>

                    </form>
                    {{-- <form class="form-inline mt-2 my-lg-0 col-md-4 p-2">
                    <div class="input-group mb-10">
                        <input type="text" class="form-control rounded-input" id="inlineFormInputGroup"
                            placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text bg-dyellow pointer" style="border-radius: 25px;">
                                <i class=" fa fa-search"></i>
                            </div>
                        </div>
                    </div>

                </form> --}}
                </div>
            </nav>
            <?php
            $message = Session::get('message');
            if ($message) {
                /* nếu có tồn tại thì */
                echo '<span class="text-alert" style="color: rgb(249, 1, 1); font-weight: 200px">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                Session::put('message', null);
            }
            ?>
            <table class="table table-hover">
                <thead>
                    <tr>

                        <th>STT</th>
                        <th>Tên người đặt</th>
                        <th>Tổng tiền</th>
                        <th>Ngày tháng đặt hàng</th>

                        <th>tình trạng</th>
                        <th>Hiển thị</th>



                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($all_order as $key => $order)
                        @php
                            $i++;
                        @endphp

                        <tr>
                            <td><i>{{ $i }}</i></label></td>
                            <td>{{ $order->client_name }}</td>
                            <td>{{ $order->order_total }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>
                                @if ($order->order_status == 1)
                                    Đơn hàng mới
                                @else
                                    Đã xử lý
                                @endif
                            </td>


                            <td>
                                <a href="{{ URL::to('/view_order/' . $order->order_code) }}" class="active"
                                    ui-toggle-class="">
                                    <i class="bi bi-pen-fill text-success text-active"></i></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa danh mục này không?')"
                                    href="{{ URL::to('/delete_order/' . $order->order_id) }}" class="active"
                                    ui-toggle-class="">
                                    <i class="bi bi-trash-fill text-danger text"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>





            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-5 text-center">
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        {{-- {{ $all_product->render() }} --}}
                    </div>
                </div>
            </footer>
        </div>

        <script>
            function clickOnBook(id) {
                window.location.assign("/bookInfo/" + id);
            }

            function viewOrderDitails(id) {
                window.location.assign("/user/orderBookDetails/" + id);

            }
        </script>

        <script>
            function remove(bid) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Book display or hide action effect on your books!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes ,Sure!'
                }).then((result) => {

                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'POST',
                            url: '/user/removeBook',
                            data: JSON.stringify({
                                bid: bid
                            }),
                            dataType: 'json',
                            contentType: 'application/json',
                            cache: 'false',
                            processData: 'false',
                            success: function(response) {

                                if (response.status == 'success') {
                                    swal.fire({
                                        text: 'Changes Save Successfully',
                                        position: 'bottom',
                                        icon: 'info',
                                        showConfirmButton: false,
                                        toast: true,
                                        timer: 1500,
                                    })
                                    setTimeout(function() {
                                        window.location.reload()
                                    }, 1550);
                                } else if (response.status == 'error') {
                                    swal.fire("error", "Somthing Wrong", "error");
                                }
                            },
                            error: function(error) {
                                swal.fire("error", "Somthing Wrong", "error");
                                console.log("error (mybooks delete) : " + error);
                            }
                        })

                    }
                })
            }
        </script>
    </section>
@endsection


{{-- trang chi tiết san phẩm --}}
@extends('layout')
@section('content')
    <br><br><br>
    <section id="slider">
        {{--     <!--slider-->
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
                                <h1><span><img src="{{ URL::to('public/frontend/images/logo.jpg') }}"
                                            style="width:80px; height:80px" alt="" />THEGIOISACH</span>.COM</h1>
                                <h2>Tổng Hợp Những Bộ Sách Giáo Khoa Mới Nhất</h2>
                                <p>Được nhận rất nhiều ưu đãi khi mua bộ sách lớp 1 mới nhất, kèm theo những quà tặng hấp dẫn dành cho bé...</p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ URL::to('public/frontend/images/td1.jpg') }}" class="girl img-responsive"
                                    alt="" />
                                <img src="images/home/pricing.png" class="pricing" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span><img src="{{ URL::to('public/frontend/images/logo.jpg') }}"
                                            style="width:80px; height:80px" alt="" />THEGIOISACH</span>.COM</h1>
                                <h2>Tổng Hợp Những Cuốn Sách Nổi Tiếng Của JIM ROHN</h2>
                                <p>Được giảm 30% khi mua tại TheGioiSach...</p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ URL::to('public/frontend/images/td2.jpg') }}" class="girl img-responsive"
                                    alt="" />
                                <img src="images/home/pricing.png" class="pricing" alt="" />
                            </div>
                        </div>
                        <div class="item ">
                            <div class="col-sm-6">
                                <h1><span><img src="{{ URL::to('public/frontend/images/logo.jpg') }}"
                                            style="width:80px; height:80px" alt="" />THEGIOISACH</span>.COM</h1>
                                <h2>Những Cuốn Tiểu Thuyết Hay</h2>
                            <p>Săn SALE Ngay Để Tặng Được Nhiều Quà Tặng Hấp Dẫn...</p>
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
    </div> --}}
    </section>

    <section>
        <div class="container-fluid p-0 mb-10 " style="height: 100vh">

            <div class="bookBanner glass">
                @foreach ($product_details as $key => $detail)
                    <div class="d-flex " style="height: 35vh">
                        <div class="col-12 col-sm-5 text-center">
                            <img src="{{ URL::to('public/uploads/product/' . $detail->product_image) }}"
                                style="border-radius: 15px 15px 15px 15px; width: 300px;" class="bookCover"
                                alt="Cover not found" />

                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="singleBookInfo">

                                <h1 class="text-muted cart_product_name">
                                    <b>{{ $detail->product_name }}</b>
                                </h1>
                                <h4 class="title-700 text-muted m-up-0">
                                    <span>Tác giả: </b> {{ $detail->brand_name }}</span>
                                </h4>
                                <br>
                                <p>Mã sản phẩm :<b> {{ $detail->product_id }}</b></p>
                                <p>Số sách còn:<b> {{ $detail->product_quantity }}</b></p>

                                <a href=""><img src="images/product-details/share.png"
                                        class="share img-responsive" alt="" /></a>
                                <form action="{{ URL::to('/save_cart/') }}" method="POST">
                                    {{ csrf_field() }}
                                    <p class="m-up-10">
                                        <span style="font-size: 25px" class="text-success ">Giá:
                                            {{ number_format($detail->product_price) . ' ' . 'VNĐ' }}</span><br>
                                        <del class="text-danger" style="font-size: 20px">Giá gốc: 150.000 VNĐ</del>

                                    </p>
                                    <label>Số lượng:</label>
                                    <input name="qty" type="number" min="1" value="1" />
                                    <input name="productid_hidden" type="hidden" value="{{ $detail->product_id }}" />

                                    <br><br><br>
                                    <div class="m-up-2000 ratings">
                                        <button type="submit" class="btn rounded-btn btn-outline-success add-to-cart"
                                            data-id_product="{{ $detail->product_id }}" name="add-to-cart"><b>Thêm vào
                                                giỏ
                                                hàng <i class="fa fa-shopping-cart"></i></b></button>

                                        <button class="btn rounded-btn btn-outline-danger ">Thêm vào trang yêu thích <i
                                                class=" ml-2 text-danger fa fa-heart"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br><br><br><br><br>
                    <div class="d-flex">
                        <div class="col-12 col-sm-3 " style="left: 70px;">
                            <div class="" style="padding: 110px 10px 5px 80px;">
                                <h1 class="text-muted">Thông tin chi tiết</h1>
                                <p class=" text-justify">
                                    {{ $detail->product_desc }}
                                </p>

                                <div class="my-2 text-right">
                                    <a class="btn btn-outline-primary m-1 btn-sm"></a>
                                </div>
                            </div>
                        </div>
                @endforeach

                <div class="col-12 col-sm-7" style="left: 260px">
                    <!-- <a class="btn  rounded-btn bg-fyellow text-dark px-4 mx-3">Buy
                                                                                                                                            <span th:text="${book.bookPrice}"></span> <i
                                                                                                                                            class="fa-solid fa-indian-rupee-sign"></i>
                                                                                                                                        </a> -->

                    <div class="alsoLikeBlock mt-10 pt-3">
                        <h1 class="text-muted">Sản phẩm liên quan</h1>
                        @foreach ($related as $key => $lienquan)
                            <a href="{{ URL::to('Chi-tiet-sp/' . $lienquan->product_id) }}">

                                <div class="col-6 col-sm-4 col-md-4 col-mp mt-2">
                                    <div class="browseBookCard">
                                        <div class="discount text-center">
                                            <p class="text-light off-text "> <b> <span></span><br />
                                                    <small class="text-small m-up-5">OFF</small></b></p>
                                        </div>
                                        <img class="pointer"
                                            src="{{ URL::to('public/uploads/product/' . $lienquan->product_image) }}"
                                            style="height: 200px">
                                        <div class="mt-2 mb-1">
                                            <b class="text-dark">{{ $lienquan->product_name }}</b>
                                            <span class="to-right"><i class="fa fa-heart" aria-hidden="true"
                                                    style="color: red"></i>{{-- <i class="fa-solid fa-star text-primary "></i> --}}&nbsp;
                                                <span class="text-primary"></span>
                                            </span>
                                        </div>

                                        <small th:attr="onclick=|clickOnBook('${book.bookId}')|"
                                            class="text-small pointer m-up-10  text-muted"
                                            th:text="${book.bookAuthor}"></small>

                                        <small class="m-up-5 "><i class="fa fa-star text-dyellow"></i><i
                                                class="fa fa-star text-dyellow"></i><i
                                                class="fa fa-star text-dyellow"></i><i
                                                class="fa fa-star text-dyellow"></i></small>

                                        <div class="bookBuyFooter d-flex  m-up-10">
                                            <p class="text-success text-size-20"><b th:text="${dprice}">Giá:
                                                    {{ number_format($lienquan->product_price) . ' ' . 'VNĐ' }}</b>
                                                <br> <small class="text-danger mx-2"><del>Giá gốc:
                                                        150.000 VND</del>
                                                </small>
                                            </p>
                                            <i th:attr="onclick=|addToCart('${book.bookId}','${book.bookTitle}','${dprice}')|"
                                                class=" pointer fa-solid fa-cart-plus to-right text-muted "></i>

                                        </div>

                                    </div>
                                </div>
                        @endforeach
                        </a>





                    </div>
                </div>
            </div>
        </div>


        </div>


        <br><br>




        {{-- Đánh giá san phẩm --}}
        <div th:if="${!loginUser.equals('none') && loginUser.enabled}" class="alert alert-success container"
            style="margin-top:80px;border-radius: 20px">
            <div class="row">
                <div class="col-sm-4 text-center">
                    <img style="width: 150px; height: 140px" src="{{ URL::to('resources/image/webImg/starBook.png') }}"
                        alt="" />
                </div>
                <div class="col-sm-8 pt-3">
                    <div class="rating text-center">
                        <h2>
                            <b>Đánh Giá Sản Phẩm</b>
                        </h2>
                        <br>
                        <div class="starrr"> <small class="m-up-5 "><i
                                    class="fa fa-star text-dyellow"style="font-size: 20px"></i>

                                <i class="fa fa-star text-dyellow" style="font-size: 20px"></i>
                                <i class="fa fa-star text-dyellow"style="font-size: 20px"></i>
                                <i class="fa fa-star text-dyellow"style="font-size: 20px"></i>
                                <i class="fa fa-star text-dyellow"style="font-size: 20px"></i>
                            </small></div>
                    </div>
                    <div class="reveiw hide text-center" tabindex="0" id="id">
                        <p class="ratemsg text-muted"></p>
                        <p class="reviewmsg text-muted"></p>
                        <div class="bookReveiw">
                            <textarea class="bookReveiwTxt form-control" placeholder="Enter the book review"></textarea>
                            <div class="text-left text-danger"><small>please do not enter the personal
                                    information like
                                    your email and phone number or your address for privacy.</small></div>
                            <button class="btn btn-block btn-success">Submit review</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        {{-- <div class="container" style="margin-top: 100px;margin-bottom: 50px">
        <div class="divider"></div>
        <h4 class="my-5 text-muted">Book user reviews</h4>
        <div th:each="br : ${book.getBookRating()}" th:if="${br.review!=null}" class="row my-4">
            <div class="col-sm-5 text-center">
                <img style="width:170px;height:170px;border-radius: 50%" th:src="@{'/image/webContent/userImages/'+${br.rateuser.userPic}}" alt="" class="mt-2" />
            </div>
            <div class="col-sm-7">
                <i class="fa-solid fa-quote-left text-primary"></i>
                <p class="ml-3 text-dark text-justify" th:text="${br.review}"></p>
                <small th:text="${br.date}"></small><br />
                <div class="ratings" th:attr="data-rating=|${br.bookRate}|"></div>
                <h4 class="text-capitalize"><b th:text="${br.rateuser.userName}"></b></h4>
            </div>
        </div>

    </div> --}}


        <script>
            $(function() {
                $(".starrr")
                    .starrr()
                    .on(
                        "starrr:change",
                        function(event, value) {
                            var rate = value;
                            var bookId = $(this).attr("data-id");
                            $(".ratemsg")
                                .html(
                                    "<i class='text-success fa-solid fa-check'></i> &nbsp;Your responce saved...")
                            $(".rating").addClass("hide");
                            $(".reveiw").removeClass("hide");

                            $.ajax({
                                type: 'POST',
                                url: '/user/saveRatings',
                                data: JSON.stringify({
                                    bid: bookId,
                                    rate: rate
                                }),
                                dataType: 'json',
                                contentType: 'application/json',
                                cache: 'false',
                                processData: 'false',
                                success: function(response) {
                                    window.scrollBy({
                                        top: 700,
                                        behavior: 'smooth',
                                    });
                                    console.log("save rating");
                                },
                            });

                        });

                var rating = document.getElementsByClassName("ratings");
                for (var a = 0; a < rating.length; a++) {
                    $(rating[a]).starrr({
                        readOnly: true,
                        rating: rating[a].getAttribute("data-rating")
                    });
                }

            });

            function clickOnBook(id) {
                window.location.assign("/bookInfo/" + id);
            }

            function storeReview(id) {
                var rev = $(".bookReveiwTxt").val();
                $.ajax({
                    type: 'POST',
                    url: '/user/saveReview',
                    data: JSON.stringify({
                        bid: id,
                        review: rev
                    }),
                    dataType: 'json',
                    contentType: 'application/json',
                    cache: 'false',
                    processData: 'false',
                    success: function(response) {
                        $(".ratemsg").addClass("hide");
                        $(".bookReveiw").addClass("hide");
                        $(".reviewmsg")
                            .html(
                                "<i class='fa-solid fa-3x text-primary fa-face-grin-stars'></i><br><i class='text-success fa-solid fa-check'></i> &nbsp;Your review saved...<br> Thanks for your responce."
                            )
                        console.log("save rating");
                    },
                });
            }

            function favoriteBook(bid) {
                $.ajax({
                    type: 'post',
                    url: '/user/addTofavorite/' + bid, //This line
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == "present")
                            swal.fire("Information", "This book is alredy present in your favorite list", "info");
                        else
                            swal.fire("Success", "Book added to your favorite list successfully.", "success");

                    },
                    error: function(response) {

                        swal.fire("something went wrong!!", "book not added to your favorite list try later..",
                            "error");
                    }
                });
            }
        </script>
    </section>
@endsection
{{-- trang chi tiết đã sữa code lại lân 2 --}}
@extends('layout')
@section('content')
    @foreach ($product_details as $key => $value)
        <div class="product-details"><!--product-details-->
            <div class="col-sm-5">
                <div class="view-product">
                    <img src="{{ URL::to('/public/uploads/product/' . $value->product_image) }}" alt="" />
                    <h3>ZOOM</h3>
                </div>
                <div id="similar-product" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        <div class="item active">
                            <a href=""><img src="{{ URL::to('public/frontend/images/similar1.jpg') }}"
                                    alt=""></a>
                            <a href=""><img src="{{ URL::to('public/frontend/images/similar2.jpg') }}"
                                    alt=""></a>
                            <a href=""><img src="{{ URL::to('public/frontend/images/similar3.jpg') }}"
                                    alt=""></a>
                        </div>



                    </div>

                    <!-- Controls -->
                    <a class="left item-control" href="#similar-product" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right item-control" href="#similar-product" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
            <div class="col-sm-7">
                <div class="product-information"><!--/product-information-->
                    <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                    <h2>{{ $value->product_name }}</h2>
                    <p>Mã ID: {{ $value->product_id }}</p>
                    <img src="images/product-details/rating.png" alt="" />

                    <form action="{{ URL::to('/save-cart') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $value->product_id }}"
                            class="cart_product_id_{{ $value->product_id }}">
                        <input type="hidden" value="{{ $value->product_name }}"
                            class="cart_product_name_{{ $value->product_id }}">
                        <input type="hidden" value="{{ $value->product_image }}"
                            class="cart_product_image_{{ $value->product_id }}">
                        <input type="hidden" value="{{ $value->product_price }}"
                            class="cart_product_price_{{ $value->product_id }}">

                        <span>
                            <span>{{ number_format($value->product_price, 0, ',', '.') . 'VNĐ' }}</span>

                            <label>Số lượng:</label>
                            <input name="qty" type="number" min="1"
                                class="cart_product_qty_{{ $value->product_id }}" value="1" />
                            <input name="productid_hidden" type="hidden" value="{{ $value->product_id }}" />
                        </span>
                        <input style="width: 100px" type="button" value="Thêm giỏ hàng"
                            class="btn btn-primary btn-sm add-to-cart" data-id_product="{{ $value->product_id }}"
                            name="add-to-cart">
                    </form>

                    <p><b>Tình trạng:</b> Còn hàng</p>
                    <p><b>Điều kiện:</b> Mơi 100%</p>
                    <p><b>Thương hiệu:</b> {{ $value->brand_name }}</p>
                    <p><b>Danh mục:</b> {{ $value->category_name }}</p>
                    <a href=""><img src="images/product-details/share.png" class="share img-responsive"
                            alt="" /></a>
                </div><!--/product-information-->
            </div>
        </div><!--/product-details-->

        <div class="category-tab shop-details-tab"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#details" data-toggle="tab">Mô tả</a></li>
                    <li><a href="#companyprofile" data-toggle="tab">Chi tiết sản phẩm</a></li>

                    <li><a href="#reviews" data-toggle="tab">Đánh giá</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="details">
                    <p>{!! $value->product_desc !!}</p>

                </div>

                <div class="tab-pane fade" id="companyprofile">
                    <p>{!! $value->product_content !!}</p>


                </div>

                <div class="tab-pane fade" id="reviews">
                    <div class="col-sm-12">
                        <ul>
                            <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                            <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                            <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p><b>Write Your Review</b></p>

                        <form action="#">
                            <span>
                                <input type="text" placeholder="Your Name" />
                                <input type="email" placeholder="Email Address" />
                            </span>
                            <textarea name=""></textarea>
                            <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
                            <button type="button" class="btn btn-default pull-right">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div><!--/category-tab-->
    @endforeach
    <div class="recommended_items"><!--recommended_items-->
        <h2 class="title text-center">Sản phẩm liên quan</h2>

        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    @foreach ($related as $key => $lienquan)
                        <a href="{{ URL::to('Chi-tiet-sp/' . $lienquan->product_id) }}">

                            <div class="col-6 col-sm-4 col-md-4 col-mp mt-2">
                                <div class="browseBookCard">
                                    <div class="discount text-center">
                                        <p class="text-light off-text "> <b> <span></span><br />
                                                <small class="text-small m-up-5">OFF</small></b></p>
                                    </div>
                                    <img class="pointer"
                                        src="{{ URL::to('public/uploads/product/' . $lienquan->product_image) }}"
                                        style="height: 200px">
                                    <div class="mt-2 mb-1">
                                        <b class="text-dark">{{ $lienquan->product_name }}</b>
                                        <span class="to-right"><i class="fa fa-heart" aria-hidden="true"
                                                style="color: red"></i>{{-- <i class="fa-solid fa-star text-primary "></i> --}}&nbsp;
                                            <span class="text-primary"></span>
                                        </span>
                                    </div>

                                    <small th:attr="onclick=|clickOnBook('${book.bookId}')|"
                                        class="text-small pointer m-up-10  text-muted"
                                        th:text="${book.bookAuthor}"></small>

                                    <small class="m-up-5 "><i class="fa fa-star text-dyellow"></i><i
                                            class="fa fa-star text-dyellow"></i><i class="fa fa-star text-dyellow"></i><i
                                            class="fa fa-star text-dyellow"></i></small>

                                    <div class="bookBuyFooter d-flex  m-up-10">
                                        <p class="text-success text-size-20"><b th:text="${dprice}">Giá:
                                                {{ number_format($lienquan->product_price) . ' ' . 'VNĐ' }}</b>
                                            <br> <small class="text-danger mx-2"><del>Giá gốc:
                                                    150.000 VND</del>
                                            </small>
                                        </p>
                                        <i th:attr="onclick=|addToCart('${book.bookId}','${book.bookTitle}','${dprice}')|"
                                            class=" pointer fa-solid fa-cart-plus to-right text-muted "></i>

                                    </div>

                                </div>
                            </div>
                    @endforeach


                </div>

            </div>

        </div>
    </div><!--/recommended_items-->
@endsection
{{-- giao diện điền thông tin địa chỉ giao hàng show_checkout --}}
@extends('layout')
@section('content')
    <br><br><br><br><br><br><br><br>
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{ URL::to('/trang-chu/') }}">Home</a></li>
                    <li class="active">Thanh Toán giỏ hàng</li>
                </ol>
            </div>
            <?php
            
            //echo Session::get('client_id');
            ?>
            <!--/breadcrums-->
            <!--/register-req-->
            <div class="card">
                <div class="row">
                    <div class="col-md-7 cart">
                        <div class="title">
                            <div class="row" style="color: #000;font-size: 30px;font">
                                <div class="col">Giỏ hàng

                                </div>
                                {{--                             <div class="col align-self-center text-right text-muted">3 items</div> --}}
                            </div>
                        </div>
                        <?php
                        
                        $content = Cart::content(); // show nội dung của sách trong trang vỏ hàng
                        // echo '<pre>';
                        //     print_r($content);
                        //     echo'</pre>';
                        ?>
                        <div class="row"style="color: #000">
                            <div class="row main align-items-center">
                                <div class="col-2">Hình ảnh</div>
                                <div class="col">
                                    Tên
                                </div>
                                <div class="col">Giá</div>
                                <div class="col">
                                    Số lượng
                                </div>

                                <div class="col">Thành tiền</div>
                            </div>
                        </div>
                        <div class="row ">
                            @foreach ($content as $v_content)
                                <div class="row main align-items-center border-top border-bottom"
                                    style="color: rgb(177, 177, 177)">
                                    <div class="col-2"><img class="img-fluid img1"
                                            src="{{ URL::to('public/uploads/product/' . $v_content->options->image) }}">
                                    </div>
                                    <div class="col">

                                        <div class="row">{{ $v_content->name }}</div>
                                    </div>
                                    <div class="col">{{ number_format($v_content->price) . ' ' . 'VNĐ' }}</div>


                                    <div class="col">
                                        <div class="cart_quantity_button ">

                                            <p style="font-size: 20px;color:#787674;">{{ $v_content->qty }}</p>

                                            {{-- <form action="{{ URL::to('/update_cart_quantity/') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input class="cart_quantity_input" type="text" name="cart_quantity"
                                                    value="{{ $v_content->qty }}" size="1">
                                                 <input type="hidden" name="rowId_cart" value="{{ $v_content->rowId }}"
                                                    class="form-control">
                                                <input type="submit" value="cập nhật" name="update_qty"
                                                    class="btn2 btn_default btn-sm" style="background-color: #000;">
                                            </form> --}}
                                        </div>
                                    </div>
                                    <div class="col"><?php
                                    $subtotal = $v_content->price * $v_content->qty;
                                    echo number_format($subtotal) . ' ' . 'VNĐ';
                                    ?></div>


                                </div>
                            @endforeach
                        </div>


                        <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to
                                shop</span>
                        </div>
                    </div>
                    <div class="col-md-5 summary ">
                        <div>
                            <h5><b>Địa chỉ giao hàng</b></h5>
                        </div>
                        <hr>

                        <form action="{{ URL::to('/save_checkout_client') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="email" name="shipping_email" placeholder="Email*" required="">
                            <input type="text" name="shipping_name" placeholder="Họ và Tên *" required="">
                            <input type="text" name="shipping_address" placeholder="Địa chỉ  *" required="">
                            <input type="text" name="shipping_sdt" placeholder="Số điện thoại" required="">
                            <textarea name="shipping_note" placeholder="Ghi chú đơn hàng" rows="3" required=""></textarea>
                            <button type="submit" value="Gửi" name="send_order" class="btn ">Gửi</button>
                            {{--                             <input type="submit" value="Gửi" name="send_order" class="btn btn-primary btn-sm">
 --}}
                        </form>


                    </div>
                </div>

            </div>


        </div>
        </div>
        <style>
            /*  body {
                                                                                                                                                                                                            background: #ddd;
                                                                                                                                                                                                            min-height: 100vh;
                                                                                                                                                                                                            vertical-align: middle;
                                                                                                                                                                                                            display: flex;
                                                                                                                                                                                                            font-family: sans-serif;
                                                                                                                                                                                                            font-size: 0.8rem;
                                                                                                                                                                                                            font-weight: bold;
                                                                                                                                                                                                        } */

            .title {
                margin-bottom: 5vh;
            }

            .card {
                margin: auto;
                max-width: 1100px;
                width: 100%;
                box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                border-radius: 1rem;
                border: transparent;
            }

            @media(max-width:767px) {
                .card {
                    margin: 3vh auto;
                }
            }

            .cart {
                margin: 0px;
                background-color: #fff;
                padding: 4vh 5vh;
                border-bottom-left-radius: 1rem;
                border-top-left-radius: 1rem;
            }

            @media(max-width:767px) {
                .cart {
                    padding: 4vh;
                    border-bottom-left-radius: unset;
                    border-top-right-radius: 1rem;
                }
            }

            .summary {
                background-color: #ddd;
                border-top-right-radius: 1rem;
                border-bottom-right-radius: 1rem;
                padding: 4vh;
                color: rgb(65, 65, 65);
            }

            @media(max-width:767px) {
                .summary {
                    border-top-right-radius: unset;
                    border-bottom-left-radius: 1rem;
                }
            }

            .summary .col-2 {
                padding: 0;
            }

            .summary .col-10 {
                padding: 0;
            }

            .row {
                margin: 0;
            }

            .title b {
                font-size: 1.5rem;
            }

            .main {
                margin: 0;
                padding: 2vh 0;
                width: 100%;
            }

            .col-2,
            .col {
                padding: 0 1vh;
            }

            a {
                padding: 0 1vh;
            }

            .close {
                margin-left: auto;
                font-size: 0.7rem;
            }

            img {
                width: 3.5rem;
            }

            .back-to-shop {
                margin-top: 4.5rem;
            }

            h5 {
                margin-top: 4vh;
            }

            hr {
                margin-top: 1.25rem;
            }

            form {
                padding: 2vh 0;
            }

            select {
                border: 1px solid rgba(0, 0, 0, 0.137);
                padding: 1.5vh 1vh;
                margin-bottom: 4vh;
                outline: none;
                width: 100%;
                background-color: rgb(247, 247, 247);
            }

            input {
                border: 1px solid rgba(0, 0, 0, 0.137);
                padding: 1vh;
                margin-bottom: 4vh;
                outline: none;
                width: 100%;
                background-color: rgb(247, 247, 247);
            }

            input:focus::-webkit-input-placeholder {
                color: transparent;
            }

            .btn {
                background-color: #000;
                border-color: #000;
                color: white;
                width: 100%;
                font-size: 18px;
                margin-top: 4vh;
                padding: 1vh;
                border-radius: 0;
            }

            .btn:focus {
                box-shadow: none;
                outline: none;
                box-shadow: none;
                color: white;
                -webkit-box-shadow: none;
                -webkit-user-select: none;
                transition: none;
            }

            .btn:hover {
                color: white;
            }

            a {
                color: black;
            }

            a:hover {
                color: black;
                text-decoration: none;
            }

            #code {
                background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253), rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
                background-repeat: no-repeat;
                background-position-x: 95%;
                background-position-y: center;
            }
        </style>
    </section>
@endsection





success: function() {

swal({
/* title: "Đã thêm sản phẩm vào giỏ hàng",
text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
showCancelButton: true,
cancelButtonText: "Xem tiếp",
confirmButtonClass: "btn-success",
confirmButtonText: "Đi đến giỏ hàng",
closeOnConfirm: false */

title: "Đã thêm vào giỏ hàng",
text: "Nhấn oke để tiếp tục xem những sản phẩm khác",
icon: "success",
button: "OKe",

},
/* function() {
window.location.href = "{{ url('/gio-hang') }}";
} */
);

}


{{-- chi tiết đơn hàng admin --}}
@extends('admin_layout')
@section('admin_content')
    <section>

        <div class="mt-2 p-5 ">
            <h5 class="text-muted my-2">Chi Tiết Đơn Hàng</h5>
            <div class="fullDivider"></div>


            <section id="cart_items">

                <div class="row my-5  ">
                    <div class="col-md-4 ">

                        <div class="panel-heading" style="background:#cfcfc4">
                            Thông tin khách hàng
                        </div>
                        <table class="table table-hover panel panel-default  table-striped">
                            <thead>
                                <tr>
                                    <th>Tên KH</th>

                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $client->client_name }}</td>

                                    <td>{{ $client->client_email }}</td>
                                </tr>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="col-md-8 ">
                        <div class="panel-heading" style="background:#cfcfc4">
                            Thông tin vận chuyển
                        </div>
                        <table class="table table-hover panel panel-default  table-striped">
                            <thead>
                                <tr>
                                    <th>Tên </th>
                                    <th>Địa chỉ</th>
                                    <th>SĐT</th>
                                    <th>Email</th>
                                    <th>Ghi chú</th>
                                    {{-- <th>TTTT</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <td>{{ $shipping->shipping_name }}</td>
                                <td>{{ $shipping->shipping_address }}</td>
                                <td>{{ $shipping->shipping_phone }}</td>
                                <td>{{ $shipping->shipping_email }}</td>
                                <td>{{ $shipping->shipping_note }}</td>
                                {{-- <td>
                                    @if ($payment->payment_method == 1)
                                        Chuyển khoản
                                    @else
                                        Tiền mặt
                                    @endif
                                </td> --}}
                            </tbody>
                        </table>
                    </div>
                </div>



                <div class="">

                    <div class="">
                        <div class="panel-heading" style="background:#cfcfc4">
                            Chi Tiết Sản Phẩm
                        </div>

                        <div class="table-responsive">
                            <?php
                            $message = Session::get('message');
                            if ($message) {
                                echo '<span class="text-alert">' . $message . '</span>';
                                Session::put('message', null);
                            }
                            ?>

                            <table class="table table-striped b-t b-light">
                                <thead>
                                    <tr>
                                        <th style="width:20px;">STT
                                            {{-- <label class="i-checks m-b-none">
                                                <input type="checkbox"><i></i>
                                            </label> --}}
                                        </th>
                                        <th>Tên sản phẩm</th>
                                        <th>Số lượng kho còn</th>
                                        {{-- <th>Mã giảm giá</th> --}}
                                        {{-- <th>Phí ship hàng</th> --}}
                                        <th>Số lượng mua</th>
                                        <th>Giá sản phẩm</th>
                                        <th>Tổng tiền</th>

                                        <th style="width:30px;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                        $total = 0;
                                    @endphp
                                    @foreach ($order_details as $key => $details)
                                        @php
                                            $i++;
                                            $subtotal = $details->product_price * $details->product_sales_quantity;
                                            $total += $subtotal;
                                        @endphp
                                        <tr class="color_qty_{{ $details->product_id }}">

                                            <td><i>{{ $i }}</i></td>
                                            <td>{{ $details->product_name }}</td>
                                            <td>{{ $details->product->product_quantity }}</td>
                                            {{-- <td>
                                                @if ($details->product_coupon != 'no')
                                                    {{ $details->product_coupon }}
                                                @else
                                                    Không mã
                                                @endif
                                            </td> --}}
                                            {{--                                 <td>{{ number_format($details->product_feeship, 0, ',', '.') }}đ</td> --}}
                                            <td>
                                                {{ $details->product_sales_quantity }}
                                                {{-- xử lý cập nhập --}}
                                                {{-- <input type="number" min="1"
                                                    {{ $order_status == 2 ? 'disabled' : '' }}
                                                    class="order_qty_{{ $details->product_id }}"
                                                    value="{{ $details->product_sales_quantity }}"
                                                    name="product_sales_quantity">

                                                <input type="hidden" name="order_qty_storage"
                                                    class="order_qty_storage_{{ $details->product_id }}"
                                                    value="{{ $details->product->product_quantity }}">

                                                <input type="hidden" name="order_code" class="order_code"
                                                    value="{{ $details->order_code }}">

                                                <input type="hidden" name="order_product_id" class="order_product_id"
                                                    value="{{ $details->product_id }}">

                                                @if ($order_status != 2)
                                                    <button class="btn btn-default update_quantity_order"
                                                        data-product_id="{{ $details->product_id }}"
                                                        name="update_quantity_order">Cập
                                                        nhật</button>
                                                @endif --}}

                                            </td>
                                            <td>{{ number_format($details->product_price, 0, ',', '.') }}đ</td>
                                            <td>{{ number_format($subtotal, 0, ',', '.') }}đ</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td class="text-right" colspan="5">



                                            Tổng Tiền Đơn Hàng Đã Đặt:
                                        </td>
                                        <td class="text-dark" colspan="6" style="">



                                            <b>{{ number_format($total, 0, ',', '.') }}đ</b>
                                        </td>

                                        {{-- <td colspan="2">
                                            @php
                                                $total_coupon = 0;
                                            @endphp
                                            @if ($coupon_condition == 1)
                                                @php
                                                    $total_after_coupon = ($total * $coupon_number) / 100;
                                                    echo 'Tổng giảm :' . number_format($total_after_coupon, 0, ',', '.') . '</br>';
                                                    $total_coupon = $total + $details->product_feeship - $total_after_coupon;
                                                @endphp
                                            @else
                                                @php
                                                    echo 'Tổng giảm :' . number_format($coupon_number, 0, ',', '.') . 'k' . '</br>';
                                                    $total_coupon = $total + $details->product_feeship - $coupon_number;
            
                                                @endphp
                                            @endif
            
                                            Phí ship : {{ number_format($details->product_feeship, 0, ',', '.') }}đ</br>
                                            Thanh toán: {{ number_format($total_coupon, 0, ',', '.') }}đ
                                        </td> --}}
                                    </tr>
                                    <tr>
                                        <td colspan="6">
                                            @foreach ($order as $key => $or)
                                                @if ($or->order_status == 1)
                                                    <form>
                                                        @csrf
                                                        <select class="form-control order_details">
                                                            <option value="">----Chọn hình thức đơn hàng-----
                                                            </option>
                                                            <option id="{{ $or->order_id }}" selected value="1">Chưa
                                                                xử lý
                                                            </option>
                                                            <option id="{{ $or->order_id }}" value="2">Đã xử lý-Đã
                                                                giao hàng
                                                            </option>
                                                            <option id="{{ $or->order_id }}" value="3">Hủy đơn
                                                                hàng-tạm giữ
                                                            </option>
                                                        </select>
                                                    </form>
                                                @elseif($or->order_status == 2)
                                                    <form>
                                                        @csrf
                                                        <select class="form-control order_details">{{-- class teen order_details là để điều khiển alert thông báo --}}
                                                            <option value="">----Chọn hình thức đơn hàng-----
                                                            </option>
                                                            <option id="{{ $or->order_id }}" value="1">Chưa xử lý
                                                            </option>
                                                            <option id="{{ $or->order_id }}" selected value="2">Đã
                                                                xử
                                                                lý-Đã
                                                                giao
                                                                hàng</option>
                                                            <option id="{{ $or->order_id }}" value="3">Hủy đơn
                                                                hàng-tạm giữ
                                                            </option>
                                                        </select>
                                                    </form>
                                                @else
                                                    <form>
                                                        @csrf
                                                        <select class="form-control order_details">
                                                            <option value="">----Chọn hình thức đơn hàng-----
                                                            </option>
                                                            <option id="{{ $or->order_id }}" value="1">Chưa xử lý
                                                            </option>
                                                            <option id="{{ $or->order_id }}" value="2">Đã xử lý-Đã
                                                                giao hàng
                                                            </option>
                                                            <option id="{{ $or->order_id }}" selected value="3">Hủy
                                                                đơn
                                                                hàng-tạm
                                                                giữ</option>
                                                        </select>
                                                    </form>
                                                @endif
                                            @endforeach


                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            {{-- <a target="_blank" href="{{ url('/print-order/' . $details->order_code) }}">In đơn hàng</a> --}}

                        </div>

                    </div>
                </div>

        </div>
    </section>
@endsection
