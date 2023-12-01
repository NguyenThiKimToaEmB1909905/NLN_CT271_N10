<body>

    <?php
    
    // echo Session::get('client_id');
    //echo Session::get('shipping_id');
    ?>
    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-truck"> Ship toàn quốc</i></a></li>
                                <li><a href="#"><i class="fa fa-envelope">thegioisach@gmail.com</i> </a></li>
                                <li><a href="#"><i class="fa fa-phone">+0393439883</i> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <?php
                                    $client_id = Session::get('client_id');
                                    if($client_id!=NULL){
                                    ?>
                                <li class="dropdown ">
                                    <a data-toggle="dropdown" class="" href="">
                                        <img class="rounded-circle" ; width="7%"
                                            src="{{ Session::get('client_picture') }}">
                                        {{ Session::get('client_name') }}
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu extended logout " style="">
                                        {{-- <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                                                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li> --}}
                                        <li><a href="{{ URL::to('/logout_checkout/') }}"><i class="fa fa-key"> Đăng
                                                    xuất</i></a></li>
                                    </ul>
                                </li>
                                <?php
                                        }else{
                                    ?>
                                <li><a href="{{ URL::to('/login_checkout/') }}"><i class="bi bi-box-arrow-left">Đăng
                                            nhập</i></a></li>
                                <?php
                                    }
                                    ?></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="logo pull-left">
                            <a href="{{ URL::to('/trang-chu/') }}"><img
                                    src="{{ URL::to('public/frontend/images/logo1.jpg') }}"
                                    style="width:340px; height:70px" alt="" /></a>
                        </div>

                    </div>
                    <div class="col-sm-6 pull-right" style="margin-top:15px;">
                        <form action="{{ URL::to('/search/') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="search_box " style=" width:100%">
                                <input type="text" name="keywords_submit" placeholder="Tìm kiếm..."
                                    style=" width:91%;font-size:18px" />
                                <button type="submit" class="btn "
                                    style="margin-bottom:5px; color:#FFF ; font-size:17px; background:rgb(255, 129, 50)"
                                    name="search-items">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="">
            <!--header-bottom-->
            <div class="container header-bottom ">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                {{-- khi lick lick vào home sẽ ra cái đường dẫn /trang-chu --}}
                                <li><a href="{{ URL::to('/trang-chu/') }}" class="active"> <i class="fa fa-home"
                                            aria-hidden="true"></i>Trang chủ</a></li>
                                <li><a href="{{ URL::to('/news/') }}">Tin Tức</a></li>
                                <li><a href="{{ URL::to('/introduce/') }}">Giới Thiệu</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-8 mainmenu pull-right" style="margin-top:-30px">
                        <div class="shop-menu pull-right" style="margin-left: 10%">
                            <ul class="nav navbar-nav col-sm-12">
                                <li><a href="{{ URL::to('/myorder/') }}"><i class="fa fa-star"></i> Đơn hàng của
                                        tôi</a></li>
                                <?php
                                    $client_id = Session::get('client_id');
                                    $shipping_id = Session::get('shipping_id');
                                    if($client_id!=NULL && $shipping_id==NULL){
                                ?>
                                <li><a href="{{ URL::to('/show_checkout/') }}"><i class="bi bi-cash-coin"></i> Thanh
                                        Toán</a></li>
                                <?php
                                    }elseif ($client_id!=NULL && $shipping_id!=NULL) {
                                ?>
                                <li><a href="{{ URL::to('/payment/') }}"><i class="bi bi-cash-coin"></i> Thanh
                                        Toán</a></li>
                                <?php
                                    }else{
                                ?>
                                <li><a href="{{ URL::to('/login_checkout/') }}"><i class="bi bi-cash-coin"></i> Thanh
                                        Toán</a></li>
                                <?php
                                    }
                                ?>
                                <li><a href="{{ URL::to('/show_cart/') }}"><i class="fa fa-shopping-cart"></i> Giỏ
                                        hàng</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--/header-bottom-->


    </header>
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



    <footer id="footer">
        <!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="companyinfo">
                            <h2><span>THEGIOISACH</span>.COM </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">

                    <div class="col-sm-4">
                        <div class="single-widget">
                            <h2>HỖ TRỢ</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#"> Chính sách đổi - trả - hoàn tiền</a></li>
                                <li><a href="#">Chính sách bảo hành - bồi hoàn</a></li>
                                <li><a href="#">Chính sách vận chuyển</a></li>
                                <li><a href="#">Chính sách khách sỉ</a></li>
                                <li><a href="#">Phương thức thanh toán và xuất HĐ</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="single-widget">
                            <h2>TÀI KHOẢN CỦA TÔI
                            </h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Đăng nhập/Tạo mới tài khoản</a></li>
                                <li><a href="#">Thay đổi địa chỉ khách hàng</a></li>
                                <li><a href="#"> Chi tiết tài khoản</a></li>
                                <li><a href="{{ URL::to('/myorder/') }}">Lịch sử mua hàng</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-widget">
                            <h2>ĐỊA CHỈ</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62860.63914868921!2d105.72255072784505!3d10.034185113828485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0629f6de3edb7%3A0x527f09dbfb20b659!2zQ-G6p24gVGjGoSwgTmluaCBLaeG7gXUsIEPhuqduIFRoxqEsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1669875841504!5m2!1svi!2s"
                                        width="400" height="150" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </li>
                                {{-- <li><a href="#">Điều khoản sử dụng</a></li>
                                <li><a href="#">Chính sách bảo mật thông tin cá nhân</a></li>
                                <li><a href="#">Chính sách bảo mật thanh toán</a></li>
                                <li><a href="#">Giới thiệu THEGIOISACH</a></li>
                                <li><a href="#">Hệ thống trung tâm - nhà sách</a></li> --}}
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="footer-bottom" style="background: #FE980F">
            <div class="container">
                <div class="row">
                    <p style="margin-left: 500px">Copyright © 2022 THEGIOISACH Inc. All rights reserved.</p>

                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->



    <script src="{{ asset('public/frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/price-range.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('public/frontend/js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    @yield('page-js-script')

</body>














