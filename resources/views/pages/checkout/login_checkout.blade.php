@extends('layout')
@section('content')
    <br><br><br><br><br><br><br>
    <?php
    
    echo Session::get('client_id');
    echo Session::get('shipping_id');
    ?>



    <section style="font-size:18px ">
        <div class="container" style="margin-bottom: 110px; ">
            <div class="scale"></div>
            <nav class="mt-5 pt-4">
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="">
                    <a class="nav-link  " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                        aria-controls="nav-home">Đăng Nhập</a>
                    <a class="nav-link " id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                        aria-controls="nav-profile">Đăng ký</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">


                {{-- Đăng nhập --}}
                <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab text-center">
                    <div class="row">
                        <div class="col-12 col-sm-10 col-md-8 offset-sm-1 offset-md-2">

                            <div class="loiginCard bg-fwhite">
                                {{-- <div th:if="${param.error}" class=" mb-2 pt-1 pb-0 text-danger">
                                    <p>
                                        <i class="fa-solid fa-triangle-exclamation"></i> &nbsp; Invalid Email or Password !!
                                    </p>
                                </div>
                                <div th:if="${param.logout}" class="mb-1 pt-1 pb-0 text-success">
                                    <p>You'r Successfully logout !!</p>
                                </div> --}}
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
                                    <!-- Email input -->
                                    <div class="form-outline mb-4 ">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text bg-light">
                                                    <i class="fa-solid fa-at form1"></i>
                                                </div>
                                            </div>
                                            <input type="email" name="client_email"
                                                class="box-shadow-none form-control form1" placeholder="Nhập Email của bạn"
                                                required="" />
                                        </div>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text bg-light">
                                                    <i class="fa-solid fa-lock form1"></i>
                                                </div>
                                            </div>
                                            <input type="password" name="client_password"
                                                class="box-shadow-none form-control form1"
                                                placeholder="Nhập Mật Khẩu Của Bạn" required="" />
                                        </div>
                                    </div>

                                    <!-- 2 column grid layout -->
                                    <div class="row mb-4">
                                        <div class="col-md-6 d-flex justify-content-center">
                                            <!-- Checkbox -->
                                            <div class="form-check mb-3 mb-md-0">
                                                <input class="" type="checkbox" value="" id="loginCheck"
                                                    checked /> <label class="form-check-label" for="loginCheck"> Lưu tài
                                                    khoản </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6 d-flex justify-content-center">
                                            <!-- Simple link -->
                                            <a href="#" class="text-primary pointer"> Quên mật khẩu?</a>
                                        </div>
                                    </div>
                                    <!-- Submit button -->
                                    <button type="submit" name="login" class="btn bg-fyellow btn-block mb-4">Đăng
                                        Nhập</button>
                                </form>
                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>
                                        Chưa có tài khoản? <a class=" " href="#"
                                            style="text-decoration: none">Hãy đăng ký tài khoản</a>
                                    </p>
                                </div>
                                <div class="text-center my-2">
                                    {{-- <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button> --}}
                                    <div class="">
                                        <a href="{{ URL('/login-client-facebook/') }}"
                                            class="btn btn-link btn-floating mx-1">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                        <a href="{{ URL('/login-client-google/') }}"
                                            class="btn btn-link btn-floating mx-1"><i class="bi bi-google"></i>
                                        </a>
                                    </div>
                                </div>
                                </form>
                            </div>

                        </div>

                    </div>

                </div>

                {{-- đăng ký --}}
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-12 col-sm-10 col-md-8 offset-sm-1 offset-md-2">
                            <div class="registerCard">
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
                                    <!-- Name input -->
                                    <div class="form-outline mb-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text bg-light">
                                                    <i class="fa-solid fa-user form1"></i>
                                                </div>
                                            </div>
                                            <input name="client_name" type="name"
                                                class="box-shadow-none form-control form1" placeholder="Họ và Tên"
                                                required="" />
                                            <div class="invalid-feedback"></div>

                                        </div>
                                    </div>

                                    <!-- Username input -->
                                    <div class="form-outline mb-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text bg-light">
                                                    <i class="fa-solid fa-at form1"></i>
                                                </div>
                                            </div>
                                            <input name="client_email" type="email"
                                                class="box-shadow-none form-control form1" placeholder="Email"
                                                required="" />
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text bg-light">
                                                    <i class="fa-solid fa-phone form1"></i>
                                                </div>
                                            </div>
                                            <input name="client_sdt" type="sdt"
                                                class="box-shadow-none form-control form1" placeholder="Số điện thoại"
                                                required="" />
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text bg-light">
                                                    <i class="fa-solid fa-lock form1"></i>
                                                </div>
                                            </div>
                                            <input name="client_password" type="password"
                                                class="box-shadow-none form-control form1"
                                                id="inlineFormInputGroupUsername" placeholder="Mật Khẩu">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>


                                    <button type="submit" name="login" onclick="load()"
                                        class="btn bg-fyellow btn-block mb-3">Đăng Ký <i
                                            class=" px-2 text-danger fa-solid fa-spin fa-spinner hide"
                                            id="spi"></i></button>

                                    <div class="text-center my-3">
                                        <button type="button" class="btn btn-link btn-floating mx-1">
                                            <i class="fab fa-facebook-f"></i>
                                        </button>

                                        <button type="button" class="btn btn-link btn-floating mx-1">
                                            <i class="fab fa-google"></i>
                                        </button>

                                        <button type="button" class="btn btn-link btn-floating mx-1">
                                            <i class="fab fa-twitter"></i>
                                        </button>

                                        <button type="button" class="btn btn-link btn-floating mx-1">
                                            <i class="fab fa-github"></i>
                                        </button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>

                </div>
                {{-- hết phần đăng kí --}}
            </div>
        </div>

        <script>
            function load() {
                var element = document.getElementById("spi");
                element.classList.remove("hide");
            }
        </script>

        {{-- <script th:if="${alert.equals('register')}">
            Swal.fire({
                icon: 'success',
                title: 'Successfully Register',
                width: 550,
                padding: '3em',
                text: "You are successfully register Please login here!!",
                backdrop: `
			    rgba(255,233,150,0.3)
			  `
            });
        </script>
        <script th:if="${alert.equals('email-exist')}">
            Swal.fire({
                icon: 'warning',
                title: 'Oops data error!!',
                padding: '3em',
                text: "Email id allredy exist please use another!!",
                backdrop: `
			    rgba(255,233,150,0.3)
			  `
            });
        </script>


        <script th:if="${alert.equals('login')}">
            Swal.fire({
                title: 'Please Login first!!',
                width: 550,
                padding: '3em',
                text: "Please Login first the add the book to favorite list",
                backdrop: `
			    rgba(255,233,150,0.3)
			  `
            });
        </script>
        <script th:if="${alert.equals('verify')}">
            Swal.fire({
                icon: 'success',
                title: 'Successfully Register!! Verify Account',
                width: 550,
                padding: '3em',
                text: "Email send on your email address click on verify to verify your account.",
                backdrop: `
			    rgba(255,233,150,0.3)
			  `
            });
        </script>
        <script th:if="${alert.equals('notVerify')}">
            Swal.fire({
                icon: 'warning',
                title: 'Account Not Verified!!',
                width: 550,
                padding: '3em',
                text: "Please verify account first then login.",
                backdrop: `
			    rgba(255,233,150,0.3)
			  `
            });
        </script>
        <script th:if="${alert.equals('sverify')}">
            Swal.fire({
                icon: 'success',
                title: 'Account Successfully Verified!!',
                padding: '3em',
                text: "Your account is verified please loging to your account .",
                backdrop: `
			    rgba(255,233,150,0.3)
			  `
            });
        </script>
        <script th:if="${alert.equals('everify')}">
            Swal.fire({
                icon: 'error',
                title: 'Something Went wrong!!',
                padding: '3em',
                text: "Verification code not match .",
                backdrop: `
			    rgba(255,233,150,0.3)
			  `
            });
        </script>

 --}}

    </section>
@endsection
