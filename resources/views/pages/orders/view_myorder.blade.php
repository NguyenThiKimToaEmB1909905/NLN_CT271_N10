@extends('layout')
@section('content')
    <br><br><br><br><br><br>
    <section style="margin-bottom: 100px">
        <div class="container">
            <section id="cart_items">
                <div class="container col-sm-12 "style="height:50px">
                    <div class="breadcrumbs">
                        <ol class="breadcrumb">
                            <li><a href="{{ URL::to('/trang-chu/') }}">Home</a></li>
                            <li class="active">Chi Tiết đơn hàng</li>
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
                </div>
                <br><br><br><br>
                <div class="row my-5  ">
                    <div class="col-md-4 ">
                        <div class="panel panel-default">
                            <div class="panel-heading " style="font-size: 20px">
                                <center> Thông tin đăng nhập</center>
                            </div>

                            <table class="table table-hover panel panel-default  table-striped">
                                <thead>
                                    <tr>
                                        <th>Tên KH</th>

                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $client->client_name }}</td>

                                        <td>{{ $client->client_email }}</td>
                                    </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <div class="panel panel-default">
                            <div class="panel-heading " style="font-size: 20px">
                                <center> Địa chỉ giao hàng</center>
                            </div>

                            <table class="table table-hover panel panel-default  table-striped">
                                <thead>
                                    <tr>
                                        <th>Tên </th>
                                        <th>Địa chỉ</th>
                                        <th>SĐT</th>
                                        <th>Email</th>
                                        <th>Ghi chú</th>
                                        {{-- <th>TTTT</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>{{ $shipping->shipping_name }}</td>
                                    <td>{{ $shipping->shipping_address }}</td>
                                    <td>{{ $shipping->shipping_sdt }}</td>
                                    <td>{{ $shipping->shipping_email }}</td>
                                    <td>{{ $shipping->shipping_note }}</td>
                                    {{-- <td>
                                    @if ($payment->payment_method == 1)
                                        Chuyển khoản
                                    @else
                                        Tiền mặt
                                    @endif
                                </td> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                <div class="table-agile-info">

                    <div class="panel panel-default">
                        <div class="panel-heading " style="font-size: 20px">
                            <center>Chi Tiết Đơn Hàng</center>
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
                                        <th>STT</th>
                                        <th>Tên sản phẩm</th>

                                        {{-- <th>Mã giảm giá</th> --}}
                                        {{-- <th>Phí ship hàng</th> --}}
                                        <th>Số lượng đặt</th>
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
                                            <td>{{ $details->product_sales_quantity }}</td>

                                            <td>{{ number_format($details->product_price, 0, ',', '.') }}đ</td>
                                            <td>{{ number_format($subtotal, 0, ',', '.') }}đ</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td class="text-right" colspan="4">



                                            Tổng Tiền Đơn Hàng Đã Đặt:
                                        </td>
                                        <td class="text-dark" colspan="5" style="">



                                            <b>{{ number_format($total, 0, ',', '.') }}đ</b>
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

                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

        </div>
    </section>
@endsection
