@extends('admin_layout')
@section('admin_content')
    <section>
        <div class="mt-2 p-5 ">
            <h5 class="text-muted my-2">Thêm Sản Phẩm</h5>
            <?php
            $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
            if ($message) {
                /* nếu có tồn tại thì */
                echo '<span class="text-alert">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
            }
            ?>
            <div class="fullDivider"></div>

            <div class="m-md-4 card card-body addBookCard">
                <form role="form" action="{{ URL::to('/save-product') }}" method="post" enctype="multipart/form-data">
                    {{-- thường để gửi ảnh lên csdl thì phải có trường enctype="multipart/form-data" --}}
                    {{ csrf_field() }}
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <small class=" text-small text-muted ">Tên sách </small>
                            <div class="form-outline">
                                <input type="text" class="form-control" name="product_name" id="exampleInputPassword1"
                                    placeholder="Tên danh mục" required="">
                                <div class="invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <small class=" text-small text-muted ">Giá sách</small>
                            <div class="form-outline">
                                <input type="text" class="form-control" name="product_price" id="exampleInputPassword1"
                                    required="">
                                <div class="invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <small class=" text-small text-muted ">Số lượng sách</small>
                            <div class="form-outline">
                                <input type="text" class="form-control" name="product_quantity"
                                    id="exampleInputPassword1" required="">
                                <div class="invalid-feedback">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <small class=" text-small text-muted ">Mô tả sách </small>
                            <div class="form-outline">
                                <textarea style="resize:none" rows="5" class="form-control" name="product_desc" placeholder="Mô tả sách"
                                    required=""></textarea>
                                <div class="invalid-feedback">
                                </div>

                            </div>
                        </div>
                        <div class="col">
                            <small class=" text-small text-muted ">Nội dung sách</small>
                            <div class="form-outline">
                                <textarea style="resize:none" rows="5" class="form-control" name="product_content" placeholder="Nội dung sách"
                                    required="">  </textarea>
                                <div class="invalid-feedback"></div>

                            </div>
                        </div>
                    </div>
                    <!-- Text input -->


                    <!-- bookType and language  -->
                    <div class="row mb-4">
                        <div class="col">
                            <small class=" text-small text-muted ">Thể loại</small>
                            <div class="form-outline">
                                <select class="form-control input-xl m-bot15" name="product_cate">
                                    @foreach ($cate_product as $key => $cate)
                                        <option value="0">---chọn---</option>
                                        <option value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <small class=" text-small text-muted ">Thương hiệu</small>
                            <div class="form-outline">
                                <select class="form-control input-xl m-bot15" name="product_brand">
                                    @foreach ($brand_product as $key => $brand)
                                        <option value="0">---chọn---</option>
                                        <option value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Text input -->
                    <div class="form-outline mb-4">

                        <small class="text-small">Hình ảnh sách</small>
                        <input type="file" class="form-control"name="product_image" id="exampleInputPassword1"
                            required="">
                    </div>
                    <div class="form-outline mb-4">

                        <small class="text-small">Hiển thị</small>
                        <select class="form-control input-sm m-bot15" name="product_status">
                            <option value="1">Ẩn</option>
                            <option value="0">Hiện</option>

                        </select>
                    </div>

                    <!-- Message input -->
                    {{-- <div class="form-outline mb-4">
                        <small class="text-small">Ghi chú</small>
                        <textarea name="bookDescription" class="form-control" id="form6Example7" rows="4"></textarea>
                        <div class="invalid-feedback"></div>



                    </div> --}}

                    <!-- Submit button -->

                    <button type="submit" class="btn btn-primary btn-block mb-4">Thêm sách</button>
                </form>

            </div>
        </div>


        <!-- <script>
            var options = [];

            $('.dropdown-menu a').on(
                'click',
                function(event) {

                    var $target = $(event.currentTarget),
                        val = $target
                        .attr('data-value'),
                        $inp = $target
                        .find('input'),
                        idx;

                    if ((idx = options.indexOf(val)) > -1) {
                        options.splice(idx, 1);
                        setTimeout(function() {
                            $inp.prop('checked', false)
                        }, 0);
                    } else {
                        options.push(val);
                        setTimeout(function() {
                            $inp.prop('checked', true)
                        }, 0);
                    }

                    $(event.target).blur();

                    console.log(options);
                    $(".categoryInput").val(options);

                    return false;
                });
        </script> -->

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
