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
                            <h5><b>Tổng giá trị đơn hàng</b></h5>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col" style="padding-left:0;">Tổng tiền hàng</div>
                            <div class="col text-right"> {{ Cart::subtotal() . ' ' . 'VNĐ' }}</div>
                        </div>
                        <div class="row">
                            <div class="col" style="padding-left:0;">Phí vận chuyển</div>
                            <div class="col text-right"> 0.000 VNĐ</div>
                        </div>
                        <div class="row">
                            <div class="col" style="padding-left:0;">Mã giảm giá</div>
                            <div class="col text-right"> Không có</div>
                        </div>
                        <div class="row">
                            <div class="col" style="padding-left:0;">Tổng thanh toán</div>
                            <div class="col text-right">{{ Cart::subtotal() . ' ' . 'VNĐ' }}</div>
                        </div>

                        <div>
                            <h5><b>Phương thức thanh toán</b></h5>
                        </div>
                        <hr>
                        <form action="{{ URL::to('/order_place/') }}" method="POST">
                            {{ csrf_field() }}

                            <div style="padding: -30px">
                                <input name="payment_option" value="1" type="checkbox">Trả bằng ATM
                                <input name="payment_option" value="2" type="checkbox">Thanh toán tiền

                            </div>
                            <input type="submit" name="send_order_place" class="btn " value="Thanh toán ngay">
                        </form>
                    </div>

                </div>




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
