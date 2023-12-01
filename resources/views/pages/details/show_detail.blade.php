@extends('layout')
@section('content')
    <br><br><br><br><br><br>
    <style></style>
    <section>
        <div class="container-fluid p-0 mb-10 " style="height: 1000px;/* width: 1250px */">

            <div class="bookBanner glass">
                @foreach ($product_details as $key => $value)
                    <div class="d-flex " style="height: 48vh">
                        <div class="col-12 col-sm-5 " style="left: 150px;">
                            {{-- <img src="{{ URL::to('public/uploads/product/' . $value->product_image) }}"
                                style="border-radius: 15px 15px 15px 15px; width: 300px;" class="bookCover"
                                alt="Cover not found" /> --}}
                            <ul id="imageGallery">
                                <li data-thumb="{{ URL::to('public/frontend/images/tienganh1.jpg') }} "
                                    data-src="{{ URL::to('public/frontend/images/tienganh1.jpg') }}">
                                    <img src="{{ URL::to('public/frontend/images/tienganh1.jpg') }}"
                                        style="border-radius: 15px 15px 15px 15px;margin: 8%; 
                                    width: 50%;
                                    " />
                                </li>
                                <li data-thumb="{{ URL::to('public/frontend/images/tienganh2.jpg') }}"
                                    data-src="{{ URL::to('public/frontend/images/tienganh2.jpg') }}">
                                    <img src="{{ URL::to('public/frontend/images/tienganh2.jpg') }}"
                                        style="border-radius: 15px 15px 15px 15px; width: 300px; margin: 8%; 
                                    width: 50%;
                                    " />
                                </li>
                            </ul>

                        </div>
                        <div class="col-12 col-sm-9">
                            <div class="singleBookInfo">

                                <h1 class="text-muted">
                                    <b>{{ $value->product_name }}</b>
                                </h1>
                                <h4 class="title-700 text-muted m-up-0">
                                    <span>Tác giả: </b> {{ $value->brand_name }}</span>
                                </h4>
                                <br>
                                <p>Mã sản phẩm :<b> {{ $value->product_id }}</b></p>
                                <p>Số sách còn:<b> {{ $value->product_quantity }}</b></p>

                                <a href=""><img src="images/product-details/share.png" class="share img-responsive"
                                        alt="" /></a>

                                <form action="{{ URL::to('/save-cart') }}" method="POST">
                                    @csrf
                                    <p class="m-up-10">
                                        <span style="font-size: 25px" class="text-success">Giá:
                                            {{ number_format($value->product_price) . ' ' . 'VNĐ' }}</span><br>
                                        <del class="text-danger" style="font-size: 20px">Giá gốc: 150.000 VNĐ</del>

                                    </p>
                                    <input type="hidden" value="{{ $value->product_id }}"
                                        class="cart_product_id_{{ $value->product_id }}">
                                    <input type="hidden" value="{{ $value->product_name }}"
                                        class="cart_product_name_{{ $value->product_id }}">
                                    <input type="hidden" value="{{ $value->product_image }}"
                                        class="cart_product_image_{{ $value->product_id }}">
                                    <input type="hidden" value="{{ $value->product_quantity }}"
                                        class="cart_product_quantity_{{ $value->product_id }}">
                                    <input type="hidden" value="{{ $value->product_price }}"
                                        class="cart_product_price_{{ $value->product_id }}">

                                    <label>Số lượng:</label>
                                    <input name="qty" type="number" min="1"
                                        class="cart_product_qty_{{ $value->product_id }}" value="1" />
                                    <input name="productid_hidden" type="hidden" value="{{ $value->product_id }}" />
                                    <br><br><br>
                                    <div class="m-up-2000 ratings">
                                        <button type="button" class="btn rounded-btn btn-outline-success add-to-cart"
                                            data-id_product="{{ $value->product_id }}" name="add-to-cart"><b>Thêm vào giỏ
                                                hàng <i class="fa fa-shopping-cart"></i></b></button>
                                        <button type="button"
                                            class="btn rounded-btn btn-outline-danger add-to-cart"><b>Thêm vào yêu thích <i
                                                    class="fa fa-heart"></i></b></button>

                                    </div>

                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="d-flex">
                        <div class="col-12 col-sm-4 "style="left: 70px;top: 70px">
                            <div class="" style="padding: 25px 10px 5px 80px;">
                                <h1 class="text-muted">Thông tin chi tiết</h1>
                                <br>
                                <p class=" text-justify">
                                    {{ $value->product_desc }}
                                </p>

                                <div class="my-2 text-right">
                                    <a class="btn btn-outline-primary m-1 btn-sm"></a>
                                </div>
                            </div>
                        </div>
                @endforeach

                <div class="col-12 col-sm-7" style="left: 100px">
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



    </div>

    </div>

    </div>
    </div><!--/recommended_items-->
@endsection