<body class="bg-white">



    <div class="loader">
        <i class="text-muted fa-solid fa-spin fa-3x fa-spinner"></i>
    </div>

    <div class="container">
        <nav id="nav" class="fixed-top navbar navbar-expand-lg navbar-light px-10 py-0 ">

            <a class="navbar-brand m-up-5"> <img src="{{ URL::to('public/frontend/images/logo.png') }}"
                    width="150" height="60" class="d-inline-block align-top" alt="">
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

                <i class="mx-4 fa fa-shopping-basket pointer" data-toggle="modal" data-target="#cart"> <small
                        class="text-small cart-num"></small></i>

                {{-- đăng nhập --}}
                <div class="col-sm-7">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <?php
                                $client_id = Session::get('client_id');
                                if($client_id!=NULL){
                                ?>
                            <li class="dropdown ">
                                <a data-toggle="dropdown" class="" href="">
                                    <img class="rounded-circle" ; width="7%"
                                        src="{{ Session::get('client_picture') }}">
                                    {{ Session::get('client_name') }}
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu extended logout " style="">
                                    {{-- <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li> --}}
                                    <li><a href="{{ URL::to('/logout_checkout/') }}"><i class="fa fa-key"> Đăng
                                                xuất</i></a></li>
                                </ul>
                            </li>
                            <?php
                                    }else{
                                ?>
                            <li><a href="{{ URL::to('/login_checkout/') }}"><i class="bi bi-box-arrow-left">Đăng
                                        nhập</i></a></li>
                            <?php
                                }
                                ?></i></a></li>
                        </ul>
                    </div>
                </div>



            </div>
        </nav>
    </div>

    <!-- Modal -->
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

        #ba:hover {

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


    <div class="footer">
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






    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script> -->


    <script language=JavaScript>
        var message = "function disabled";

        function rtclickcheck(keyp) {
            if (navigator.appName == "Netscape" && keyp.which == 3) {
                alert(message);
                return false;
            }

            if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) {
                alert(message);
                return false;
            }
        }

        document.onmousedown = rtclickcheck;
    </script>

    <script>
        var options = [];

        $('.dropdown-menu a')
            .on(
                'click',
                function(event) {

                    var $target = $(event.currentTarget),
                        val = $target
                        .attr('data-value'),
                        $inp = $target
                        .find('input'),
                        idx;

                    if ((idx = options.indexOf(val)) > -1) {
                        options.splice(idx, 1);
                        setTimeout(function() {
                            $inp.prop('checked', false)
                        }, 0);
                    } else {
                        options.push(val);
                        setTimeout(function() {
                            $inp.prop('checked', true)
                        }, 0);
                    }

                    $(event.target).blur();
                    console.log(options);
                    $(".categoryInput").val(options);

                    return false;
                });
    </script>

    <script>
        $(document).ready(function() {
            $('.owl-carousel3').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });

            $('.owl-carousel4').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });
            $('.alsolikeBookCarousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script>
    <script>
        function closeFunction() {
            document.getElementById("searchDiv").style.width = '0px';
        }

        function openFunction() {
            document.getElementById("searchDiv").style.width = '49%';

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


    <script src="{{ asset('public/frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/price-range.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('public/frontend/js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    @yield('page-js-script')
</body>

{{-- cũ --}}
<section>
    <div class="container">
        <div class="row">
            <!-- Phần bên trái trang web -->
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


                </div>
            </div>

            <!-- Phần bên phải nd trang web -->
            <div class="col-sm-9 padding-right">
                @foreach ($product_details as $key => $detail)
                    <div class="product-details">

                        <!--product-details-->



                        <div class="col-sm-6">
                            <div class="view-product">
                                <img src="{{ URL::to('public/uploads/product/' . $detail->product_image) }}"
                                    alt="" />
                                {{-- <h3>ZOOM</h3> --}}
                            </div>


                        </div>
                        <div class="col-sm-6">
                            <div class="product-information">
                                <!--/product-information-->
                                <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                                <h2>{{ $detail->product_name }}</h2>
                                <p>Mã sản phẩm : {{ $detail->product_id }}</p>
                                <img src="images/product-details/rating.png" alt="" />
                                <form action="{{ URL::to('/save_cart/') }}" method="POST">
                                    {{ csrf_field() }}
                                    <span class="">
                                        <span>Giá: {{ number_format($detail->product_price) . ' ' . 'VNĐ' }}</span>
                                        <label>Số lượng:</label>
                                        <input name="qty" type="number" min="1" value="1" />
                                        <input name="productid_hidden" type="hidden"
                                            value="{{ $detail->product_id }}" />
                                        <button type="submit" class="btn btn-fefault cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            Thêm vào giỏ hàng
                                        </button>
                                    </span>
                                </form>
                                <p><b>Tình Trạng:</b> Còn hàng</p>
                                <p><b>Danh mục: </b>{{ $detail->category_name }}</p>
                                <p><b>Thương hiệu: </b> {{ $detail->brand_name }}</p>
                                <a href=""><img src="images/product-details/share.png"
                                        class="share img-responsive" alt="" /></a>
                            </div>
                            <!--/product-information-->
                        </div>

                    </div>

                    <!--/product-details-->


                    <div class="category-tab shop-details-tab">
                        <!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#details" data-toggle="tab">Thông tin Chi Tiết</a></li>
                                <li><a href="#reviews" data-toggle="tab">Đánh giá</a></li>


                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="details">

                                <p><b> {{ $detail->product_name }}</b></p>
                                <p> {{ $detail->product_desc }}</p>
                                <p> {{ $detail->product_content }}</p>




                            </div>
                            <div class="tab-pane fade " id="reviews">
                                <div class="col-sm-12">
                                    <ul>
                                        <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                                        <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                        <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                                    </ul>
                                    <p>Đánh giá sản phẩm .</p>
                                    <p><b>Write Your Review</b></p>

                                    <form action="#">
                                        <span>
                                            <input type="text" placeholder="Họ và Tên" />
                                            <input type="email" placeholder="Địa chỉ Email" />
                                        </span>
                                        <textarea name="" placeholder="Góp ý kiến"></textarea>
                                        <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
                                        <button type="button" class="btn btn-default pull-right">
                                            Submit
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--/category-tab-->
                @endforeach
                <div class="recommended_items">
                    <!--sản phẩm liên quan cùng chung 1 danh mục!-->
                    <h2 class="title text-center">Sản Phẩm Liên quan</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                @foreach ($related as $key => $lienquan)
                                    <a href="{{ URL::to('Chi-tiet-sp/' . $lienquan->product_id) }}">

                                        <div class="col-sm-4 ">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center" style="height: 400px">
                                                        <img src="{{ URL::to('public/uploads/product/' . $lienquan->product_image) }}"
                                                            style="height: 250px">
                                                        <h4>{{ $lienquan->product_name }}</h4>
                                                        <h4 style="color: rgb(239, 3, 3)">Giá:
                                                            {{ number_format($lienquan->product_price) . ' ' . 'VNĐ' }}
                                                        </h4>
                                                        <p></p>
                                                        <button type="submit" class="btn btn-fefault cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            Xem thêm
                                                        </button>
                                                    </div>
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
        </div>
    </div>
</section>

<section id="form" style="margin-top: 50px">
    <div class="w2">
        <div class="w3" style="width: 550px">
            <h3>Đăng Nhập Vào Tài Khoản</h3>
            <?php
            $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
            if ($message) {
                /* nếu có tồn tại thì */
                echo '<span class="text-alert">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
            }
            ?>
            <form action="{{ URL::to('/login_client/') }}">
                {{ csrf_field() }}
                <input type="email" class="gggg" name="email_account" placeholder="Tài khoản" required="" />
                <input type="password" class="gggg" name="password_account" placeholder="Password"
                    required="" />
                <h6><a href="{{ URL::to('/register_checkout/') }}">Đăng ký tài khoản</a></h6>
                <h5><a href="#">Quên mật khẩu?</a></h5>
                <input type="submit" class="  btn w5 btn-warning" value="Đăng nhập" name="login"
                    style=" background: #ed7919;margin-top: 0%;margin-bottom: 10px;color: white;">



            </form>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 w4 btn btn-info">
                        <div class=""><a href="{{ URL('/login-client-facebook/') }}">
                                <i class="bi bi-facebook"></i> Login bằng facebook
                            </a></div>
                    </div>
                    <div class="col-sm-6 w4 btn btn-danger">

                        <div class=""><a href="{{ URL('/login-client-google/') }}"><i
                                    class="bi bi-google"></i> Login
                                bằng Google</div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>

<section id="form" style="margin-top: 50px">
    <div class="w2">
        <div class="w3" style="width: 550px">
            <h3>Đăng Ký Tài Khoản</h3>
            <?php
            $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
            if ($message) {
                /* nếu có tồn tại thì */
                echo '<span class="text-alert">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
            }
            ?>
            <form action="{{ URL::to('/add_client/') }}" method="POST">
                {{ csrf_field() }}
                <input type="name" class="gggg" name="client_name" placeholder="Họ và Tên"required="" />
                <input type="email"class="gggg" name="client_email" placeholder="email" required="" />
                <input type="sdt"class="gggg" name="client_sdt" placeholder="Số điện thoại"required="" />
                <input type="password"class="gggg" name="client_password" placeholder="Password"required="" />


                <input type="submit" class="  btn w5 btn-warning" value="Đăng Ký" name="login"
                    style=" background: #ed7919;margin-top: 20px;margin-bottom: 10px;color: white;">



            </form>



        </div>
    </div>
</section>



<header id="header">
    <!--header-->
    <div class="header_top">
        <!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-5">

                </div>
                <div class="col-sm-7">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <?php
                                $client_id = Session::get('client_id');
                                if($client_id!=NULL){
                                ?>
                            <li class="dropdown ">
                                <a data-toggle="dropdown" class="" href="">
                                    <img class="rounded-circle" ; width="7%"
                                        src="{{ Session::get('client_picture') }}">
                                    {{ Session::get('client_name') }}
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu extended logout " style="">
                                    <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                                    <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                                    <li><a href="{{ URL::to('/logout_checkout/') }}"><i class="fa fa-key"> Đăng
                                                xuất</i></a></li>
                                </ul>
                            </li>
                            <?php
                                    }else{
                                ?>
                            <li><a href="{{ URL::to('/login_checkout/') }}"><i class="bi bi-box-arrow-left">Đăng
                                        nhập</i></a></li>
                            <?php
                                }
                                ?></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



</header>



{{-- Giỏ hàng --}}
<section>
    <div class="container">
        <section id="cart_items">
            <div class="container col-sm-12">
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="{{ URL::to('/trang-chu/') }}">Home</a></li>
                        <li class="active">Shopping Cart</li>
                    </ol>
                </div>
                <div class="table-responsive cart_info">
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!--/#cart_items-->

        <section id="do_action">
            <div class="container col-sm-12">
                <div class="heading">
                    <h3>Tổng Tiền</h3>

                </div>
                <div class="row">

                    <div class="col-sm-12">
                        <div class="total_area ">
                            <ul>
                                <li>Tiền sản phẩm <span>{{ Cart::subtotal() . ' ' . 'VNĐ' }}</span></li>
                                <li>Phí vận chuyển<span>Free</span></li>
                                <li>Tổng thanh toán <span>{{ Cart::subtotal() . ' ' . 'VNĐ' }}</span></li>
                            </ul>
                            <div class="text-right">
                                <?php
                                $client_id = Session::get('client_id');
                                $shipping_id = Session::get('shipping_id');

                                if($client_id!=NULL && $shipping_id==NULL){
                            ?>
                                <a class="btn btn-default check_out " href="{{ URL::to('/show_checkout/') }}">Thanh
                                    Toán</a>{{-- phải đăng nhập mới được thanh toán --}}

                                <?php
                                }elseif ($client_id!=NULL && $shipping_id!=NULL) {
                            ?>
                                <a class="btn btn-default check_out " href="{{ URL::to('/payment/') }}">Thanh
                                    Toán</a>{{-- phải đăng nhập mới được thanh toán --}}

                                <?php
                                }else{
                            ?>
                                <a class="btn btn-default check_out " href="{{ URL::to('/login_checkout/') }}">Thanh
                                    Toán</a>{{-- phải đăng nhập mới được thanh toán --}}
                                <?php
                                }
                            ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/#do_action-->
    </div>
</section>


{{-- Mới --}}


<section class="container ">
    <div class="cart1">
        <div class="row">
            <div class="col-md-8 cart1">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h2><b>Giỏ Hàng</b></h2>
                        </div>
                        {{-- <div class="col align-self-center text-right text-muted">3 items</div> --}}
                    </div>
                </div>
                <?php
                
                $content = Cart::content(); // show nội dung của sách trong trang vỏ hàng
                // echo '<pre>';
                //     print_r($content);
                //     echo'</pre>';
                ?>
                <div class="row">
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
                <div class="row border-top border-bottom">
                    @foreach ($content as $v_content)
                        <div class="row main align-items-center">

                            <div class="col-2"><img class="img-fluid img1"
                                    src="{{ URL::to('public/uploads/product/' . $v_content->options->image) }}">
                            </div>
                            <div class="col">
                                <div class="row text-muted">{{ $v_content->name }}</div>
                                {{-- <div class="row"> Web ID: {{ $v_content->id }}</div> --}}
                            </div>
                            <div>{{ number_format($v_content->price) . ' ' . 'VNĐ' }}</div>
                            <div class="col">
                                <div class="cart_quantity_button ">
                                    <form action="{{ URL::to('/update_cart_quantity/') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input class="cart_quantity_input" type="text" name="cart_quantity"
                                            value="{{ $v_content->qty }}" size="1">
                                        <input type="hidden" name="rowId_cart" value="{{ $v_content->rowId }}"
                                            class="form-control">
                                        <input type="submit" value="cập nhật" name="update_qty"
                                            class="btn2 btn_default btn-sm" style="background-color: #000;">
                                    </form>
                                </div>
                            </div>
                            <div class="col">
                                <div class="cart_quantity_button"><?php
                                $subtotal = $v_content->price * $v_content->qty;
                                echo number_format($subtotal) . ' ' . 'VNĐ';
                                ?></div>
                            </div>
                            <div class=""><a class="cart_quantity_delete"
                                    href="{{ URL::to('/delete_to_cart/' . $v_content->rowId) }}"><i
                                        class="fa fa-times" style="font-size: 14px"></i></a></span>
                            </div>
                    @endforeach
                </div>


            </div>
        </div>

        <div class="back-to-shop"><a href="#">&leftarrow;<span class="text-muted">Trở về trang chủ</span></a>
        </div>
    </div>

    <div class="col-md-4 summary">
        <div>
            <h5><b>Tổng Chi Phí</b></h5>
        </div>
        <hr>
        <div class="row">
            <div class="col" style="padding-left:0;">Tổng số lượng 3</div>
            <div class="col text-right"> {{ Cart::subtotal() . ' ' . 'VNĐ' }}</div>
        </div>
        <form>
            <p>Phí vận chuyển</p>
            <select>
                <option class="text-muted">Vận chuyển thường: miễn phí</option>
                <option class="text-muted">Vận chuyển nhanh: 30.000VNĐ</option>


            </select>
            <p>Mã giảm giá</p>
            <input id="code" placeholder="Enter your code">
        </form>
        <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
            <h2>
                <div class="col">Tổng chi phí</div>
                <div class="col text-right">{{ Cart::subtotal() . ' ' . 'VNĐ' }}</div>
        </div>
        <div class="text-right">
            <?php
            $client_id = Session::get('client_id');
            $shipping_id = Session::get('shipping_id');

            if($client_id!=NULL && $shipping_id==NULL){
        ?>
            <a class="btn1" href="{{ URL::to('/show_checkout/') }}">Thanh
                Toán</a>{{-- phải đăng nhập mới được thanh toán --}}

            <?php
            }elseif ($client_id!=NULL && $shipping_id!=NULL) {
        ?>
            <a class="btn1" href="{{ URL::to('/payment/') }}">Thanh
                Toán</a>{{-- phải đăng nhập mới được thanh toán --}}

            <?php
            }else{
        ?>
            <a class="btn1" href="{{ URL::to('/login_checkout/') }}">Thanh
                Toán</a>{{-- phải đăng nhập mới được thanh toán --}}
            <?php
            }
        ?>
        </div>
    </div>
    </div>

    </div>
</section>



{{-- shipper --}}
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
        <div class="shopper-informations col-sm-12 ">
            <h1>Thanh Toán</h1>
            <div class="col-sm-4">

                <div class="clearfix ">
                    <div class="bill-to col-sm-12">
                        <h2 style="color: rgb(96, 92, 87); font-size:24px "> Địa chỉ giao hàng</h2>
                        <div class="form-one" style="width:100%">
                            <form action="{{ URL::to('/save_checkout_client') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="email" name="shipping_email" placeholder="Email*" required="">
                                <input type="text" name="shipping_name" placeholder="Họ và Tên *" required="">
                                <input type="text" name="shipping_address" placeholder="Địa chỉ  *"
                                    required="">
                                <input type="text" name="shipping_sdt" placeholder="Số điện thoại"
                                    required="">
                                <textarea name="shipping_note" placeholder="Ghi chú đơn hàng" rows="3" required=""></textarea>
                                <input type="submit" value="Gửi" name="send_order"
                                    class="btn btn-primary btn-sm">

                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class=" row col-sm-8">
                <h2 style="color: rgb(96, 92, 87); font-size:24px "><b>Xem lại giỏ hàng</b></h2>
                <div class="table-responsive cart_info">
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

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($content as $v_content)
                                <tr>
                                    <td class="cart_product">
                                        <a href="#"><img
                                                src="{{ URL::to('public/uploads/product/' . $v_content->options->image) }}"style=" width:100px; height=100px; "
                                                alt=""></a>
                                    </td>
                                    <td class="cart_description">
                                        <p class="cart_total_price" style="font-size: 18px">{{ $v_content->name }}
                                        </p>
                                        <p>Web ID: {{ $v_content->id }}</p>
                                    </td>
                                    <td class="cart_price">
                                        <p style="font-size: 20px;color:#787674;">
                                            {{ number_format($v_content->price) . ' ' . 'VNĐ' }}</p>
                                    </td>
                                    <td class="cart_quantity ">
                                        <p style="font-size: 20px;color:#787674;">{{ $v_content->qty }}</p>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price" style="font-size: 20px">

                                            <?php
                                            $subtotal = $v_content->price * $v_content->qty;
                                            echo number_format($subtotal) . ' ' . 'VNĐ';
                                            ?>
                                        </p>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="total_area ">
                            <ul>
                                <li>
                                    <h4>Tiền sản phẩm <span>{{ Cart::subtotal() . ' ' . 'VNĐ' }}</span></h4>
                                </li>
                                <li>
                                    <h4>Phí vận chuyển <span>Free</span></h4>
                                </li>
                                <li>
                                    <h4 style="font-size: 20px;color:#f66f00;">Tổng thanh toán
                                        <span>{{ Cart::subtotal() . ' ' . 'VNĐ' }}</span>
                                    </h4>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    </div>
</section>



{{-- thanh toán bằng --}}
<section id="cart_items">
    <div class="container ">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('/trang-chu/') }}">Home</a></li>
                <li class="active">Thanh Toán giỏ hàng</li>
            </ol>
        </div>
        <!--/breadcrums-->
        <!--/register-req-->
        <div class="col-sm-8">
            <div class=" row">
                <h2 style="color: rgb(96, 92, 87); font-size:24px "><b>Xem lại & Thanh toán</b></h2>
                <div class="table-responsive cart_info">
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

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($content as $v_content)
                                <tr>
                                    <td class="cart_product">
                                        <a href="#"><img
                                                src="{{ URL::to('public/uploads/product/' . $v_content->options->image) }}"style=" width:100px; height=100px; "
                                                alt=""></a>
                                    </td>
                                    <td class="cart_description">
                                        <p class="cart_total_price" style="font-size: 18px">{{ $v_content->name }}
                                        </p>
                                        <p>Web ID: {{ $v_content->id }}</p>
                                    </td>
                                    <td class="cart_price">
                                        <p style="font-size: 20px;color:#787674;">
                                            {{ number_format($v_content->price) . ' ' . 'VNĐ' }}</p>
                                    </td>
                                    <td class="cart_quantity ">
                                        <p style="font-size: 20px;color:#787674;">{{ $v_content->qty }}</p>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price" style="font-size: 20px">

                                            <?php
                                            $subtotal = $v_content->price * $v_content->qty;
                                            echo number_format($subtotal) . ' ' . 'VNĐ';
                                            ?>
                                        </p>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>


            </div>



        </div>
        <div class=" col-sm-4" style="margin-top: 10px">
            <h2 style="color: rgb(96, 92, 87); font-size:24px "><b>Tổng Tiền Cần Thanh Toán</b></h2>
            <table class="col-sm-12" style="font-size:24px ">
                <tbody>
                    <tr>
                        <td>Tiền sản phẩm</td>
                        <td class="pull-right">{{ Cart::subtotal() . ' ' . 'VNĐ' }}</td>
                    </tr>
                    <tr>
                        <td>Phí vận chuyển</td>
                        <td class="pull-right">
                            Free
                        </td>

                    </tr>
                    <tr style="color: rgb(255, 141, 1);font-weight:bolder ">
                        <td>Tổng</td>
                        <td class="pull-right">
                            {{ Cart::subtotal() . ' ' . 'VNĐ' }}
                        </td>

                    </tr>
                </tbody>
            </table>
            <form action="{{ URL::to('/order_place/') }}" method="POST">
                {{ csrf_field() }}
                <div class=" col-sm-12 "style="margin-top: 20px;  ">
                    <h2 style="color: rgb(96, 92, 87); font-size:24px "><b>Hình Thức Thanh Toán</b></h2>
                    <span>
                        <label><input name="payment_option" value="1" type="checkbox">Trả bằng ATM</label>
                    </span>
                    <br>
                    <span>
                        <label><input name="payment_option" value="2" type="checkbox">Thanh toán tiền
                            mặt</label>
                    </span>
                    <div style="margin-bottom: 50%  ">
                        <input type="submit" name="send_order_place"
                            class="btn btn-default check_out pull-right mb-6" value="Thanh toán ngay">

                    </div>

                </div>
            </form>


        </div>

    </div>
