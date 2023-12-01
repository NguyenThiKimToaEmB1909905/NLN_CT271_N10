@extends('admin_layout')
@section('admin_content')
    <section>
        <div class="mt-2 p-5 ">
            <h5 class="text-muted my-2">Thêm Mã giảm giá</h5>
            <?php
            $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
            if ($message) {
                /* nếu có tồn tại thì */
                echo '<span class="text-alert pt-2 text-success">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
            }
            ?>
            <div class="fullDivider"></div>

            <div class="m-md-4 card card-body addBookCard">
                <form role="form" action="{{ URL::to('/insert-coupon-code') }}" method="post" enctype="multipart/form-data">
                    {{-- thường để gửi ảnh lên csdl thì phải có trường enctype="multipart/form-data" --}}
                    {{ csrf_field() }}
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <small class=" text-small text-muted ">Tên mã giảm giá </small>
                            <div class="form-outline">
                                <input type="text" class="form-control" name="coupon_name" id="exampleInputPassword1"
                                    placeholder="Tên danh mục" required="">
                                <div class="invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <small class=" text-small text-muted ">Mã giảm giá</small>
                            <div class="form-outline">
                                <input type="text" class="form-control" name="coupon_code" id="exampleInputPassword1"
                                    required="">
                                <div class="invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <small class=" text-small text-muted ">Số lượng Mã</small>
                            <div class="form-outline">
                                <input type="text" class="form-control" name="coupon_times" id="exampleInputPassword1"
                                    required="">
                                <div class="invalid-feedback">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <small class=" text-small text-muted ">Tính năng mã</small>
                            <div class="form-outline">
                                <select class="form-control input-xl m-bot15" name="coupon_condition">

                                    <option value="0">---chọn---</option>
                                    <option value="1">Giảm theo phần trăm</option>
                                    <option value="2">Giảm theo tiền</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <small class=" text-small text-muted ">Nhập số % hoặc giá tiền</small>
                            <div class="form-outline">
                                <input style="resize:none" rows="5" class="form-control" name="coupon_number"
                                    required="">
                                <div class="invalid-feedback"></div>

                            </div>
                        </div>

                    </div>








                    <button type="submit" class="btn btn-primary btn-block mb-4">Thêm Mã</button>
                </form>

            </div>
        </div>



        <script th:if="${alert.equals('saveBook')}">
            Swal.fire({
                icon: 'success',
                title: 'Book Saved',
                width: 550,
                padding: '1em',
                text: "Your book has bean publish to sell. book data add successfully to your database !!",
                backdrop: `
            rgba(255,233,150,0.3)
          `
            });
        </script>
        <script th:if="${alert.equals('priceError')}">
            Swal.fire({
                icon: 'warning',
                width: 550,
                padding: '1em',
                text: "Book price not be 0 or book discount not be greter than 100% ",
                backdrop: `
            rgba(255,233,150,0.3)
          `
            });
        </script>
        <script th:if="${alert.equals('bookNotSave')}">
            Swal.fire({
                icon: 'error',
                title: 'Book Not Saved !!',
                width: 550,
                padding: '1em',
                text: "Your book has bean publish to sell. book data add successfully to your database !!",
                backdrop: `
            rgba(255,233,150,0.3)
          `
            });
        </script>

    </section>
@endsection
