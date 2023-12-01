@extends('layout')
@section('content')
    <br><br><br><br><br><br><br><br>
    <section id="cart_items">
        <div class="container">


            <div class="card">
                <div class="row">
                    <div class="col-md-12 cart container">


                        <div class="row"style="color: #000">
                            <div class="row main align-items-center container">
                                <img src="{{ URL::to('public/frontend/images/icon.png') }}" width="60" height="60"
                                    class="d-inline-block align-top" alt="">
                            </div>
                            <div class="row main align-items-center text-success" style="font-size: 24px">
                                Thông tin đặt hàng thành công
                            </div>
                            <div class="row main align-items-center text-muted">
                                Xin chào anh/chị
                            </div>
                            <div class="row main align-items-center text-muted">
                                Mã đơn hàng:
                            </div>
                            <div class="row main align-items-center">
                                Xin cảm ơn Quý Khách đã đặt hàng trên hệ thống của chúng tôi
                            </div>
                            <div class="row main align-items-center">
                                Số điện thoại hỗ trợ:0993998998
                            </div>
                            <div class="row main align-items-center">
                                Email hỗ trợ: <b>TheGioiSach@gmail.com</b>
                            </div>
                            <div class="row main align-items-center">
                                Thông tin đặt hàng thành công
                            </div>
                            <div class="row main align-items-center">
                                <a href="{{ URL::to('/trang-chu/') }}">&leftarrow; Trở về trang chủ</a>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
            </form>

        </div>

        <style>
            .title {
                margin-bottom: 5vh;
            }

            .card {
                margin: auto;
                max-width: 800px;
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







            .row {
                margin: 0;
            }

            .title b {
                font-size: 1.5rem;
            }

            .main {
                margin: 0;
                padding: 1vh 0;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
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
