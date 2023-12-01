@extends('layout')
@section('content')
    <br><br><br><br><br><br>
    <section>

        <div class="card">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {!! session()->get('message') !!}
                </div>
            @elseif(session()->has('error'))
                <div class="alert alert-danger">
                    {!! session()->get('error') !!} {{--      {{ session()->get('error') }} 2 dấu ngoặc nhọn thì sẽ không hiểu đc các thẻ của html     --}}
                </div>
            @endif
            <br><br>
            <div class="row">
                <div class="col-md-11 cart">
                    <div class="title">
                        <div class="row" style="color: #000;font-size: 30px;font">
                            <div class="col">Giỏ hàng

                            </div>
                            {{--                             <div class="col align-self-center text-right text-muted">3 items</div> --}}
                        </div>
                    </div>

                    <form action="{{ url('/update-cart') }}" method="POST">
                        @csrf
                        <div class="row"style="color: #000">
                            <div class="row main align-items-center">
                                <div class="col-2 image">Hình ảnh</div>
                                <div class="col description">
                                    Tên
                                </div>
                                {{-- <div class="col description">Số lượng tồn</div> --}}
                                <div class="col price">Giá sản phẩm</div>
                                <div class="col quantity">
                                    Số lượng
                                </div>

                                <div class="col total">Thành tiền</div>
                            </div>
                        </div>
                        <div class="row ">
                            @if (Session::get('cart') == true)
                                @php
                                    $total = 0;
                                    $sl = 0;
                                @endphp
                                @foreach (Session::get('cart') as $key => $cart)
                                    @php
                                        $subtotal = $cart['product_price'] * $cart['product_qty'];
                                        $total += $subtotal;
                                        $sl += $cart['product_qty'];
                                    @endphp

                                    <div class="row main align-items-center border-top border-bottom"
                                        style="color: rgb(177, 177, 177)">
                                        <div class="col "><img class="img-fluid "
                                                src="{{ URL::to('public/uploads/product/' . $cart['product_image']) }}"
                                                style="height:100px; width:100px ">
                                        </div>

                                        <div class="col cart_description">

                                            <div class="row">{{ $cart['product_name'] }}</div>
                                        </div>
                                        {{--              <div class="col cart_description">

                                            <div class="row">{{ $cart['product_quantity'] }}</div>
                                        </div> --}}
                                        <div class="col cart_price">

                                            {{ number_format($cart['product_price'], 0, ',', '.') }}VNĐ

                                        </div>


                                        <div class="col">
                                            <div class=" row">

                                                <input class="cart_quantity" type="number" min="1"
                                                    name="cart_qty[{{ $cart['session_id'] }}]"
                                                    value="{{ $cart['product_qty'] }}" size="1"
                                                    style="height: 30px;width: 50px;">
                                                {{-- <input type="hidden" name="rowId_cart" value="{{ $v_content->rowId }}"
                                                    class="form-control"> --}}
                                                <input type="submit" value="cập nhật" name="update_qty"
                                                    class="btn2 btn_default btn-sm" style="background-color: #000;">

                                            </div>
                                        </div>
                                        <div class="col cart_total">
                                            <p class="cart_total_price">
                                                {{ number_format($subtotal, 0, ',', '.') }}VNĐ
                                            </p>
                                        </div>

                                        <div class="cart_delete"><a class="cart_quantity_delete"
                                                href="{{ url('/del-product/' . $cart['session_id']) }}"><i
                                                    class="fa fa-times" style="font-size: 14px"></i></a></span>
                                        </div>
                                    </div>
                                @endforeach

                        </div>
                    </form>
                </div>


                <div class="col-md-12 summary">
                    <div style="font-size:20px">
                        <b>Tổng Chi Phí</b>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;">Tổng số lượng: {{ number_format($sl) }}</div>
                        <div class="col text-right"> {{ number_format($total, 0, ',', '.') }}VNĐ</div>
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
                        <div class="col text-right"><b>{{ number_format($total, 0, ',', '.') }}VNĐ</b></div>

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
                {{--   @else
                        <div class="row">
                            @php
                                echo 'Làm ơn thêm sản phẩm vào giỏ hàng';
                            @endphp</div> --}}
                @endif




            </div>

            {{--  @else
                <div class="row ">

                    @php
                        echo 'Làm ơn thêm sản phẩm vào giỏ hàng';
                    @endphp

                </div>
                @endif --}}



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
