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



</head>


<body>

    <section id="container">

        <div class="loader">
            <i class="text-muted fa-solid fa-spin fa-3x fa-spinner"></i>
        </div>
        <nav
            class="navbar fixed-top d-flex justify-content-between slim-navbar navbar-expand-lg navbar-light bg-fyellow ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-right" id="navbarSupportedContent">
                <ul class="nav navbar-nav navbar-right ml-auto ">
                    <li class="nav-item mx-5"><a href="{{ URL::to('/dashboard') }}" class="nav-link text-dark">Home
                            <span class="sr-only"></span>
                        </a></li>
                </ul>
                {{-- <button onclick="openFunction()"
                    class=" btn form-control search-btn mr-sm-2 radius-50 bg-fyellow border-none p-0">
                    <i class=" fa fa-search"></i>
                </button> 
                <i class="mx-4 fa fa-shopping-basket pointer" data-toggle="modal" data-target="#cart"> <small
                        class="text-small cart-num"></small></i> --}}

                <li class="nav-item dropdown userNameBtn text-dark">
                    <a class="dropdown-toggle text-dark" style="text-decoration: none" href="#"
                        id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
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
                    </a>
                    <div class="dropdown-menu admin-drop" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item pointer"><img alt=""
                                style="width: 40px; height: 40px; border-radius: 50%"><span
                                class="ml-2">Profile</span></a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ URL::to('/logout') }}" class="dropdown-item pointer"><i
                                class="ml-2 fa-solid fa-right-from-bracket"></i> <span
                                class="ml-3">Logout</span></a>
                    </div>
                </li>

            </div>
        </nav>

        {{-- phần bên trái  --}}
        <div class="container-fluid">



            <div class="row mt-4 ">


                <div class="row " id="body-row">

                    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block bg-fyellow">
                        <div class="mt-4">
                            <img style="width: 180px; height: 70px"
                                src="{{ URL::to('public/frontend/images/logo.png') }}" alt="" />
                        </div>
                        <div class="fullDivider"></div>
                        <ul class="list-group bg-fyellow">
                            <div class="fullDivider"></div>

                            <a href="{{ URL::to('/dashboard') }}"
                                class="bg-fyellow list-group-item list-group-item-action ">
                                <div class="d-flex w-100 justify-content-start align-items-center">
                                    <span class="fa fa-home mr-3"></span>
                                    <span class="menu-collapsed">Tổng quan</span>
                                </div>
                            </a>
                            <div class="fullDivider"></div>
                            <a href="{{ URL::to('/dashboard') }}"
                                class="bg-fyellow list-group-item list-group-item-action ">
                                <div class="d-flex w-100 justify-content-start align-items-center ">
                                    <span class="fa fa-money mr-3"></span>
                                    <span class="menu-collapsed">Thống kê</span>
                                </div>
                            </a>

                            <div class="fullDivider"></div>
                            <a href="#submenu1" data-toggle="collapse" aria-expanded="false"
                                class="bg-fyellow list-group-item list-group-item-action flex-column align-items-start pt-3">
                                <div class="d-flex w-100 justyfy-content-start align-items-center">
                                    <span class="fa-solid fa-clipboard-list mr-3"></span>
                                    <span class="menu-collapsed">Đơn hàng</span>
                                    <span class="fas fa-angle-down ml-auto"></span>
                                </div>
                            </a>
                            <!-- Inhalt des Untermenüs -->
                            <div id="submenu1" class="collapse sidebar-submenu ">
                                <a href="{{ URL::to('/manage_order/') }}"
                                    class="list-group-item list-group-item-action bg-fyellow">
                                    <span class="menu-collapsed">Quản lý các đơn hàng</span>
                                </a>

                            </div>






                            <a href="#submenu2" data-toggle="collapse" aria-expanded="false"
                                class="bg-fyellow list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-start align-items-center">
                                    <span class="fa fa-cube mr-3"></span>
                                    <span class="menu-collapsed">Thể loại</span>
                                    <span class="fas fa-angle-down ml-auto"></span>
                                </div>
                            </a>
                            <!-- Inhalt des Untermenüs -->
                            <div id='submenu2' class="collapse sidebar-submenu">
                                <a href="{{ URL::to('/add-category-product/') }}"
                                    class="list-group-item list-group-item-action bg-fyellow ">
                                    <span class="menu-collapsed">Thêm thể loại sách</span>
                                </a>
                                <a href="{{ URL::to('/all-category-product/') }}"
                                    class="list-group-item list-group-item-action bg-fyellow ">
                                    <span class="menu-collapsed">Liệt kê thể loại sách</span>
                                </a>
                            </div>
                            <a href="#submenu3" data-toggle="collapse" aria-expanded="false"
                                class="bg-fyellow list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-start align-items-center">
                                    <span class="fa fa-certificate mr-3"></span>
                                    <span class="menu-collapsed">Tác Giả</span>
                                    <span class="fas fa-angle-down ml-auto"></span>
                                </div>
                            </a>
                            <!-- Inhalt des Untermenüs -->
                            <div id='submenu3' class="collapse sidebar-submenu">
                                <a href="{{ URL::to('/add-brand-product/') }}"
                                    class="list-group-item list-group-item-action bg-fyellow ">
                                    <span class="menu-collapsed">Thêm Tác Giả</span>
                                </a>
                                <a href="{{ URL::to('/all-brand-product/') }}"
                                    class="list-group-item list-group-item-action bg-fyellow ">
                                    <span class="menu-collapsed">Liệt kê Thông tin Tác giả</span>
                                </a>
                            </div>
                            <a href="#submenu4" data-toggle="collapse" aria-expanded="false"
                                class="bg-fyellow list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-start align-items-center">
                                    <span class="fa-solid fa-book-atlas mr-3"></span>
                                    <span class="menu-collapsed">Sản phẩm</span>
                                    <span class="fas fa-angle-down ml-auto"></span>
                                </div>
                            </a>
                            <!-- Inhalt des Untermenüs -->
                            <div id='submenu4' class="collapse sidebar-submenu">
                                <a href="{{ URL::to('/add-product/') }}"
                                    class="list-group-item list-group-item-action bg-fyellow ">
                                    <span class="menu-collapsed">Thêm thương sản phẩm</span>
                                </a>
                                <a href="{{ URL::to('/all-product/') }}"
                                    class="list-group-item list-group-item-action bg-fyellow ">
                                    <span class="menu-collapsed">Liệt kê tất cả sản phẩm</span>
                                </a>
                            </div>
                            <div class="fullDivider"></div>
                            <a href="#submenu5" data-toggle="collapse" aria-expanded="false"
                                class="bg-fyellow list-group-item list-group-item-action flex-column align-items-start pt-3">
                                <div class="d-flex w-100 justyfy-content-start align-items-center">
                                    <span class="fa-solid fa-clipboard-list mr-3"></span>
                                    <span class="menu-collapsed">Quản lý mã giảm giá</span>
                                    <span class="fas fa-angle-down ml-auto"></span>
                                </div>
                            </a>
                            <!-- Inhalt des Untermenüs -->
                            <div id="submenu5" class="collapse sidebar-submenu ">
                                <a href="{{ URL::to('/insert-coupon/') }}"
                                    class="list-group-item list-group-item-action bg-fyellow">
                                    <span class="menu-collapsed">Thêm mã giảm giá</span>
                                </a>

                            </div>
                            <div id="submenu5" class="collapse sidebar-submenu ">
                                <a href="{{ URL::to('/list-coupon/') }}"
                                    class="list-group-item list-group-item-action bg-fyellow">
                                    <span class="menu-collapsed">Liệt kê mã giảm giá</span>
                                </a>

                            </div>

                            <!-- Separator with title -->
                            {{--  <li
                                class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                                <small>OPTIONS</small>
                            </li> 
                            // --}}
                            <!-- /END Separator -->

                            <div class="fullDivider"></div>
                            <a href="#" class="bg-fyellow list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-start align-items-center">
                                    <span class="fa fa-question fa-fw mr-3"></span>
                                    <span class="menu-collapsed">Help</span>
                                </div>
                            </a>
                            <div class="fullDivider"></div>
                            <a href="#" class="bg-fyellow list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-start align-items-center">
                                    <span class="far fa-envelope fa-fw mr-3"></span>
                                    <span class="menu-collapsed">Messages <span
                                            class="badge badge-pill badge-primary ml-2">5</span></span>
                                </div>
                            </a>

                        </ul>
                    </div>



                </div>

                <div class="userBoard mt-5">
                    @yield('admin_content')
                </div>
            </div>







            {{-- <div class="sidebar bg-fyellow ">
                <div class="mt-4">
                    <img style="width: 180px; height: 70px" src="{{ URL::to('public/frontend/images/logo.png') }}"
                        alt="" />
                </div>
                <div class="fullDivider"></div>

                <ul class="sidebar-options  mt-0 p-2 " id="nav-accordion" style="list-style: none;">
                    <li class="sidebarHover px-3 py-1    ">
                        <a class="text-muted" style="text-decoration: none">
                            <i class="fa-solid fa-chart-pie"></i>
                            <span class="ml-3">Đơn hàng</span>
                        </a>
                        <ul class="sub">
                            <li><a class="text-muted" style="text-decoration: none"
                                    href="{{ URL::to('/manage_order/') }}">Quản lý các đơn hàng</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebarHover px-3 py-1">
                        <a class="text-muted" style="text-decoration: none">
                            <i class="fa-solid fa-clipboard-list"></i>
                            <span class="ml-3">Orders</span>
                        </a>
                    </li>
                    <li class="sidebarHover px-3 py-1"><a th:href="@{/admin/stores/all,0}" class="text-muted"
                            style="text-decoration: none"><i class="fa-solid fa-list-check"></i><span
                                class="ml-3">Stores</span></a></li>

                    <li class="sidebarHover px-3 py-1"><a th:href="@{/admin/books/all,0}" class="text-muted"
                            style="text-decoration: none"><i class="  my-2 fa-solid fa-book-atlas"></i><span
                                class="ml-3">Books</span></a></li>
                    <li class="sidebarHover px-3 py-1"><a th:href="@{/admin/users/0}" class="text-muted"
                            style="text-decoration: none"><i class="fa-solid fa-users"></i>
                            <span class="ml-2">Users</span></a></li>
                    <li class="sidebarHover px-3 py-1"><a th:href="@{/admin/feedback/0}" class="text-muted"
                            style="text-decoration: none"><i class="fa-solid fa-users"></i>
                            <span class="ml-2">Feedbacks</span></a></li>
                    <li class="sidebarHover px-3 py-1"><a th:href="@{/admin/myProfile}" class="text-muted"
                            style="text-decoration: none"><i class="fa-solid fa-id-card"></i><span
                                class="ml-3">Profile</span></a></li>
                    <!-- 	<li class="sidebarHover px-3 py-1"><a
                            th:href="@{/logout}" class="text-muted"
                            style="text-decoration: none"><i class="fa-solid fa-right-from-bracket"></i> <span class="ml-3">Logout</span></a></li>-->
                </ul>
                <div class="fullDivider"></div>
                <ul class="sidebar-options mt-3" style="list-style: none;">
                    <li class=" px-3 py-1"><a href="" class="text-muted" style="text-decoration: none">
                            <i class="fa-solid text-small text-danger fa-circle"></i> &nbsp;
                            Most Diwali Tails
                        </a></li>
                    <li class=" px-3 py-1"><a href="" class="text-muted" style="text-decoration: none">
                            <i class="text-primary text-small fa-solid fa-circle"></i> &nbsp;
                            Classic Novels
                        </a></li>
                    <li class=" px-3 py-1"><a href="" class="text-muted" style="text-decoration: none">
                            <i class="fa-solid fa-circle text-small text-warning"></i> &nbsp;
                            Best Of List
                        </a></li>
                    <li class="px-3 py-1"><a href="" class="text-muted" style="text-decoration: none"> <i
                                class="fa-solid fa-circle text-small text-success"></i> &nbsp;
                            Most Populer
                        </a></li>

                </ul>
                <div class="fullDivider"></div>
            </div> --}}
        </div>











        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
        </script>





        <script>
            var loader = document.querySelector(".loader")
            window.addEventListener("load", vanish);

            function vanish() {
                loader.classList.add("disppear");
            }
        </script>

        <script>
            // Hide submenus
            $('#body-row .collapse').collapse('hide');

            // Collapse/Expand icon
            $('#collapse-icon').addClass('fa-angle-double-left');

            // Collapse click
            $('[data-toggle=sidebar-colapse]').click(function() {
                SidebarCollapse();
            });

            function SidebarCollapse() {
                $('.menu-collapsed').toggleClass('d-none');
                $('.sidebar-submenu').toggleClass('d-none');
                $('.submenu-icon').toggleClass('d-none');
                $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');

                // Treating d-flex/d-none on separators with title
                var SeparatorTitle = $('.sidebar-separator-title');
                if (SeparatorTitle.hasClass('d-flex')) {
                    SeparatorTitle.removeClass('d-flex');
                } else {
                    SeparatorTitle.addClass('d-flex');
                }

                // Collapse/Expand icon
                $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
            }
        </script>
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
                width: 230px;
            }

            .sidebar-collapsed {
                width: 60px;
            }

            /* Menu item*/
            #sidebar-container .list-group a {
                height: 50px;
                /* color: white; */
            }


            #sidebar-container .list-group .sidebar-submenu a {
                height: 45px;
                padding-left: 30px;
            }

            .sidebar-submenu {
                font-size: 0.9rem;
            }


            .sidebar-separator-title {
                /*  background-color: #333; */
                height: 35px;
            }

            .sidebar-separator {
                /* background-color: #333; */
                height: 25px;
            }

            .logo-separator {
                /* background-color: #333; */
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
                content: " \f0da";
                font-family: FontAwesome;
                display: inline;
                text-align: right;
                padding-left: 10px;
            }
        </style>

    </section>

    </section>
    <script src="{{ asset('public/backend/js/bootstrap.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('public/backend/js/scripts.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.nicescroll.js') }}"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="{{ asset('public/backend/js/jquery.scrollTo.js') }}"></script>
    {{-- duyệt đơn hàng --}}
    {{-- nuts caajp nhaatj --}}
    <script type="text/javascript">
        $('.update_quantity_order').click(function() {


            var order_product_id = $(this).data('product_id');
            var order_qty = $('.order_qty_' + order_product_id).val();
            var order_code = $('.order_code').val();
            var _token = $('input[name="_token"]').val();
            /* alert(order_product_id);
            alert(order_qty);
            alert(order_code); */
            $.ajax({
                url: '{{ url('/update-qty') }}',

                method: 'POST',

                data: {
                    _token: _token,
                    order_product_id: order_product_id,
                    order_qty: order_qty,
                    order_code: order_code
                },
                // dataType:"JSON",
                success: function(data) {

                    alert('Cập nhật số lượng thành công');

                    location.reload();




                }
            });

        });
    </script>

    <script type="text/javascript">
        $('.order_details').change(function() {
            var order_status = $(this).val();
            var order_id = $(this).children(":selected").attr("id");
            var _token = $('input[name="_token"]').val();
            /*  alert(order_status);
             alert(order_id);
             alert(_token) */
            ;
            //lay ra so luong
            quantity = [];
            $("input[name='product_sales_quantity']").each(function() {
                quantity.push($(this).val());
            });
            //lay ra product id
            order_product_id = [];
            $("input[name='order_product_id']").each(function() {
                order_product_id.push($(this).val());
            });

            /* alert(quantity); */
            j = 0;
            for (i = 0; i < order_product_id.length; i++) {
                //so luong khach dat
                var order_qty = $('.order_qty_' + order_product_id[i]).val();
                //so luong ton kho
                var order_qty_storage = $('.order_qty_storage_' + order_product_id[i]).val();

                if (parseInt(order_qty) > parseInt(order_qty_storage)) {
                    j = j + 1;
                    if (j == 1) {
                        alert('Số lượng bán trong kho không đủ');
                    }
                    $('.color_qty_' + order_product_id[i]).css('background', '#000');
                }
            }
            if (j == 0) {

                $.ajax({
                    url: '{{ url('/update-order-qty') }}',
                    method: 'POST',
                    data: {
                        _token: _token,
                        order_status: order_status,
                        order_id: order_id,
                        quantity: quantity,
                        order_product_id: order_product_id
                    },
                    success: function(data) {
                        alert('Thay đổi tình trạng đơn hàng thành công');
                        location.reload();
                    }
                });

            }

        })
    </script>
    {{-- <script type="text/javascript">
        $('.order_details').change(function(){
            var order_status = $(this).val();
            var order_id = $(this).children(":selected").attr("id");
            var _token = $('input[name="_token"]').val();
    
            //lay ra so luong
            quantity = [];
            $("input[name='product_sales_quantity']").each(function(){
                quantity.push($(this).val());
            });
            //lay ra product id
            order_product_id = [];
            $("input[name='order_product_id']").each(function(){
                order_product_id.push($(this).val());
            });
            j = 0;
            for(i=0;i<order_product_id.length;i++){
                //so luong khach dat
                var order_qty = $('.order_qty_' + order_product_id[i]).val();
                //so luong ton kho
                var order_qty_storage = $('.order_qty_storage_' + order_product_id[i]).val();
    
                if(parseInt(order_qty)>parseInt(order_qty_storage)){
                    j = j + 1;
                    if(j==1){
                        alert('Số lượng bán trong kho không đủ');
                    }
                    $('.color_qty_'+order_product_id[i]).css('background','#000');
                }
            }
            if(j==0){
              
                    $.ajax({
                            url : '{{url('/update-order-qty')}}',
                                method: 'POST',
                                data:{_token:_token, order_status:order_status ,order_id:order_id ,quantity:quantity, order_product_id:order_product_id},
                                success:function(data){
                                    alert('Thay đổi tình trạng đơn hàng thành công');
                                    location.reload();
                                }
                    });
                
            }
    
        });
    </script> --}}

</body>

</html>