</section>





{{-- backrought của admin --}}
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> 
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{ asset('public/backend/css/style.css') }}" rel='stylesheet' type='text/css' />

    <link href="{{ asset('public/backend/css/style-responsive.css') }}" rel="stylesheet" />
    <!-- font CSS -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/font.css') }}" type="text/css" />
    <link href="{{ asset('public/backend/css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/backend/css/morris.css') }}" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/monthly.css') }}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{ asset('public/backend/js/jquery2.0.3.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/raphael-min.js') }}"></script>
    <script src="{{ asset('public/backend/js/morris.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="{{ asset('public/backend/ckeditor/ckeditor.js') }}"></script>



</head>


<body>

    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="#" class="logo">
                    ADMIN
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->

            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    {{-- <li>
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li> --}}
                    <!-- user login dropdown start-->
                    <li class="dropdown">



                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="{{ Session::get('admin_picture') }}">
                            {{ Session::get('admin_name') }}
                            {{-- <span class="username">

                                <?php
                                $name = Session::get('admin_name'); /* lấy messages bên AdminContrller chổ đăng  nhập */
                                if ($name) {
                                    /* nếu có tồn tại thì */
                                    echo $name; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                                }
                                ?>
                            </span> --}}
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">

                            <li><a href="{{ URL::to('/logout') }}"><i class="fa fa-key"></i> Đăng xuất</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="{{ URL::to('/dashboard') }}">
                                <i class="fa fa-dashboard"></i>
                                <span>Tổng quan</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Đơn hàng</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{ URL::to('/manage_order/') }}">Quản lý các đơn hàng</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Thể loại</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{ URL::to('/add-category-product/') }}">Thêm thể loại sách</a></li>
                                <li><a href="{{ URL::to('/all-category-product/') }}">Liệt kê thể loại sách</a></li>

                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Thương hiệu</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{ URL::to('/add-brand-product/') }}">Thêm thương hiệu sách</a></li>
                                <li><a href="{{ URL::to('/all-brand-product/') }}">Liệt kê các thương hiệu sách</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Sản phẩm</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{ URL::to('/add-product/') }}">Thêm sách</a></li>
                                <li><a href="{{ URL::to('/all-product/') }}">Liệt kê tất cả các sách</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">

                @yield('admin_content')
                {{-- nội dung --}}


            </section>
            <!-- footer -->
            {{-- <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		  </div> --}}
            <!-- / footer -->
        </section>
        <!--main content end-->
    </section>
    <script src="{{ asset('public/backend/js/bootstrap.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('public/backend/js/scripts.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.nicescroll.js') }}"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="{{ asset('public/backend/js/jquery.scrollTo.js') }}"></script>

    <!-- morris JavaScript -->

    {{-- <script>
        $(document).ready(function() {
            //BOX BUTTON SHOW AND CLOSE
            jQuery('.small-graph-box').hover(function() {
                jQuery(this).find('.box-button').fadeIn('fast');
            }, function() {
                jQuery(this).find('.box-button').fadeOut('fast');
            });
            jQuery('.small-graph-box .box-close').click(function() {
                jQuery(this).closest('.small-graph-box').fadeOut(200);
                return false;
            });

            //CHARTS
            function gd(year, day, month) {
                return new Date(year, month - 1, day).getTime();
            }

            graphArea2 = Morris.Area({
                element: 'hero-area',
                padding: 10,
                behaveLikeLine: true,
                gridEnabled: false,
                gridLineColor: '#dddddd',
                axes: true,
                resize: true,
                smooth: true,
                pointSize: 0,
                lineWidth: 0,
                fillOpacity: 0.85,
                data: [{
                        period: '2015 Q1',
                        iphone: 2668,
                        ipad: null,
                        itouch: 2649
                    },
                    {
                        period: '2015 Q2',
                        iphone: 15780,
                        ipad: 13799,
                        itouch: 12051
                    },
                    {
                        period: '2015 Q3',
                        iphone: 12920,
                        ipad: 10975,
                        itouch: 9910
                    },
                    {
                        period: '2015 Q4',
                        iphone: 8770,
                        ipad: 6600,
                        itouch: 6695
                    },
                    {
                        period: '2016 Q1',
                        iphone: 10820,
                        ipad: 10924,
                        itouch: 12300
                    },
                    {
                        period: '2016 Q2',
                        iphone: 9680,
                        ipad: 9010,
                        itouch: 7891
                    },
                    {
                        period: '2016 Q3',
                        iphone: 4830,
                        ipad: 3805,
                        itouch: 1598
                    },
                    {
                        period: '2016 Q4',
                        iphone: 15083,
                        ipad: 8977,
                        itouch: 5185
                    },
                    {
                        period: '2017 Q1',
                        iphone: 10697,
                        ipad: 4470,
                        itouch: 2038
                    },

                ],
                lineColors: ['#eb6f6f', '#926383', '#eb6f6f'],
                xkey: 'period',
                redraw: true,
                ykeys: ['iphone', 'ipad', 'itouch'],
                labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true
            });


        });
    </script> --}}
    <!-- calendar -->
    <script type="text/javascript" src="{{ asset('public/backend/js/monthly.js') }}"></script>
    {{-- <script type="text/javascript">
        $(window).load(function() {

            $('#mycalendar').monthly({
                mode: 'event',

            });

            $('#mycalendar2').monthly({
                mode: 'picker',
                target: '#mytarget',
                setWidth: '250px',
                startHidden: true,
                showTrigger: '#mytarget',
                stylePast: true,
                disablePast: true
            });

            switch (window.location.protocol) {
                case 'http:':
                case 'https:':
                    // running on a server, should be good.
                    break;
                case 'file:':
                    alert('Just a heads-up, events will not work when run locally.');
            }

        });
    </script> --}}
    <!-- //calendar -->




