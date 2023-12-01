@extends('admin_layout')
@section('admin_content')
    <section>

        <div class="mt-2 p-5 ">
            <h5 class="text-muted my-2">Chi Tiết Đơn Hàng</h5>
            <div class="fullDivider"></div>


            <section id="cart_items">

                <div class="row my-5  ">
                    <div class="col-md-4 ">

                        <div class="panel-heading" style="background:#cfcfc4">
                            Thông tin khách hàng
                        </div>
                        <?php
                        $message = Session::get('message');
                        if ($message) {
                            echo '<span class="text-alert">' . $message . '</span>';
                            Session::put('message', null);
                        }
                        ?>
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
                    <div class="col-md-8 ">
                        <div class="panel-heading" style="background:#cfcfc4">
                            Thông tin vận chuyển
                        </div>
                        <?php
                        $message = Session::get('message');
                        if ($message) {
                            echo '<span class="text-alert">' . $message . '</span>';
                            Session::put('message', null);
                        }
                        ?>
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
                            </tbody>
                        </table>
                    </div>
                </div>



                <div class="">

                    <div class="">
                        <div class="panel-heading" style="background:#cfcfc4">
                            Sản Phẩm Trong Đơn Hàng
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

                                                <input {{ $order_status == 2 ? 'disabled' : '' }}
                                                    class="order_qty_{{ $details->product_id }}"
                                                    value="{{ $details->product_sales_quantity }}"
                                                    name="product_sales_quantity">

                                                <input type="hidden" name="order_qty_storage"
                                                    class="order_qty_storage_{{ $details->product_id }}"
                                                    value="{{ $details->product->product_quantity }}">

                                                <input type="hidden" name="order_code" class="order_code"
                                                    value="{{ $details->order_code }}">

                                                <input type="hidden" name="order_product_id" class="order_product_id"
                                                    value="{{ $details->product_id }}">

                                                @if ($order_status != 2)
                                                    {{-- <button class="btn btn-default update_quantity_order"
                                                        data-product_id="{{ $details->product_id }}"
                                                        name="update_quantity_order">Cập
                                                        nhật</button> --}}
                                                @endif

                                            </td>
                                            <td>{{ number_format($details->product_price, 0, ',', '.') }}đ</td>
                                            <td>{{ number_format($subtotal, 0, ',', '.') }}đ</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td class="text-right" colspan="5">



                                            Tổng Tiền Đơn Hàng Đã Đặt:
                                        </td>
                                        <td class="text-dark" colspan="6" style="">



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
                                    <tr>
                                        <td colspan="6">
                                            @foreach ($order as $key => $or)
                                                @if ($or->order_status == 1)
                                                    <form>
                                                        @csrf
                                                        <select class="form-control order_details">
                                                            <option value="">----Chọn hình thức đơn hàng-----</option>
                                                            <option id="{{ $or->order_id }}" selected value="1">Chưa
                                                                xử lý
                                                            </option>
                                                            <option id="{{ $or->order_id }}" value="2">Đã xử lý-Đã
                                                                giao hàng
                                                            </option>
                                                            <option id="{{ $or->order_id }}" value="3">Hủy đơn
                                                                hàng-tạm giữ
                                                            </option>
                                                        </select>
                                                    </form>
                                                @elseif($or->order_status == 2)
                                                    <form>
                                                        @csrf
                                                        <select class="form-control order_details">{{-- class teen order_details là để điều khiển alert thông báo --}}
                                                            <option value="">----Chọn hình thức đơn hàng-----</option>
                                                            <option id="{{ $or->order_id }}" value="1">Chưa xử lý
                                                            </option>
                                                            <option id="{{ $or->order_id }}" selected value="2">Đã xử
                                                                lý-Đã
                                                                giao
                                                                hàng</option>
                                                            <option id="{{ $or->order_id }}" value="3">Hủy đơn
                                                                hàng-tạm giữ
                                                            </option>
                                                        </select>
                                                    </form>
                                                @else
                                                    <form>
                                                        @csrf
                                                        <select class="form-control order_details">
                                                            <option value="">----Chọn hình thức đơn hàng-----</option>
                                                            <option id="{{ $or->order_id }}" value="1">Chưa xử lý
                                                            </option>
                                                            <option id="{{ $or->order_id }}" value="2">Đã xử lý-Đã
                                                                giao hàng
                                                            </option>
                                                            <option id="{{ $or->order_id }}" selected value="3">Hủy
                                                                đơn
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

        </div>
    </section>
@endsection
