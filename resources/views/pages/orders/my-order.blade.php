@extends('layout')
@section('content')
    <br><br><br><br><br><br>
    <section style="font-size: 18px ">
        <div class="container">
            <section id="cart_items">
                <div class="container col-sm-12">
                    <div class="breadcrumbs">
                        <ol class="breadcrumb">
                            <li><a href="{{ URL::to('/trang-chu/') }}">Home</a></li>
                            <li class="active">Lịch sử đơn hàng</li>
                        </ol>
                    </div>
                </div>
                <div class="shopper-informations col-sm-12 ">

                    <div class="table-responsive">
                        <?php
                        $message = Session::get('message');
                        if ($message) {
                            /* nếu có tồn tại thì */
                            echo '<span class="text-alert" style="color: rgb(249, 1, 1); font-weight: 200px">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                            Session::put('message', null);
                        }
                        ?>
                        <table class="table table-striped b-t b-light panel panel-default">
                            <thead class="panel-heading " style="background: #939191; height: 50px">
                                <tr>

                                    <th>Thứ tự</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Tình trạng</th>

                                    <th style="width:30px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($order as $key => $ord)
                                    @php
                                        $i++;
                                    @endphp
                                    <tr>
                                        <td><i>{{ $i }}</i></label></td>
                                        <td>{{ $ord->order_code }}</td>
                                        <td>{{ $ord->created_at }}</td>
                                        <td>
                                            @if ($ord->order_status == 1)
                                                Đang chờ duyệt
                                            @else
                                                Đang giao
                                            @endif
                                        </td>


                                        <td>
                                            <a href="{{ URL::to('/view-myorder/' . $ord->order_code) }}"
                                                class="active styling-edit" ui-toggle-class="">
                                                <i class=" btn bg-dark text-warning text-active">Chi tiết đơn hàng</i>
                                            </a>



                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>

        </div>
    </section>
    <style>

    </style>
@endsection