</body>

</html>







<style>
    #body-row {
        margin-left: 0;
        margin-right: 0;
    }

    #sidebar-container {
        min-height: 100vh;

        padding: 0;
    }

    /* Sidebar sizes when expanded and expanded */
    .sidebar-expanded {
        width: 300px;

    }

    .sidebar-collapsed {
        width: 60px;
    }

    /* Menu item*/
    #sidebar-container .list-group a {
        height: 50px;
        color: white;
    }


    #sidebar-container .list-group .sidebar-submenu a {
        height: 45px;
        padding-left: 30px;
    }

    .sidebar-submenu {
        font-size: 0.9rem;
    }


    .sidebar-separator-title {
        /* background-color: #333; */
        height: 35px;
    }

    .sidebar-separator {
        /*  background-color: #333; */
        height: 25px;
    }

    .logo-separator {
        /*  background-color: #333; */
        height: 60px;
    }

    /* Symbol für geschlossenes Untermenü */
    #sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
        content: " \f0d7";
        font-family: FontAwesome;
        display: inline;
        text-align: right;
        padding-left: 10px;
    }

    /* Geöffnetes Untermenüsymbol */
    #sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
        /* content: " \f0da"; */
        font-family: FontAwesome;
        display: inline;
        text-align: right;
        padding-left: 10px;
    }
</style>




