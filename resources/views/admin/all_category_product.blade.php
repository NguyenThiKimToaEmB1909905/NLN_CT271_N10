@extends('admin_layout')
@section('admin_content')
    <section>
        <div class="mt-2 p-5 ">
            <h5 class="text-muted my-2">Liệt kê thể loại sách</h5>
            <div class="fullDivider"></div>

            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="#">All
                            </a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Most
                                Rated</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Most
                                Populer</a></li>
                    </ul>
                    <form action="#" class="form-inline my-1000 my-lg-10">
                        <div class="input-group mb-2">
                            <input type="text" class="bookSearchName form-control rounded-input" placeholder="Username">
                            <div class="input-group-append">
                                <div class="input-group-text bg-dyellow pointer" style="border-radius: 25px;">
                                    <i class=" fa fa-search"></i>
                                </div>
                            </div>
                        </div>

                    </form>
                    {{-- <form class="form-inline mt-2 my-lg-0 col-md-4 p-2">
                        <div class="input-group mb-10">
                            <input type="text" class="form-control rounded-input" id="inlineFormInputGroup"
                                placeholder="Username">
                            <div class="input-group-append">
                                <div class="input-group-text bg-dyellow pointer" style="border-radius: 25px;">
                                    <i class=" fa fa-search"></i>
                                </div>
                            </div>
                        </div>

                    </form> --}}
                </div>
            </nav>
            <?php
            $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
            if ($message) {
                /* nếu có tồn tại thì */
                echo '<span class="text-alert" style="color: rgb(249, 1, 1); font-weight: 200px">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
            }
            ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên danh mục</th>
                        <th>Hiển thị</th>

                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($all_category_product as $key => $cate_pro)
                        @php
                            $i++;
                        @endphp
                        <tr>

                            <td>{{ $i }}</td>
                            <td>{{ $cate_pro->category_id }} </td>
                            <td>{{ $cate_pro->category_name }}</td>

                            <td><span class="text-ellipsis">
                                    <?php
                                if ($cate_pro->category_status == 0) {
                                ?>
                                    <a href="{{ URL::to('/unactive-category-product/' . $cate_pro->category_id) }}"
                                        class="btn btn-outline-info btn-sm"><span><i class="bi bi-eye-fill"></i></span></a>
                                    <?php
                                } else {
                                ?>
                                    <a
                                        href="{{ URL::to('/active-category-product/' . $cate_pro->category_id) }}"class="btn btn-outline-info btn-sm"><span><i
                                                class="bi bi-eye-slash-fill"></i></span></a>
                                    <?php
                                }
                                ?>
                                </span></td>
                            <td><span class="text-ellipsis"></span></td>
                            <td>
                                <a href="{{ URL::to('/edit-category-product/' . $cate_pro->category_id) }}"
                                    class="btn btn-outline-warning btn-sm" ui-toggle-class="">
                                    <i class="fa-solid fa-pen"></i></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa thương hiệu này không?')"
                                    href="{{ URL::to('/delete-category-product/' . $cate_pro->category_id) }}"
                                    class="active" ui-toggle-class="">
                                    <i class="btn btn btn-outline-danger bi bi-trash-fill  text"></i></a>
                            </td>
                        </tr>

                        </tr>
                    @endforeach
                </tbody>
            </table>


            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-5 text-center">
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        {{ $all_category_product->render() }}
                    </div>
                </div>
            </footer>
        </div>

        <script>
            function clickOnBook(id) {
                window.location.assign("/bookInfo/" + id);
            }

            function viewOrderDitails(id) {
                window.location.assign("/user/orderBookDetails/" + id);

            }
        </script>

        <script>
            function remove(bid) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Book display or hide action effect on your books!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes ,Sure!'
                }).then((result) => {

                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'POST',
                            url: '/user/removeBook',
                            data: JSON.stringify({
                                bid: bid
                            }),
                            dataType: 'json',
                            contentType: 'application/json',
                            cache: 'false',
                            processData: 'false',
                            success: function(response) {

                                if (response.status == 'success') {
                                    swal.fire({
                                        text: 'Changes Save Successfully',
                                        position: 'bottom',
                                        icon: 'info',
                                        showConfirmButton: false,
                                        toast: true,
                                        timer: 1500,
                                    })
                                    setTimeout(function() {
                                        window.location.reload()
                                    }, 1550);
                                } else if (response.status == 'error') {
                                    swal.fire("error", "Somthing Wrong", "error");
                                }
                            },
                            error: function(error) {
                                swal.fire("error", "Somthing Wrong", "error");
                                console.log("error (mybooks delete) : " + error);
                            }
                        })

                    }
                })
            }
        </script>
    </section>
@endsection
