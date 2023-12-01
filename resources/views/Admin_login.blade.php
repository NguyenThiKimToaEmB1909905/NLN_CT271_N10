<!DOCTYPE html>

<head>
    <title>Trang admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{ asset('public/backend/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('public/backend/css/text.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('public/backend/css/style-responsive.css') }}" rel="stylesheet" />
    <!-- font CSS -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/font.css') }}" type="text/css" />
    <link href="{{ asset('public/backend/css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- //font-awesome icons -->
    <script src="js/jquery2.0.3.min.js"></script>


    {{-- Moi --}}



    <link href="{{ asset('public/backend/css/style9.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('public/backend/css/font-awesome9.css') }}" rel='stylesheet' type='text/css' />
    <!-- js -->
    <script src="{{ asset('public/backend/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery-2.1.4.min.js') }}"></script>

    <!-- //js -->

    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Oleo+Script:400,700&amp;subset=latin-ext" rel="stylesheet">
</head>

<body>
    <!--header-->
    <div class="header-w3l" style="color: black">
        <h1>Đăng Nhập Admin</h1>
    </div>
    <!--//header-->
    <!--main-->
    <div class="main-w3layouts-agileinfo">
        <!--form-stars-here-->
        <div class="wthree-form">
            {{-- <h2>Fill out the form below to login</h2> --}}
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
                <div class="form-sub-w3">
                    <input type="text" name="admin_email" placeholder="Điền Email vào" required="">
                    <div class="icon-w3">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="form-sub-w3">
                    <input type="password" name="admin_password" placeholder="Mật khẩu" required="">

                    <div class="icon-w3">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    </div>
                </div>
                <label class="anim">
                    <input type="checkbox" class="checkbox">
                    <span>Nhớ Mật Khẩu</span>
                    <a href="#">Quên Mật Khẩu</a>
                </label>
                <div class="clear"></div>
                <div class="submit-agileits">
                    <input type="submit" class="  btn btn-warning" value="Đăng nhập" name="login">
                </div>
            </form>

        </div>
        <!--//form-ends-here-->

    </div>
    {{-- <div class="footer">
        <p>&copy; 2017 Glassy Login Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a>
        </p>
    </div> --}}


    <script src="{{ asset('public/bakend/js/bootstrap.js') }}"></script>
    <script src="{{ asset('public/bakend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('public/bakend/js/scripts.js') }}"></script>
    <script src="{{ asset('public/bakend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('public/bakend/js/jquery.nicescroll.js') }}"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js')}}"></script><![endif]-->
    <script src="{{ asset('public/bakend/js/jquery.scrollTo.js') }}"></script>
</body>

</html>
