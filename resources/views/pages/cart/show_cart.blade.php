@extends('layout')
@section('content')
    <br><br><br><br><br><br>
    <section>

        <div class="card">
            <div class="row">
                <div class="col-md-11 cart">
                    <div class="title">
                        <div class="row" style="color: #000;font-size: 30px;font">
                            <div class="col">Giỏ hàng

                            </div>
                            {{--                             <div class="col align-self-center text-right text-muted">3 items</div> --}}
                        </div>
                    </div><?php
                    $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
                    if ($message) {
                        /* nếu có tồn tại thì */
                        echo '<span class="text-alert">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                        Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
                    }
                    ?>
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
                                        src="{{ URL::to('public/uploads/product/' . $v_content->options->image) }}"></div>
                                <div class="col">

                                    <div class="row">{{ $v_content->name }}</div>
                                </div>
                                <div class="col">{{ number_format($v_content->price) . ' ' . 'VNĐ' }}</div>


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
                                <div class="col"><?php
                                $subtotal = $v_content->price * $v_content->qty;
                                echo number_format($subtotal) . ' ' . 'VNĐ';
                                ?></div>

                                <div class=""><a class="cart_quantity_delete"
                                        href="{{ URL::to('/delete_to_cart/' . $v_content->rowId) }}"><i class="fa fa-times"
                                            style="font-size: 14px"></i></a></span>
                                </div>
                            </div>
                        @endforeach
                    </div>


                    <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to shop</span>
                    </div>
                </div>
                <div class="col-md-12 summary">
                    <div style="font-size:20px">
                        <b>Tổng Chi Phí</b>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;">Tổng số lượng 3</div>
                        <div class="col text-right"> {{ Cart::subtotal() . ' ' . 'VNĐ' }}</div>
                    </div>
                    <form role="form" action="{{ URL('/check-coupon') }}" method="post" enctype="multipart/form-data">
                        <p>Phí vận chuyển</p>
                        <select>
                            <option class="text-muted">Vận chuyển thường: miễn phí</option>
                            <option class="text-muted">Vận chuyển nhanh: 30.000VNĐ</option>


                        </select>

                        {{-- thường để gửi ảnh lên csdl thì phải có trường enctype="multipart/form-data" --}}
                        @csrf
                        <p>Mã giảm giá</p><br>
                        <div class="row">

                            <div class="col" style="padding-left:0;">
                                <input type="text" placeholder="Nhập mã giảm giá" name="coupon">
                            </div>
                            <div class="co-2 text-right">
                                <input type="submit" class="btn-dark" value="Áp dụng" name="check-coupon ">
                            </div>



                        </div>



                    </form>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;font-size:18px ">

                        <div class="col"><b>Tổng chi phí</b></div>
                        <div class="col text-right"><b>{{ Cart::subtotal() . ' ' . 'VNĐ' }}</b></div>

                    </div>
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
                </div>
            </div>

        </div>

    </section>







    <style>
        .title {
            margin-bottom: 5vh;
        }

        .card {
            margin: auto;
            max-width: 950px;
            width: 90%;
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

        img1 {
            width: 100px;
            height: 100px;
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
@endsection
