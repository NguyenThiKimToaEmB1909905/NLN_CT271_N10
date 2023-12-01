@extends('layout')
@section('content')
    <br><br><br><br><br>
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{ URL::to('/trang-chu/') }}">Home</a></li>
                    <li class="active">Thanh Toán giỏ hàng</li>
                </ol>
                <button class="btn-light " type="btn" onclick="quay_lai_trang_truoc()"><i class="fa fa-arrow-left"
                        aria-hidden="true"></i> Quay
                    lại trang trước</button>

                <script>
                    function quay_lai_trang_truoc() {
                        history.back();
                    }
                </script>
            </div>
            <br>
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
                            @if (Session::get('cart') == true)
                                @php
                                    $total = 0;
                                @endphp
                                @foreach (Session::get('cart') as $key => $cart)
                                    @php
                                        $subtotal = $cart['product_price'] * $cart['product_qty'];
                                        $total += $subtotal;
                                    @endphp
                                    <div class="row main align-items-center border-top border-bottom"
                                        style="color: rgb(177, 177, 177)">
                                        <div class="col-2"><img class="img-fluid img1"
                                                src="{{ asset('public/uploads/product/' . $cart['product_image']) }}"
                                                width="90" alt="{{ $cart['product_name'] }}">
                                        </div>
                                        <div class="col">

                                            <div class="row">{{ $cart['product_name'] }}</div>
                                        </div>
                                        <div class="col">{{ number_format($cart['product_price'], 0, ',', '.') }}đ</div>


                                        <div class="col">
                                            <div class="cart_quantity_button ">

                                                <p style="font-size: 20px;color:#787674;">{{ $cart['product_qty'] }}</p>


                                            </div>
                                        </div>
                                        <div class="col"><?php
                                        $subtotal = $cart['product_price'] * $cart['product_qty'];
                                        echo number_format($subtotal) . ' ' . 'VNĐ';
                                        ?></div>


                                    </div>
                                @endforeach
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
                        </div>
                    </div>
                    <div class="col-md-5 summary ">
                        <div>
                            <h5><b>Địa chỉ giao hàng</b></h5>
                        </div>
                        <hr>

                        <form method="POST">
                            @csrf
                            {{-- <input type="email" name="shipping_email" class="shipping_email" placeholder="Email*"
                                required="">
                            <input type="text" name="shipping_name" class="shipping_name" placeholder="Họ và Tên *"
                                required="">
                            <input type="text" name="shipping_address" class="shipping_address" placeholder="Địa chỉ  *"
                                required="">
                            <input type="text" name="shipping_phone" class="shipping_phone" placeholder="Số điện thoại"
                                required="">
                            <textarea name="shipping_note" class="shipping_note" placeholder="Ghi chú đơn hàng" rows="3" required=""></textarea>
                            <br><br> --}}
                            <input type="text" name="shipping_email" class="shipping_email" placeholder="Điền email">
                            <input type="text" name="shipping_name" class="shipping_name"
                                placeholder="Họ và tên người gửi">
                            <input type="text" name="shipping_address" class="shipping_address"
                                placeholder="Địa chỉ gửi hàng">
                            <input type="text" name="shipping_phone" class="shipping_phone" placeholder="Số điện thoại">
                            <textarea name="shipping_note" class="shipping_note" placeholder="Ghi chú đơn hàng của bạn" rows="5"></textarea>


                            <br><br>
                            <select name="payment_select" class=" payment_select p-10">
                                <option value="">--Chọn Thanh toán qua chuyển khoản---</option>
                                <option value="1">Thanh toán qua chuyển khoản</option>
                                <option value="2">Thanh toán Khi nhận hàng</option>
                            </select>
                            <input {{-- class="btn" --}} type="button" value="Xác nhận đơn hàng" name="send_order"
                                class="btn  btn-sm send_order">
                    </div>
                </div>


                </form>


                {{-- <div style="padding: -30px">
                            <input name="payment_option" value="1" type="checkbox">Trả bằng ATM
                            <input name="payment_option" value="2" type="checkbox">Thanh toán tiền

                        </div> --}}





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
