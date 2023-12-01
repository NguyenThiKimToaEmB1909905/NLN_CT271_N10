@extends('admin_layout')
@section('admin_content')
    <section>
        <div class="mt-2 p-5 ">
            <h5 class="text-muted my-2">Thêm Tác Giả</h5>
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
                <form role="form" action="{{ URL::to('/save-brand-product') }}" method="post">
                    {{ csrf_field() }}
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <small class=" text-small text-muted ">Tên Tác Giả </small>
                            <div class="form-outline">
                                <input type="text" class="form-control" name="brand_product_name"
                                    id="exampleInputPassword1" placeholder="Tên Tác Giả" required="">
                                <div class="invalid-feedback">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mb-4">


                        <div class="col">
                            <small class=" text-small text-muted ">Thông tin Tác Giả</small>
                            <div class="form-outline">
                                <textarea style="resize:none" rows="5" class="form-control" name="brand_product_desc" required=""></textarea>
                                <div class="invalid-feedback"></div>

                            </div>
                        </div>


                    </div>
                    <div class="row mb-4">


                        <div class="col">
                            <small class=" text-small text-muted ">Hiển thị</small>
                            <div class="form-outline">
                                <select class="form-control input-sm m-bot15" name="brand_product_status">
                                    <option value="1">Ẩn</option>
                                    <option value="0">Hiện</option>

                                </select>
                                <div class="invalid-feedback"></div>

                            </div>
                        </div>




                    </div>





                    <button type="submit" name=" add_brand_product" class="btn btn-primary btn-block mb-4">Thêm Tác
                        giả</button>
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