{{-- thêm sp --}}
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm sách
            </header>
            <div class="panel-body">
                <?php
                $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
                if ($message) {
                    /* nếu có tồn tại thì */
                    echo '<span class="text-alert">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                    Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
                }
                ?>
                <div class="position-center">
                    <form role="form" action="{{ URL::to('/save-product') }}" method="post"
                        enctype="multipart/form-data">{{-- thường để gửi ảnh lên csdl thì phải có trường enctype="multipart/form-data" --}}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên sách</label>
                            <input type="text" class="form-control" name="product_name"
                                id="exampleInputPassword1" placeholder="Tên danh mục" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hình ảnh sách</label>
                            <input type="file" class="form-control" name="product_image"
                                id="exampleInputPassword1" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Giá sách</label>
                            <input type="text" class="form-control" name="product_price"
                                id="exampleInputPassword1" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sách</label>
                            <textarea style="resize:none" rows="5" class="form-control" name="product_desc" placeholder="Mô tả sách"
                                required=""></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội dung sách</label>
                            <textarea style="resize:none" rows="10" class="form-control" name="product_content"
                                placeholder="Nội dung sách" required="">  </textarea>
                        </div>
                        {{-- <script>
                            CKEDITOR.replace('ckeditor1'); đặt id của mô tả sách là ckeditor1
                            CKEDITOR.replace('ckeditor2'); đặt id của nọi dung sp là ckeditor2
                        </script> --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Thể loại</label>
                            <select class="form-control input-sm m-bot15" name="product_cate">
                                @foreach ($cate_product as $key => $cate)
                                    <option value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Thương hiệu</label>
                            <select class="form-control input-sm m-bot15" name="product_brand">
                                @foreach ($brand_product as $key => $brand)
                                    <option value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select class="form-control input-sm m-bot15" name="product_status">
                                <option value="1">Ẩn</option>
                                <option value="0">Hiện</option>

                            </select>
                        </div>

                        <button type="submit" name=" add_brand_product"class="btn btn-info">Thêm sách</button>

                    </form>
                </div>

            </div>
        </section>

    </div>



</div>



{{-- thêm sách đã sữa --}}
<div class="mt-2 p-5 ">
    <h5 class="text-muted my-2">Thêm Sản Phẩm</h5>
    <?php
    $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
    if ($message) {
        /* nếu có tồn tại thì */
        echo '<span class="text-alert">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
        Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
    }
    ?>
    <div class="fullDivider"></div>

    <div class="m-md-4 card card-body addBookCard">
        <form role="form" action="{{ URL::to('/save-product') }}" method="post"
            enctype="multipart/form-data">
            {{-- thường để gửi ảnh lên csdl thì phải có trường enctype="multipart/form-data" --}}
            {{ csrf_field() }}
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <small class=" text-small text-muted ">Tên sách </small>
                    <div class="form-outline">
                        <input type="text" class="form-control" name="product_name"
                            id="exampleInputPassword1" placeholder="Tên danh mục" required="">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <small class=" text-small text-muted ">Giá sách</small>
                    <div class="form-outline">
                        <input type="text" class="form-control" name="product_price"
                            id="exampleInputPassword1" required="">
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <small class=" text-small text-muted ">Mô tả sách </small>
                    <div class="form-outline">
                        <textarea style="resize:none" rows="5" class="form-control" name="product_desc" placeholder="Mô tả sách"
                            required=""></textarea>
                        <div class="invalid-feedback">
                        </div>

                    </div>
                </div>
                <div class="col">
                    <small class=" text-small text-muted ">Nội dung sách</small>
                    <div class="form-outline">
                        <textarea style="resize:none" rows="5" class="form-control" name="product_content"
                            placeholder="Nội dung sách" required="">  </textarea>
                        <div class="invalid-feedback"></div>

                    </div>
                </div>
            </div>
            <!-- Text input -->


            <!-- bookType and language  -->
            <div class="row mb-4">
                <div class="col">
                    <small class=" text-small text-muted ">Thể loại</small>
                    <div class="form-outline">
                        <select class="form-control input-sm m-bot15" name="product_cate">
                            @foreach ($cate_product as $key => $cate)
                                <option value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <small class=" text-small text-muted ">Thương hiệu</small>
                    <div class="form-outline">
                        <select class="form-control input-sm m-bot15" name="product_brand">
                            @foreach ($brand_product as $key => $brand)
                                <option value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">

                <small class="text-small">Hình ảnh sách</small>
                <input type="file" class="form-control"name="product_image" id="exampleInputPassword1"
                    required="">
            </div>
            <div class="form-outline mb-4">

                <small class="text-small">Hiển thị</small>
                <select class="form-control input-sm m-bot15" name="product_status">
                    <option value="1">Ẩn</option>
                    <option value="0">Hiện</option>

                </select>
            </div>

            <!-- Message input -->
            {{-- <div class="form-outline mb-4">
                <small class="text-small">Ghi chú</small>
                <textarea name="bookDescription" class="form-control" id="form6Example7" rows="4"></textarea>
                <div class="invalid-feedback"></div>



            </div> --}}

            <!-- Submit button -->
            <button type="submit" name=" add_brand_product"class="btn btn-info">Thêm sách</button>
            <button type="submit" class="btn btn-primary btn-block mb-4" name=" add_brand_product">Thêm
                sách</button>
        </form>

    </div>
</div>


{{-- cap nhat sp --}}
@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật sách
                </header>
                <div class="panel-body">
                    <?php
                    $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
                    if ($message) {
                        /* nếu có tồn tại thì */
                        echo '<span class="text-alert" style="color: rgb(249, 1, 1); font-weight: 200px">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                        Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
                    }
                    ?>
                    @foreach ($edit_product as $key => $pro)
                        <div class="position-center">
                            <form role="form" action="{{ URL::to('/update-product/' . $pro->product_id) }}"
                                method="post" enctype="multipart/form-data">{{-- thường để gửi ảnh lên csdl thì phải có trường enctype="multipart/form-data" --}}
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tên sách</label>
                                    <input type="text" class="form-control" name="product_name"
                                        id="exampleInputPassword1" value="{{ $pro->product_name }}"
                                        placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hình ảnh sách</label>
                                    <input type="file" class="form-control" name="product_image"
                                        id="exampleInputPassword1">
                                    <img src="{{ URL::to('public/uploads/product/' . $pro->product_image) }}"
                                        height="50" width="50">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giá sách</label>
                                    <input type="text" class="form-control" name="product_price"
                                        id="exampleInputPassword1" value="{{ $pro->product_price }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả sách</label>
                                    <textarea style="resize:none" rows="5" class="form-control" name="product_desc"
                                        placeholder="Mô tả sách">{{ $pro->product_desc }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung sách</label>
                                    <textarea style="resize:none" rows="5" class="form-control" name="product_content"
                                        placeholder="Nội dung sách">{{ $pro->product_content }}</textarea>
                                </div>
                                {{-- <script>
                                CKEDITOR.replace('ckeditor1'); đặt id của mô tả sách là ckeditor1
                                CKEDITOR.replace('ckeditor2'); đặt id của nọi dung sp là ckeditor2
                            </script> --}}
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục</label>
                                    <select class="form-control input-sm m-bot15" name="product_cate">
                                        @foreach ($cate_product as $key => $cate)
                                            @if ($cate->category_id == $pro->category_id)
                                                {{-- nếu hk có dòng if này thì vẫn cập nhật thành công nhưng cập nhật lại thì sẽ hk lưu nhưng j đã cập nhật lần 2 --}}
                                                <option selected value="{{ $cate->category_id }}">
                                                    {{ $cate->category_name }}
                                                </option>
                                            @else
                                                <option value="{{ $cate->category_id }}">
                                                    {{ $cate->category_name }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Thương hiệu</label>
                                    <select class="form-control input-sm m-bot15" name="product_brand">

                                        @foreach ($brand_product as $key => $brand)
                                            @if ($brand->brand_id == $pro->brand_id)
                                                {{-- nếu hk có dòng if này thì vẫn cập nhật thành công nhưng cập nhật lại thì sẽ hk lưu nhưng j đã cập nhật lần 2 --}}
                                                <option selected value="{{ $brand->brand_id }}">
                                                    {{ $brand->brand_name }}</option>>
                                            @else
                                                <option value="{{ $brand->brand_id }}">{{ $brand->brand_name }}
                                                </option>
                                            @endif
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                    <select class="form-control input-sm m-bot15" name="product_status">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiện</option>

                                    </select>
                                </div>

                                <button type="submit" name=" add_brand_product"class="btn btn-info">cập nhật sản
                                    phẩm</button>

                            </form>
                        </div>
                    @endforeach
                </div>
            </section>

        </div>



    </div>
    </div>
@endsection


{{-- Liệt kê sản sách --}}

<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Liệt kê sách
        </div>
        <div class="row w3-res-tb">


            <div class="col-sm-5 pull-right">
                <form action="{{ URL::to('/search_product_admin/') }}">
                    {{ csrf_field() }}
                    <div class="search_box pull-right" style=" width:100%">
                        <input type="text" name="keywords_submit" placeholder="Search"
                            style=" width:50%; color:rgb(0, 0, 0)" />
                        <button type="submit" class="btn "
                            style="margin-top:1; color:#FFF ; font-size:16px; background:rgb(255, 129, 50)"
                            name="search-items">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>


        <body>
            <div class="table-responsive">
                <?php
                $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
                if ($message) {
                    /* nếu có tồn tại thì */
                    echo '<span class="text-alert" style="color: rgb(249, 1, 1); font-weight: 200px">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                    Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
                }
                ?>
                <table class="table table-striped b-t b-light  " style="margin-top: 30px">

                    <thead>
                        <tr>
                            {{-- <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th> --}}
                            <th>STT</th>
                            <th>Tên sách</th>
                            <th>Giá</th>
                            <th>Hình ảnh</th>
                            <th>Thể Loại</th>
                            <th>Thương hiệu</th>
                            <th>Hiển thị</th>


                            <th style="width:40px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($all_product as $key => $pro)
                            @php
                                $i++;
                            @endphp
                            <tr>

                                <td>{{ $i }}</td>
                                <td>{{ $pro->product_name }}</td>
                                <td>{{ $pro->product_price }}</td>
                                <td><img src="public/uploads/product/{{ $pro->product_image }}" height="50"
                                        width="50"></td>
                                <td>{{ $pro->brand_name }}</td>
                                <td>{{ $pro->category_name }}</td>
                                <td><span class="text-ellipsis">
                                        <?php
                                if ($pro->product_status == 0) {
                                ?>
                                        <a href="{{ URL::to('/unactive-product/' . $pro->product_id) }}"><span><i
                                                    class="bi bi-eye-fill"></i></span></a>
                                        <?php
                                } else {
                                ?>
                                        <a href="{{ URL::to('/active-product/' . $pro->product_id) }}"><span><i
                                                    class="bi bi-eye-slash-fill"></i></span></a>
                                        <?php
                                }
                                ?>
                                    </span></td>
                                <td><span class="text-ellipsis"></span></td>
                                <td>
                                    <a href="{{ URL::to('/edit-product/' . $pro->product_id) }}" class="active"
                                        ui-toggle-class="">
                                        <i class="bi bi-pen-fill text-success text-active"></i></a>
                                    <a onclick="return confirm('Bạn có chắc muốn xóa danh mục này không?')"
                                        href="{{ URL::to('/delete-product/' . $pro->product_id) }}" class="active"
                                        ui-toggle-class="">
                                        <i class="bi bi-trash-fill text-danger text"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-5 text-center">
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        {{ $all_product->render() }}
                    </div>
                </div>
            </footer>
    </div>
</div>



{{-- home_main --}}
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
                                    <img src="{{ URL::to('public/frontend/images/td1.jpg') }}"
                                        class="girl img-responsive" alt="" />
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
                                    <img src="{{ URL::to('public/frontend/images/td2.jpg') }}"
                                        class="girl img-responsive" alt="" />
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
                                    <img src="{{ URL::to('public/frontend/images/td3.jpg') }}"
                                        class="girl img-responsive" alt="" />
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
                                            <p class="text-success text-size-20"><b>Giá:
                                                    {{ number_format($product->product_price) . ' ' . 'VNĐ' }}</b>
                                                <br> <small class="text-danger mx-2"><del
                                                        th:text="${book.bookPrice}">Giá
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



{{-- manage-_order --}}
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Quản lí đơn hàng
        </div>

        <div class="table-responsive">
            <?php
            $message = Session::get('message');
            if ($message) {
                /* nếu có tồn tại thì */
                echo '<span class="text-alert" style="color: rgb(249, 1, 1); font-weight: 200px">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                Session::put('message', null);
            }
            ?>
            <table class="table table-striped b-t b-light">

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
                                <a href="{{ URL::to('/view_order/' . $order->order_id) }}" class="active"
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
        </div>

    </div>
</div>


{{-- trang lieejt kee ddonw hangf admin --}}
@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info col-sm-12">
        <div class="panel panel-default col-sm-6">
            <div class="panel-heading">
                Thông tin khách hàng
            </div>
            <div class="table-responsive">
                <?php
                $message = Session::get('message');
                if ($message) {
                    /* nếu có tồn tại thì */
                    echo '<span class="text-alert" style="color: brown">', $message, '</span>';
                    Session::put('message', null);
                }
                ?>

                <table class="table table-striped b-t b-light">

                    <thead>
                        <tr>
                            <th>Tên khách hàng</th>
                            <th>Số điện thoại</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            {{-- <td> {{ Session::get('client_name') }}</td>
                            <td> {{ Session::get('client_email') }}</td> --}}

                            <td>{{ $order_by_id->client_name }}</td>
                            <td>{{ $order_by_id->client_email }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="panel panel-default col-sm-6">
            <div class="panel-heading">
                Thông tin vận chuyển
            </div>
            <div class="table-responsive">
                <?php
                $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
                if ($message) {
                    /* nếu có tồn tại thì */
                    echo '<span class="text-alert">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                    Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
                }
                ?>

                <table class="table table-striped b-t b-light">

                    <thead>
                        <tr>
                            <th>Tên người nhận hàng</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>{{ $order_by_id->shipping_name }}</td>
                            <td>{{ $order_by_id->shipping_address }}</td>
                            <td>{{ $order_by_id->shipping_sdt }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="panel panel-default col-sm-12">
            <div class="panel-heading">
                Chi Tiết đơn hàng
            </div>

            <div class="table-responsive">

                <?php
                $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
                if ($message) {
                    /* nếu có tồn tại thì */
                    echo '<span class="text-alert">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                    Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
                }
                ?>

                <table class="table table-striped b-t b-light">

                    <thead>
                        <tr>
                            <th>Tên sách</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Tổng tiền</th>



                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            {{-- @foreach ($order_details as $key => $details)
                            
                            <td>{{ $details->product_name }}</td>
                            <td>{{ $details->product_sales_quantity }}</td>
                            <td>{{number_format($details->product_price).' '.'VNĐ'}}</td>
                            <td>{{ ($details->order_total).' '.'VNĐ' }}</td>

                             @endforeach --}}


                            <td>{{ $order_by_id->product_name }}</td>
                            <td>{{ $order_by_id->product_sales_quantity }}</td>
                            <td>{{ number_format($order_by_id->product_price) . ' ' . 'VNĐ' }}</td>
                            <td>{{ $order_by_id->order_total . ' ' . 'VNĐ' }}</td>


                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-sm-5 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    </div>
@endsection
{{-- trang đăng nhập admin --}}

<body>
    <div class="">
        <div class="w3layouts-main" style="width: 550px">
            <h2 style="color: #ed7919">Đăng Nhập Admin</h2>
            <?php
            $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
            if ($message) {
                /* nếu có tồn tại thì */
                echo '<span class="text-alert tb" style="color: red;width: auto; font-size:20px">', $message, '</span >'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
            }
            ?>
            <form action="{{ URL::to('/admin-dashboard') }}" method="post">
                {{ csrf_field() }}
                <input style="font-size: 20px" type="text" class="ggg" name="admin_email"
                    placeholder="Điền Email vào" required="">
                <input style="font-size: 20px" type="password" class="ggg" name="admin_password"
                    placeholder="Mật khẩu" required="">

                <h6><a href="#">Quên mật khẩu?</a></h6>

                <input type="submit" class="  btn btn-warning" value="Đăng nhập" name="login"
                    style=" background: #ed7919;
                color: white;">
                {{-- <div class="container">
                    <div class="row">
                        <div class="col-sm-6  btn btn-info" style="height: 50px; font-size:20px">
                            <div class=""><a href="{{ URL('/login-facebook/') }}">
                                    <i class="bi bi-facebook"></i> Login bằng facebook
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6  btn btn-danger" style="height: 50px; font-size:20px">

                            <div class=""><a href="{{ URL('/login-google/') }}"><i class="bi bi-google"></i> Login
                                    bằng Google </a>
                            </div>
                        </div>
                    </div>
                </div> --}}


            </form>
            <style>
                html,
                body {
                    font-family: 'Roboto', sans-serif;
                    font-size: 100%;
                    overflow-x: hidden;
                    background-image: linear-gradient(-60deg, rgb(248, 217, 79), #ffff, rgb(237, 154, 91));
                    bottom: 0;
                    left: -50%;
                    /* opacity: .5; */
                    position: fixed;
                    right: -50%;
                    top: 0;
                    z-index: -1;
                    /* background: url(../images/bg.jpg) no-repeat 0px 0px; */
                    background-size: cover;
                }
            </style>
        </div>
    </div>
    <script src="{{ asset('public/bakend/js/bootstrap.js') }}"></script>
    <script src="{{ asset('public/bakend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('public/bakend/js/scripts.js') }}"></script>
    <script src="{{ asset('public/bakend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('public/bakend/js/jquery.nicescroll.js') }}"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js')}}"></script><![endif]-->
    <script src="{{ asset('public/bakend/js/jquery.scrollTo.js') }}"></script>
</body>



{{-- admin đơn hàng --}}
@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê đơn hàng
            </div>
            <div class="row w3-res-tb">



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

                            <th>Thứ tự</th>
                            <th>Mã đơn hàng</th>
                            <th>Ngày tháng đặt hàng</th>
                            <th>Tình trạng đơn hàng</th>

                            <th style="width:30px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($order as $key => $ord)
                            @php
                                $i++;
                            @endphp
                            <tr>
                                <td><i>{{ $i }}</i></label></td>
                                <td>{{ $ord->order_code }}</td>
                                <td>{{ $ord->created_at }}</td>
                                <td>
                                    @if ($ord->order_status == 1)
                                        Đơn hàng mới
                                    @else
                                        Đã xử lý
                                    @endif
                                </td>


                                <td>
                                    <a href="{{ URL::to('/view-order/' . $ord->order_code) }}"
                                        class="active styling-edit" ui-toggle-class="">
                                        <i class="fa fa-eye text-success text-active"></i></a>



                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection


{{-- admin chi tiet don hang --}}
@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">

        <div class="panel panel-default">
            <div class="panel-heading">
                Thông tin đăng nhập
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

                            <th>Tên khách hàng</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>

                            <th style="width:30px;"></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>{{ $client->client_name }}</td>
                            <td>{{ $client->client_phone }}</td>
                            <td>{{ $client->client_email }}</td>
                        </tr>

                    </tbody>
                </table>

            </div>

        </div>
    </div>
    <br>
    <div class="table-agile-info">

        <div class="panel panel-default">
            <div class="panel-heading">
                Thông tin vận chuyển hàng
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

                            <th>Tên người vận chuyển</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Ghi chú</th>
                            <th>Hình thức thanh toán</th>


                            <th style="width:30px;"></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>


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


                        </tr>

                    </tbody>
                </table>

            </div>

        </div>
    </div>
    <br><br>
    <div class="table-agile-info">

        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê chi tiết đơn hàng
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
                            <th style="width:20px;">
                                <label class="i-checks m-b-none">
                                    <input type="checkbox"><i></i>
                                </label>
                            </th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng kho còn</th>
                            {{-- <th>Mã giảm giá</th> --}}
                            {{-- <th>Phí ship hàng</th> --}}
                            <th>Số lượng</th>
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

                                    <input type="number" min="1" {{ $order_status == 2 ? 'disabled' : '' }}
                                        class="order_qty_{{ $details->product_id }}"
                                        value="{{ $details->product_sales_quantity }}" name="product_sales_quantity">

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
                                    @endif

                                </td>
                                <td>{{ number_format($details->product_price, 0, ',', '.') }}đ</td>
                                <td>{{ number_format($subtotal, 0, ',', '.') }}đ</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="6">



                                Thanh toán: {{ number_format($total, 0, ',', '.') }}đ
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
                                                <option value="">----Chọn hình thức đơn hàng-----</option>
                                                <option id="{{ $or->order_id }}" selected value="1">Chưa xử lý
                                                </option>
                                                <option id="{{ $or->order_id }}" value="2">Đã xử lý-Đã giao hàng
                                                </option>
                                                <option id="{{ $or->order_id }}" value="3">Hủy đơn hàng-tạm giữ
                                                </option>
                                            </select>
                                        </form>
                                    @elseif($or->order_status == 2)
                                        <form>
                                            @csrf
                                            <select class="form-control order_details">{{-- class teen order_details là để điều khiển alert thông báo --}}
                                                <option value="">----Chọn hình thức đơn hàng-----</option>
                                                <option id="{{ $or->order_id }}" value="1">Chưa xử lý</option>
                                                <option id="{{ $or->order_id }}" selected value="2">Đã xử lý-Đã
                                                    giao
                                                    hàng</option>
                                                <option id="{{ $or->order_id }}" value="3">Hủy đơn hàng-tạm giữ
                                                </option>
                                            </select>
                                        </form>
                                    @else
                                        <form>
                                            @csrf
                                            <select class="form-control order_details">
                                                <option value="">----Chọn hình thức đơn hàng-----</option>
                                                <option id="{{ $or->order_id }}" value="1">Chưa xử lý</option>
                                                <option id="{{ $or->order_id }}" value="2">Đã xử lý-Đã giao hàng
                                                </option>
                                                <option id="{{ $or->order_id }}" selected value="3">Hủy đơn
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
@endsection


{{-- thêm brand --}}
@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm các thương hiệu sách
                </header>
                <div class="panel-body">
                    <?php
                    $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
                    if ($message) {
                        /* nếu có tồn tại thì */
                        echo '<span class="text-alert" style="color: brown">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                        Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
                    }
                    ?>
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/save-brand-product') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tên thương hiệu</label>
                                <input type="text" class="form-control" name="brand_product_name"
                                    id="exampleInputPassword1" placeholder="Tên thương hiệu" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                                <textarea style="resize:none" rows="5" class="form-control" name="brand_product_desc"
                                    id="exampleInputPassword1" placeholder="Mô tả thương hiệu" required=""></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị</label>
                                <select class="form-control input-sm m-bot15" name="brand_product_status">
                                    <option value="1">Ẩn</option>
                                    <option value="0">Hiện</option>

                                </select>
                            </div>

                            <button type="submit" name=" add_brand_product"class="btn btn-info">Thêm thể loại</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>



    </div>
    </div>
@endsection
{{-- cập nhật brand --}}
@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật thương hiệu sách
                </header>
                <div class="panel-body">
                    <?php
                    $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
                    if ($message) {
                        /* nếu có tồn tại thì */
                        echo '<span class="text-alert" style="color: rgb(249, 1, 1); font-weight: 200px">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                        Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
                    }
                    ?>
                    @foreach ($edit_brand_product as $key => $edit_value)
                        <div class="position-center">
                            <form role="form"
                                action="{{ URL::to('/update-brand-product/' . $edit_value->brand_id) }}"
                                method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tên danh mục</label>
                                    <input type="text" value="{{ $edit_value->brand_name }}" class="form-control"
                                        name="brand_product_name" id="exampleInputPassword1"
                                        placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <textarea style="resize:none" rows="5" class="form-control" name="brand_product_desc"
                                        id="exampleInputPassword1"> {{ $edit_value->brand_desc }}</textarea>
                                </div>
                                <button type="submit" name="update_brand_product" class="btn btn-info">Cập nhật
                                    ngay</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
    </div>
@endsection



{{-- liệt kê brand --}}
@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê các thương hiệu sách
            </div>
            {{-- <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                    <select class="input-sm form-control w-sm inline v-middle">
                        <option value="0">Bulk action</option>
                        <option value="1">Delete selected</option>
                        <option value="2">Bulk edit</option>
                        <option value="3">Export</option>
                    </select>
                    <button class="btn btn-sm btn-default">Apply</button>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-sm btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div> --}}
            <div class="table-responsive">
                <?php
                $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
                if ($message) {
                    /* nếu có tồn tại thì */
                    echo '<span class="text-alert" style="color: rgb(249, 1, 1); font-weight: 200px">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                    Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
                }
                ?>
                <table class="table table-striped b-t b-light">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên thương hiệu</th>
                            <th>Hiển thị</th>

                            <th style="width:30px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($all_brand_product as $key => $cate_pro)
                            <tr>
                                <td>{{ $cate_pro->brand_id }}</td>
                                <td>{{ $cate_pro->brand_name }}</td>
                                <td><span class="text-ellipsis">
                                        <?php
                                    if ($cate_pro->brand_status == 0) {
                                    ?>
                                        <a href="{{ URL::to('/unactive-brand-product/' . $cate_pro->brand_id) }}"><span><i
                                                    class="bi bi-eye-fill"></i></span></a>
                                        <?php
                                    } else {
                                    ?>
                                        <a href="{{ URL::to('/active-brand-product/' . $cate_pro->brand_id) }}"><span><i
                                                    class="bi bi-eye-slash-fill"></i></span></a>
                                        <?php
                                    }
                                    ?>
                                    </span></td>
                                <td><span class="text-ellipsis"></span></td>
                                <td>
                                    <a href="{{ URL::to('/edit-brand-product/' . $cate_pro->brand_id) }}"
                                        class="active" ui-toggle-class="">
                                        <i class="bi bi-pen-fill text-success text-active"></i></a>
                                    <a onclick="return confirm('Bạn có chắc muốn xóa thương hiệu này không?')"
                                        href="{{ URL::to('/delete-brand-product/' . $cate_pro->brand_id) }}"
                                        class="active" ui-toggle-class="">
                                        <i class="bi bi-trash-fill text-danger text"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-5 text-center">
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        {{ $all_brand_product->render() }}
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
{{-- add thể loại --}}
@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm thể loại sách
                </header>
                <div class="panel-body">
                    <?php
                    $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
                    if ($message) {
                        /* nếu có tồn tại thì */
                        echo '<span class="text-alert">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                        Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
                    }
                    ?>
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/save-category-product') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tên thể loại</label>
                                <input type="text" class="form-control" name="category_product_name"
                                    id="exampleInputPassword1" placeholder="Tên thể loại" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả thể loại</label>
                                <textarea style="resize:none" rows="5" class="form-control" name="category_product_desc"
                                    id="exampleInputPassword1" placeholder="Mô tả thể loại" required=""></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị</label>
                                <select class="form-control input-sm m-bot15" name="category_product_status">
                                    <option value="1">Ẩn</option>
                                    <option value="0">Hiện</option>

                                </select>
                            </div>

                            <button type="submit" name=" add_category_product"class="btn btn-info">Thêm thể
                                loại</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>{{-- Liệt kê thẻ loại --}}
        @extends('admin_layout')
    @section('admin_content')
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Liệt kê thể loại sách
                </div>

                <div class="table-responsive">
                    <?php
                    $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
                    if ($message) {
                        /* nếu có tồn tại thì */
                        echo '<span class="text-alert" style="color: rgb(249, 1, 1); font-weight: 200px">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                        Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
                    }
                    ?>
                    <table class="table table-striped b-t b-light">

                        <thead>
                            <tr>
                                {{-- <th style="width:20px;">
                                <label class="i-checks m-b-none">
                                    <input type="checkbox"><i></i>
                                </label>
                            </th> --}}
                                <th>STT</th>
                                <th>Tên danh mục</th>
                                <th>Hiển thị</th>

                                <th style="width:30px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_category_product as $key => $cate_pro)
                                <tr>
                                    {{-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>
                                </td> --}}
                                    <td>{{ $cate_pro->category_id }} </td>
                                    <td>{{ $cate_pro->category_name }}</td>
                                    <td><span class="text-ellipsis">
                                            <?php
                                    if ($cate_pro->category_status == 0) {
                                    ?>
                                            <a
                                                href="{{ URL::to('/unactive-category-product/' . $cate_pro->category_id) }}"><span><i
                                                        class="bi bi-eye-fill"></i></span></a>
                                            <?php
                                    } else {
                                    ?>
                                            <a
                                                href="{{ URL::to('/active-category-product/' . $cate_pro->category_id) }}"><span><i
                                                        class="bi bi-eye-slash-fill"></i></span></a>
                                            <?php
                                    }
                                    ?>
                                        </span></td>
                                    <td><span class="text-ellipsis"></span></td>
                                    <td>
                                        <a href="{{ URL::to('/edit-category-product/' . $cate_pro->category_id) }}"
                                            class="active" ui-toggle-class="">
                                            <i class="bi bi-pen-fill text-success text-active"></i></a>
                                        <a onclick="return confirm('Bạn có chắc muốn xóa danh mục này không?')"
                                            href="{{ URL::to('/delete-category-product/' . $cate_pro->category_id) }}"
                                            class="active" ui-toggle-class="">
                                            <i class="bi bi-trash-fill text-danger text"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-5 text-center">
                        </div>
                        <div class="col-sm-7 text-right text-center-xs">
                            {{ $all_category_product->render() }}
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    @endsection
    {{-- cập nhật thể loại --}}
    @extends('admin_layout')
    @section('admin_content')
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Cập nhật thể loại sách
                    </header>
                    <div class="panel-body">
                        <?php
                        $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
                        if ($message) {
                            /* nếu có tồn tại thì */
                            echo '<span class="text-alert" style="color: rgb(249, 1, 1); font-weight: 200px">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                            Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
                        }
                        ?>
                        @foreach ($edit_category_product as $key => $edit_value)
                            <div class="position-center">
                                <form role="form"
                                    action="{{ URL::to('/update-category-product/' . $edit_value->category_id) }}"
                                    method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tên danh mục</label>
                                        <input type="text" value="{{ $edit_value->category_name }}"
                                            class="form-control" name="category_product_name"
                                            id="exampleInputPassword1" placeholder="Tên danh mục">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mô tả danh mục</label>
                                        <textarea style="resize:none" rows="5" class="form-control" name="category_product_desc"
                                            id="exampleInputPassword1"> {{ $edit_value->category_desc }}</textarea>
                                    </div>
                                    <button type="submit" name="update_category_product" class="btn btn-info">Cập
                                        nhật
                                        ngay</button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

{{-- Chi Tiet Sp --}}
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
                        <input type="hidden" value="{{ $value->product_quantity }}"
                            class="cart_product_quantity_{{ $value->product_id }}">
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


                </div>

            </div>

        </div>
    </div><!--/recommended_items-->
@endsection

<form action="{{ URL::to('/save-cart') }}" method="POST">
    @csrf
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
        <button type="submit" class="btn rounded-btn btn-outline-success add-to-cart"
            data-id_product="{{ $detail->product_id }}"><b>Thêm vào giỏ hàng <i
                    class="fa fa-shopping-cart"></i></b></button>
        <button class="btn rounded-btn btn-outline-danger ">Thêm vào trang yêu thích <i
                class=" ml-2 text-danger fa fa-heart"></i></button>
    </div>
</form>
{{-- Giỏ hàng bằng ajax --}}
@extends('layout')
@section('content')
    <br><br><br><br><br><br><br><br>
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{ URL::to('/') }}">Trang chủ</a></li>
                    <li class="active">Giỏ hàng của bạn</li>
                </ol>
            </div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {!! session()->get('message') !!}
                </div>
            @elseif(session()->has('error'))
                <div class="alert alert-danger">
                    {!! session()->get('error') !!} {{--      {{ session()->get('error') }} 2 dấu ngoặc nhọn thì sẽ không hiểu đc các thẻ của html     --}}
                </div>
            @endif
            <div class="table-responsive cart_info">

                <form action="{{ url('/update-cart') }}" method="POST">
                    @csrf
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">Hình ảnh</td>
                                <td class="description">Tên sản phẩm</td>
                                <td class="description">Số lượng tồn</td>
                                <td class="price">Giá sản phẩm</td>

                                <td class="quantity">Số lượng</td>
                                <td class="total">Thành tiền</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @if (Session::get('cart') == true)
                                @php
                                    $total = 0;
                                @endphp
                                @foreach (Session::get('cart') as $key => $cart)
                                    @php
                                        $subtotal = $cart['product_price'] * $cart['product_qty'];
                                        $total += $subtotal;
                                    @endphp

                                    <tr>
                                        <td class="cart_product">
                                            <img src="{{ asset('public/uploads/product/' . $cart['product_image']) }}"
                                                width="90" alt="{{ $cart['product_name'] }}" />
                                        </td>
                                        <td class="cart_description">
                                            <h4><a href=""></a></h4>
                                            <p>{{ $cart['product_name'] }}</p>
                                        </td>
                                        <td class="cart_description">
                                            <h4><a href=""></a></h4>
                                            <p>{{ $cart['product_quantity'] }}</p>
                                        </td>
                                        <td class="cart_price">
                                            <p>{{ number_format($cart['product_price'], 0, ',', '.') }}đ</p>
                                        </td>

                                        <td class="cart_quantity">
                                            <div class="cart_quantity_button">


                                                <input class="cart_quantity" type="number" min="1"
                                                    name="cart_qty[{{ $cart['session_id'] }}]"
                                                    value="{{ $cart['product_qty'] }}">

                                                <input type="submit" value="cập nhật" name="update_qty"
                                                    class="btn2 btn_default btn-sm" style="background-color: #000;">


                                            </div>
                                        </td>
                                        <td class="cart_total">
                                            <p class="cart_total_price">
                                                {{ number_format($subtotal, 0, ',', '.') }}đ
                                            </p>
                                        </td>
                                        <td class="cart_delete">
                                            <a class="cart_quantity_delete"
                                                href="{{ url('/del-product/' . $cart['session_id']) }}"><i
                                                    class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td><input type="submit" value="Cập nhật giỏ hàng" name="update_qty"
                                            class="check_out btn btn-default btn-sm"></td>
                                    <td><a class="btn btn-default check_out" href="{{ url('/del-all-product') }}">Xóa
                                            tất
                                            cả</a></td>
                                    <td>
                                        @if (Session::get('coupon'))
                                            <a class="btn btn-default check_out" href="{{ url('/unset-coupon') }}">Xóa
                                                mã
                                                khuyến mãi</a>
                                        @endif
                                    </td>

                                    <td>
                                        {{-- @if (Session::get('customer'))
                                            <a class="btn btn-default check_out" href="{{ url('/checkout') }}">Đặt hàng</a>
                                        @else
                                            <a class="btn btn-default check_out" href="{{ url('/dang-nhap') }}">Đặt
                                                hàng</a>
                                        @endif --}}
                                        <?php
                                        $client_id = Session::get('client_id');
                                        $shipping_id = Session::get('shipping_id');
                            
                                        if($client_id!=NULL && $shipping_id==NULL){
                                    ?>
                                        <a class="btn" href="{{ URL::to('/show_checkout/') }}">Thanh
                                            Toán</a>{{-- phải đăng nhập mới được thanh toán --}}

                                        <?php
                                        }elseif ($client_id!=NULL && $shipping_id!=NULL) {
                                    ?>
                                        <a class="btn" href="{{ URL::to('/payment/') }}">Thanh
                                            Toán</a>{{-- phải đăng nhập mới được thanh toán --}}

                                        <?php
                                        }else{
                                    ?>
                                        <a class="btn" href="{{ URL::to('/login_checkout/') }}">Thanh
                                            Toán</a>{{-- phải đăng nhập mới được thanh toán --}}
                                        <?php
                                        }
                                    ?>

                                    </td>


                                    <td colspan="2">
                                        <li>Tổng tiền :<span>{{ number_format($total, 0, ',', '.') }}đ</span></li>
                                        @if (Session::get('coupon'))
                                            <li>

                                                @foreach (Session::get('coupon') as $key => $cou)
                                                    @if ($cou['coupon_condition'] == 1)
                                                        Mã giảm : {{ $cou['coupon_number'] }} %
                                                        <p>
                                                            @php
                                                                $total_coupon = ($total * $cou['coupon_number']) / 100;
                                                                echo '<p><li>Tổng giảm:' . number_format($total_coupon, 0, ',', '.') . 'đ</li></p>';
                                                            @endphp
                                                        </p>
                                                        <p>
                                            <li>Tổng đã giảm :{{ number_format($total - $total_coupon, 0, ',', '.') }}đ
                                            </li>
                                            </p>
                                        @elseif($cou['coupon_condition'] == 2)
                                            Mã giảm : {{ number_format($cou['coupon_number'], 0, ',', '.') }} k
                                            <p>
                                                @php
                                                    $total_coupon = $total - $cou['coupon_number'];

                                                @endphp
                                            </p>
                                            <p>
                                                <li>Tổng đã giảm :{{ number_format($total_coupon, 0, ',', '.') }}đ</li>
                                            </p>
                                        @endif

                                        <div class="text-right">
                                            <?php
                                            $client_id = Session::get('client_id');
                                            $shipping_id = Session::get('shipping_id');
                                
                                            if($client_id!=NULL && $shipping_id==NULL){
                                        ?>
                                            <a class="btn" href="{{ URL::to('/show_checkout/') }}">Thanh
                                                Toán</a>{{-- phải đăng nhập mới được thanh toán --}}

                                            <?php
                                            }elseif ($client_id!=NULL && $shipping_id!=NULL) {
                                        ?>
                                            <a class="btn" href="{{ URL::to('/payment/') }}">Thanh
                                                Toán</a>{{-- phải đăng nhập mới được thanh toán --}}

                                            <?php
                                            }else{
                                        ?>
                                            <a class="btn" href="{{ URL::to('/login_checkout/') }}">Thanh
                                                Toán</a>{{-- phải đăng nhập mới được thanh toán --}}
                                            <?php
                                            }
                                        ?>
                                        </div>
                            @endforeach



                            </li>
                            @endif
                            {{-- 	<li>Thuế <span></span></li>
							<li>Phí vận chuyển <span>Free</span></li> --}}


                            </td>
                            </tr>
                        @else
                            <tr>
                                <td colspan="5">
                                    <center>
                                        @php
                                            echo 'Làm ơn thêm sản phẩm vào giỏ hàng';
                                        @endphp
                                    </center>
                                </td>
                            </tr>
                            @endif
                        </tbody>



                </form>
                @if (Session::get('cart'))
                    <tr>
                        <td>

                            <form method="POST" action="{{ url('/check-coupon') }}">
                                @csrf
                                <input type="text" class="form-control" name="coupon"
                                    placeholder="Nhập mã giảm giá"><br>
                                <input type="submit" class="btn btn-default check_coupon" name="check_coupon"
                                    value="Tính mã giảm giá">

                            </form>
                        </td>
                    </tr>
                @endif

                </table>

            </div>
        </div>
    </section> <!--/#cart_items-->



@endsection
{{-- lịch sử đơn hàng --}}
@extends('layout')
@section('content')
    <br><br><br><br><br><br><br><br>
    <section style="font-size: 18px ">
        <div class="container">
            <section id="cart_items">
                <div class="container col-sm-12">
                    <div class="breadcrumbs">
                        <ol class="breadcrumb">
                            <li><a href="{{ URL::to('/trang-chu/') }}">Home</a></li>
                            <li class="active">Đơn hàng của tôi</li>
                        </ol>
                    </div>
                </div>
                <div class="shopper-informations col-sm-12 ">

                    <div class="table-responsive">
                        <?php
                        $message = Session::get('message');
                        if ($message) {
                            /* nếu có tồn tại thì */
                            echo '<span class="text-alert" style="color: rgb(249, 1, 1); font-weight: 200px">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                            Session::put('message', null);
                        }
                        ?>
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr>

                                    <th>Thứ tự</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Tình trạng</th>

                                    <th style="width:30px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($order as $key => $ord)
                                    @php
                                        $i++;
                                    @endphp
                                    <tr>
                                        <td><i>{{ $i }}</i></label></td>
                                        <td>{{ $ord->order_code }}</td>
                                        <td>{{ $ord->created_at }}</td>
                                        <td>
                                            @if ($ord->order_status == 1)
                                                Đang chờ duyệt
                                            @else
                                                Đang giao
                                            @endif
                                        </td>


                                        <td>
                                            <a href="{{ URL::to('/view-myorder/' . $ord->order_code) }}"
                                                class="active styling-edit" ui-toggle-class="">
                                                <i class=" btn bg-dark text-warning text-active">Chi tiết đơn hàng</i>
                                            </a>



                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>

        </div>
    </section>
    <style>

    </style>
@endsection
