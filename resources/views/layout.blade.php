<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | TheGioiSach</title>
    <link href="{{ asset('public/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/css/text.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('public/backend/css/text.css') }}" rel='stylesheet' type='text/css' />


    {{-- css nhiều hình ảnh --}}
    <link href="{{ asset('public/backend/css/lightslider.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('public/backend/css/lightgallery.min.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('public/backend/css/prettify.css') }}" rel='stylesheet' type='text/css' />



    {{-- hết --}}


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ 'public/frontend/images/ico/favicon.ico' }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">




    {{-- Mau1 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <link rel="stylesheet" href="{{ asset('resources/files/owl/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/files/owl/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/files/alert/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/files/owl/owl.carousel.min.js') }}">
    <link rel="stylesheet" href="{{ asset('resources/files/alert/sweetalert2.min.css') }}">

    <link href="{{ asset('resources/css/starrr.css') }}" rel="stylesheet">
    <link href="{{ asset('resources/css/style1.css') }}" rel="stylesheet">
    <script src="{{ asset('resources/js/starrr.js') }}"></script>
    <script src="{{ asset('resources/js/script.js') }}"></script>
    {{-- Mau1 --}}


    {{-- Thêm --}}

</head>
<!--/head-->




<body class="bg-white">


    {{-- <div class="loader">
        <i class="text-muted fa-solid fa-spin fa-3x fa-spinner"></i>
    </div> --}}
    <div class="container ">
        <nav id="nav" class=" fixed-top navbar navbar-expand-lg navbar-light px-10 py-0 ">

            <a class="navbar-brand m-up-5"> <img src="{{ URL::to('public/frontend/images/logo.png') }}" width="150"
                    height="60" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item mx-1"><a class="nav-link text-dark" href="{{ URL::to('/trang-chu/') }}"><i
                                class="fa fa-home" aria-hidden="true"></i> Trang Chủ </span>
                        </a></li>
                    <li class="nav-item mx-1"><a class="nav-link text-dark" href="{{ URL::to('/news/') }}">Tin
                            Tức</a></li>
                    <li class="nav-item mx-1"><a class="nav-link text-dark" href="{{ URL::to('/introduce/') }}">Giới
                            Thiệu</a></li>

                    <?php
                            $client_id = Session::get('client_id');
                            
                
                            if($client_id!=NULL ){
                        ?>

                    <li class="nav-item mx-1">
                        <a class="nav-link text-dark" href="{{ URL::to('/my-order/') }}">Lịch sử đơn hàng</a>
                    </li>
                    <?php
                            }
                        ?>



                    {{-- <li class="nav-item dropdown mx-1"><a class="nav-link dropdown-toggle text-dark" href="#"
                        id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Dropdown </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item">Sci-fi Books</a> <a class="dropdown-item">Coding Books</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item">Buy Old Books</a>
                    </div>
                </li>
                <li class="nav-item mx-1"><a class="nav-link text-dark">Feedbacks</a></li>
                <li class="nav-item mx-1"><a class="nav-link text-dark">About</a></li> --}}



                </ul>


                {{-- Tìm kiếm sản phẩm bằng cách lọc --}}

                {{-- <button onclick="openFunction()" class=" btn form-control search-btn mr-sm-2 radius-50 bg-fyellow border-none p-0">
                <i class=" fa fa-search"></i> Lọc
            </button> --}}
                <form action="{{ URL::to('/search/') }}" class="form-inline my-1000 my-lg-10" method="POST">
                    {{ csrf_field() }}
                    <div class="input-group mb-2">
                        <input type="text" name="keywords_submit"
                            class="bookSearchName form-control rounded-input" placeholder="Username">
                        <div class="input-group-append">
                            <button type="submit" class=" input-group-text bg-dyellow pointer"
                                style="border-radius: 25px;" name="search-items">
                                <i class="fa fa-search"></i>
                            </button>

                        </div>
                    </div>

                </form>

                <a class="nav-link text-dark" href="{{ URL::to('/gio-hang/') }}"><i
                        class="mx-4 fa fa-shopping-basket pointer"> {{-- Muốn chạy khung sctrip (data-toggle="modal" data-target="#cart") --}}
                        <small class="text-small {{-- cart-num --}} "></small></i>Giỏ hàng</a>



                {{-- đăng nhập --}}


                <div class="col-sm-3">
                    <div class="social-icons pull-right ">
                        <ul class=" nav navbar-nav">
                            <?php
                            $client_id = Session::get('client_id');
                            if($client_id!=NULL){
                            ?>
                            <li class="dropdown  ">
                                <a data-toggle="dropdown" class="" href="">
                                    <img class="rounded-circle" ; width="7%"
                                        src="{{ Session::get('client_picture') }}">
                                    {{ Session::get('client_name') }}
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu extended logout " style="">
                                    <li><a href="#"><i class=" fa fa-suitcase"></i>Thông tin cá nhân</a></li>
                                    <li><a href="#"><i class=" fa fa-cog"></i>Cài đặt</a></li>
                                    <li><a href="{{ URL::to('/logout_checkout/') }}"><i class="fa fa-key"></i>
                                            Đăng xuất</a></li>

                                </ul>
                            </li>
                            <?php
                                }else{
                            ?>
                            <li>
                                <a href="{{ URL::to('/login_checkout/') }}">
                                    <i class="bi bi-box-arrow-left"> Đăng nhập</i>
                                </a>
                            </li>
                            <?php
                            }
                            ?></i></a></li>
                        </ul>
                    </div>
                </div>



            </div>
        </nav>
    </div>



    {{-- giỏ hàng --}}
    <div class="modal fade " id="cart" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="{{ URL::to('resources/image/webImg/bookKart.png') }}" style="width: 40px; height: 30px"
                        alt="" />&nbsp;
                    <h4 class="modal-title text-muted" id="exampleModalLabel">
                        Giỏ Hàng</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class=" table-responsive cart_info">
                    <?php
                    $content = Cart::content(); // show nội dung của sách trong trang vỏ hàng
                    // echo '<pre>';
                    //     print_r($content);
                    //     echo'</pre>';
                    ?>
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image col-sm-2">Hình ảnh</td>
                                <td class="description col-sm-3">Tên sản phẩm</td>
                                <td class="price ">Giá</td>
                                <td class="quantity ">Số Lượng</td>
                                <td class="total ">Tổng</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($content as $v_content)
                                <tr>
                                    <td class="cart_product">
                                        <a href=""><img
                                                src="{{ URL::to('public/uploads/product/' . $v_content->options->image) }}"style=" width:50px; height=50px; "
                                                alt=""></a>
                                    </td>
                                    <td class="cart_description">
                                        <h4><a href="">{{ $v_content->name }}</a></h4>
                                        <p>Web ID: {{ $v_content->id }}</p>
                                    </td>
                                    <td class="cart_price">
                                        <p>{{ number_format($v_content->price) . ' ' . 'VNĐ' }}</p>
                                    </td>
                                    <td class="cart_quantity">
                                        <div class="cart_quantity_button">
                                            <form action="{{ URL::to('/update_cart_quantity/') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input class="cart_quantity_input" type="text"
                                                    name="cart_quantity" value="{{ $v_content->qty }}"
                                                    size="1">
                                                <input type="hidden" name="rowId_cart"
                                                    value="{{ $v_content->rowId }}" class="form-control">
                                                <input type="submit" value="cập nhật" name="update_qty"
                                                    class="btn btn_default btn-sm">
                                        </div>
                                        </form>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price">

                                            <?php
                                            $subtotal = $v_content->price * $v_content->qty;
                                            echo number_format($subtotal) . ' ' . 'VNĐ';
                                            ?>
                                        </p>
                                    </td>
                                    <td class="cart_delete">
                                        <a class="cart_quantity_delete"
                                            href="{{ URL::to('/delete_to_cart/' . $v_content->rowId) }}"><i
                                                class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><b>Tổng Tiền Sản Phẩm</b></td>
                                <td><b><span>{{ Cart::subtotal() . ' ' . 'VNĐ' }}</span></b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <?php
                        $client_id = Session::get('client_id');
                        $shipping_id = Session::get('shipping_id');
                        if($client_id!=NULL && $shipping_id==NULL){
                    ?>
                    <a type="button" class="btn btn-success" href="{{ URL::to('/show_checkout/') }}">Thanh
                        Toán</a>{{-- phải đăng nhập mới được thanh toán --}}
                    <?php
                        }elseif ($client_id!=NULL && $shipping_id!=NULL) {
                    ?>
                    <a type="button" class="btn btn-success" href="{{ URL::to('/payment/') }}">Thanh
                        Toán</a>{{-- phải đăng nhập mới được thanh toán --}}
                    <?php
                        }else{
                    ?>
                    <a type="button" class="btn btn-success"href="{{ URL::to('/login_checkout/') }}">Thanh
                        Toán</a>{{-- phải đăng nhập mới được thanh toán --}}
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>


    {{-- Bộ lọc tìm kiếm sản phẩm --}}

    <div class="searchDiv" id="searchDiv">
        <h1 class="closeSearch to-right mt-2 close" onclick="closeFunction()">
            <i class="fa-solid fa-xmark"></i>
        </h1>
        <div class="text-center mt-5">

            <img style="width: 20%; height: auto;" th:src="@{/image/webImg/searchBook.png}" alt="" />
            <h3 class="text-muted p2-5 pb-4">
                <b>Search Books Here...</b>
            </h3>

            <div class="row mb-4">
                <div class="col-10 offset-1">
                    <form th:action="@{/doFindBook}" class="form text-left">
                        <div class="mb-4">
                            <small class="text-small text-muted mt-4">Search By Book
                                Name </small> <input type="text" name="bName"
                                placeholder="Ente The Search Book name" class="form-control" />
                        </div>
                        <div class="mb-4">
                            <small class=" text-small text-muted ">Search By Book
                                Auther Name </small> <input type="text" name="aName"
                                placeholder="Enter Book Auther name" class="form-control" />
                        </div>
                        <div class="row">
                            <div class="col-6 mb-4">
                                <small class=" text-small text-muted ">Select Price
                                    Criteria </small> <select class="form-control" name="price" id="">
                                    <option value="all">All Books</option>
                                    <option value="less 200">less than 200 rs</option>
                                    <option value="bet 200 to 500">between 200 rs 500 rs</option>
                                    <option value="greter 500">greter than 500 rs</option>

                                </select>
                            </div>


                            <div class="">
                                <small class="text-small text-muted mt-4">Choose Book
                                    Categorys</small> <input name="categorys" placeholder="Choose the Book categorys"
                                    class="categoryInput form-control dropdown-toggle" data-toggle="dropdown">

                                <ul class="dropdown-menu bg-light px-2">
                                    <li>
                                        <a href="#" class="small" data-value="Science" tabIndex="-1"><input
                                                type="checkbox" />&nbsp;Science Fiction
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="small" data-value="Adventure"
                                            tabIndex="-1"><input type="checkbox" />&nbsp;Adventure</a>
                                    </li>
                                    <li>
                                        <a href="#" class="small" data-value="History" tabIndex="-1"><input
                                                type="checkbox" />&nbsp;History</a>
                                    </li>
                                    <li>
                                        <a href="#" class="small" data-value="Action" tabIndex="-1"><input
                                                type="checkbox" />&nbsp;Action</a>
                                    </li>
                                    <li>
                                        <a href="#" class="small" data-value="Children's"
                                            tabIndex="-1"><input type="checkbox" />&nbsp;Children's</a>
                                    </li>
                                    <li>
                                        <a href="#" class="small" data-value="Classic" tabIndex="-1"><input
                                                type="checkbox" />&nbsp;Classic </a>
                                    </li>
                                    <li>
                                        <a href="#" class="small" data-value="Comic book"
                                            tabIndex="-1"><input type="checkbox" />&nbsp;Comic book</a>
                                    </li>
                                    <li>
                                        <a href="#" class="small" data-value="Crime" tabIndex="-1"><input
                                                type="checkbox" />&nbsp;Crime</a>
                                    </li>
                                    <li>
                                        <a href="#" class="small" data-value="Drama" tabIndex="-1"><input
                                                type="checkbox" />&nbsp;Drama</a>
                                    </li>
                                    <li>
                                        <a href="#" class="small" data-value="Novel" tabIndex="-1"><input
                                                type="checkbox" />&nbsp;Novel</a>
                                    </li>
                                    <li>
                                        <a href="#" class="small" data-value="Suspence" tabIndex="-1"><input
                                                type="checkbox" />&nbsp;Suspense and Thrillers
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="small" data-value="Biographies and Autobiographies"
                                            tabIndex="-1"><input type="checkbox" />&nbsp;Biographies and
                                            Autobiographies</a>
                                    </li>
                                    <li>
                                        <a href="#" class="small" data-value="Cookbooks"
                                            tabIndex="-1"><input type="checkbox" />&nbsp;Cookbooks</a>
                                    </li>

                                    <li>
                                        <a href="#" class="small" data-value="Coding" tabIndex="-1"><input
                                                type="checkbox" />&nbsp;Coding</a>
                                    </li>
                                </ul>
                            </div>



                        </div>

                        <!-- bookType and language  -->
                        <div class="row mb-4 ">
                            <div class="col">
                                <small class=" text-small text-muted ">select book
                                    language</small>
                                <div class="form-outline">
                                    <select class="form-control" name="language" id="">
                                        <option value="all">Any language</option>
                                        <option value="english">English</option>
                                        <option value="hindi">Hindi</option>
                                        <option value="marathi">Marathi</option>
                                        <option value="gujrati">Gujrati</option>
                                        <option value="jerman">Jerman</option>
                                        <option value="spanish">Spanish</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <small class=" text-small text-muted ">select book type</small>
                                <div class="form-outline">
                                    <select class="form-control" name="type" id="">
                                        <option value="all">Any Books</option>
                                        <option value="new">New Book</option>
                                        <option value="old">Old Book</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="text-right">
                            <button type="submit" class="btn btn-warning">Find Book</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>

    <main class="main-content">
        @yield('content')
    </main>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <!-- Import thư viện JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // kéo xuống khoảng cách 200px thì xuất hiện nút Top-up
        var offset = 200;
        // thời gian di trượt 0.75s ( 1000 = 1s )
        var duration = 750;
        $(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > offset)
                    $('#top-up').fadeIn(duration);
                else
                    $('#top-up').fadeOut(duration);
            });
            $('#top-up').click(function() {
                $('body,html').animate({
                    scrollTop: 0
                }, duration);
            });
        });
    </script>
    <div title="Về đầu trang" id="ba">
        <i class="fas fa-arrow-circle-up"></i>
    </div>
    <style>
        #ba {
            font-size: 5rem;
            cursor: pointer;
            position: fixed;
            z-index: 9999;
            color: #ffa10a;
            bottom: 50px;
            right: 30px;
            display: none;
        }

        #top-up:hover {

            color: #b8b6b3;
        }
    </style>




    {{-- nhắn tin bằng mess --}}

    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "108356962100573");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v15.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    {{-- /nhắn tin bằng mess --}}



    <div class="footer" style="height: 350px">
        <div class="container">
            <div class="row text-light">
                <div class="col-12 col-sm-6 col-md-3">
                    <h6>
                        <b>SHOP WITH US</b>
                    </h6>
                    <small class="text-muted"><b>Advanced Search</b></small><br /> <small class="text-muted"><b>Browse
                            Collections</b></small><br /> <small class="text-muted"><b>My Account</b> </small><br />
                    <small class="text-muted"><b>My Orders</b></small><br />
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <h6>
                        <b>SELL WITH US</b>
                    </h6>
                    <small class="text-muted"><b>Start Selling</b></small><br /> <small class="text-muted"><b>Join Our
                            Affiliate Program</b></small><br />
                    <small class="text-muted"><b>Book Payback</b> </small><br />
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <h6>
                        <b>ABOUT US</b>
                    </h6>
                    <small class="text-muted"><b>About Our Store</b></small><br /> <small
                        class="text-muted"><b>Media</b></small><br /> <small class="text-muted"><b>Accessibility</b>
                    </small><br /> <small class="text-muted"><b>Designated Agent</b></small><br />
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <h6>
                        <b>SUPPORT</b>
                    </h6>
                    <small class="text-muted"><b>Help</b></small><br /> <small class="text-muted"><b>Privacy
                            Policy</b></small><br /> <small class="text-muted"><b>Customer Support</b> </small><br />
                    <small class="text-muted"><b>Career</b></small><br />
                </div>
            </div>
            <!-- row end -->
            <div class="text-center mt-5">
                <h5 class="text-title text-light">Our Book</h5>
                <small class="text-muted text-small">By Using the Web
                    site.you confirm that you read, understood and agreed to<br>be
                    beyond by the <b class="text-warning pointer">Terms and
                        Conditions.</b>
                </small>
            </div>
            <div class="text-muted mt-5">
                <small class="text-small">Copyright &nbsp;<i class="fa-solid fa-copyright"></i>&nbsp;2021. All Right
                    Reserved by
                    <b class="text-warning">Our Book Store</b></small>
            </div>

        </div>
    </div>
    <!--/Footer-->


    <script>
        function closeFunction() {
            document.getElementById("searchDiv").style.width = '0px';
        }

        function openFunction() {
            document.getElementById("searchDiv").style.width = '60%';

        }
        var myNav = $("#nav");

        $(window).on('scroll', function() {
            "use strict";
            if ($(window).scrollTop() >= 50) {
                myNav.addClass("bg-fyellow");
            } else {
                myNav.removeClass("bg-fyellow");
            }
        });

        var loader = document.querySelector(".loader")
        window.addEventListener("load", vanish);

        function vanish() {
            loader.classList.add("disppear");
        }
    </script>
    {{-- <script type="text/javascript">
        $(document).ready(function() {
                    $('.add-to-cart').click(function() {

                        var id = $(this).data('id_product');

                        var cart_product_id = $('.cart_product_id_' + id).val();
                        var cart_product_name = $('.cart_product_name_' + id).val();
                        var cart_product_image = $('.cart_product_image_' + id).val();
                        var cart_product_price = $('.cart_product_price_' + id).val();
                        var cart_product_qty = $('.cart_product_qty_' + id).val();
                        var _token = $('input[name="_token"]').val();
                        /* alert(cart_product_qty);
                        alert(cart_product_price);
                        alert(cart_product_image);
                        alert(cart_product_name);
                        alert(cart_product_id);
                        alert(_token); */
                        $.ajax({
                                url: '{{ url('/add-cart-ajax') }}',
                                method: 'POST',
                                data: {
                                    cart_product_id: cart_product_id,
                                    cart_product_name: cart_product_name,
                                    cart_product_image: cart_product_image,
                                    cart_product_price: cart_product_price,
                                    cart_product_qty: cart_product_qty,
                                    _token: _token
                                },
                                success: function() {

                                    /* swal("Here's the title!", "...and here's the text!"); */
                                    /* swal({
                                            title: "Đã thêm sản phẩm vào giỏ hàng",
                                            text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                            showCancelButton: true,
                                            cancelButtonText: "Xem tiếp",
                                            confirmButtonClass: "btn-success",
                                            confirmButtonText: "Đi đến giỏ hàng",
                                            closeOnConfirm: false
                                        },
                                        function() {
                                            window.location.href = "{{ url('/gio-hang') }}";
                                        }); */
                                    swal({
                                        title: "Đã thêm sản phẩm vào giỏ hàng?",
                                        text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                        icon: "warning",
                                        buttons: true,
                                        dangerMode: true,
                                    })

                                    function() {
                                        window.location.href = "{{ url('/gio-hang') }}";
                                    }

                                    /* .then((willDelete) => {
                                        if (willDelete) {
                                            swal("Poof! Your imaginary file has been deleted!", {
                                                icon: "success",
                                            });
                                        } else {
                                            swal("Your imaginary file is safe!");
                                        } */
                                });

                        }

                    });
    </script> --}}


    {{-- xác nhận đơn hàng bằng ajax --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('.send_order').click(function() {
                swal({
                        title: "Xác nhận đơn hàng",
                        text: "Đơn hàng sẽ không được hoàn trả khi đặt,bạn có muốn đặt không?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            var shipping_email = $('.shipping_email').val();
                            var shipping_name = $('.shipping_name').val();
                            var shipping_address = $('.shipping_address').val();
                            var shipping_phone = $('.shipping_phone').val();
                            var shipping_note = $('.shipping_note').val();
                            var payment_method = $('.payment_select').val();

                            var _token = $('input[name="_token"]').val();

                            $.ajax({
                                url: '{{ url('/confirm-order') }}',
                                method: 'POST',
                                data: {
                                    shipping_email: shipping_email,
                                    shipping_name: shipping_name,
                                    shipping_address: shipping_address,
                                    shipping_phone: shipping_phone,
                                    shipping_note: shipping_note,
                                    _token: _token,


                                    payment_method: payment_method
                                },
                                success: function() {
                                    swal("Đơn hàng",
                                        "Đơn hàng của bạn đã được gửi thành công",
                                        "success");

                                }
                            });
                            window.location.href = "{{ url('/cash-payment') }}";
                            /* window.setTimeout(function() {
                                location.reload();
                            }, 3000); */
                            /* swal("Hoàn Tất", "Đơn hàng đã được gửi thành công.", "success", {
                                icon: "success", */

                        } else {
                            swal("Đóng", "Đơn hàng chưa được gửi, làm ơn hoàn tất đơn hàng", "error");
                        }
                    });




            });
        });
    </script>
    {{--  xác nhận đơn hàng bằng ajax hết --}}

    {{-- thêm vào giỏ hàng bằng ajax --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('.add-to-cart').click(function() {

                var id = $(this).data('id_product');
                // alert(id);
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_quantity = $('.cart_product_quantity_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                if (parseInt(cart_product_qty) > parseInt(cart_product_quantity)) {
                    alert('Số lượng trong kho không đủ! Vui long đặt nhỏ hơn số lượng: ' +
                        cart_product_quantity);
                } else {
                    $.ajax({
                        url: '{{ url('/add-cart-ajax') }}',
                        method: 'POST',
                        data: {
                            cart_product_id: cart_product_id,
                            cart_product_name: cart_product_name,
                            cart_product_image: cart_product_image,
                            cart_product_price: cart_product_price,
                            cart_product_qty: cart_product_qty,
                            cart_product_quantity: cart_product_quantity,
                            _token: _token
                        },
                        success: function() {

                            swal({
                                    title: "Đã thêm sản phẩm vào giỏ hàng",
                                    text: "Bạn có thể nhấn oke để vào giỏ hàng tiến hành thanh toán",
                                    icon: "success",

                                    buttons: true,
                                    dangerMode: true,
                                })
                                .then((willDelete) => {
                                    if (willDelete) {

                                        window.location.href =
                                            "{{ url('/gio-hang') }}";

                                    } else {
                                        window.setTimeout(function() {
                                            location.reload();
                                        }, 3000);
                                    }
                                });

                        }

                    });
                }
            });
        });
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('public/frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/price-range.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('public/frontend/js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    {{-- js nhiều hình ảnh --}}

    <script src="{{ asset('public/backend/js/lightslider.js') }}"></script>
    <script src="{{ asset('public/backend/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/prettify.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#imageGallery').lightSlider({
                gallery: true,
                item: 1,
                loop: true,
                thumbItem: 8,
                slideMargin: 0,
                enableDrag: false,
                currentPagerPosition: 'left',
                onSliderLoad: function(el) {
                    el.lightGallery({
                        selector: '#imageGallery .lslide'
                    });
                }
            });
        });
    </script>
    {{-- hết --}}
    {{-- <script type="text/javascript">
        $(document).ready(function() {
            swal("Heare's a messsss");
        });
    </script> --}}
    @yield('page-js-script')

</body>

</html>
