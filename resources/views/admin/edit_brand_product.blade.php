@extends('admin_layout')
@section('admin_content')
    <section>
        <div class="mt-2 p-5 ">
            <h5 class="text-muted my-2">Cập Nhật Thông Tin Tác Giả</h5>
            <?php
            $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
            if ($message) {
                /* nếu có tồn tại thì */
                echo '<span class="text-alert" style="color: rgb(249, 1, 1); font-weight: 200px">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
            }
            ?>
            @foreach ($edit_brand_product as $key => $edit_value)
                <div class="fullDivider"></div>

                <div class="m-md-4 card card-body addBookCard">
                    <form role="form" action="{{ URL::to('/update-brand-product/' . $edit_value->brand_id) }}"
                        method="post">
                        {{ csrf_field() }}
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="col">
                                <small class=" text-small text-muted ">Tên Tác Giả </small>
                                <div class="form-outline">
                                    <input type="text" value="{{ $edit_value->brand_name }}"class="form-control"
                                        name="brand_product_name" id="exampleInputPassword1" placeholder="Tên Tác Giả"
                                        required="">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mb-4">


                            <div class="col">
                                <small class=" text-small text-muted ">Thông tin Tác Giả</small>
                                <div class="form-outline">
                                    <textarea style="resize:none" rows="5" class="form-control" name="brand_product_desc" required="">{{ $edit_value->brand_desc }}</textarea>
                                    <div class="invalid-feedback"></div>

                                </div>
                            </div>


                        </div>

                        <button type="submit" name="update_brand_product" class="btn btn-primary btn-block mb-4">Cập
                            nhật</button>
                    </form>

                </div>
            @endforeach
        </div>
    </section>
@endsection
