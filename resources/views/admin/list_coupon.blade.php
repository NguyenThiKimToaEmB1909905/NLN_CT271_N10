@extends('admin_layout')
@section('admin_content')
    <section>
        <div class="mt-2 p-5 ">
            <h5 class="text-muted my-2">Liệt kê Mã giảm giá</h5>

            <?php
            $message = Session::get('message'); /* lấy messages bên AdminContrller chổ đăng  nhập */
            if ($message) {
                /* nếu có tồn tại thì */
                echo '<span class="text-alert pt-2 text-success">', $message, '</span>'; /* in ra cái dòng tin nhắn Mật khẩu hoăc Email sai..... */
                Session::put('message', null); /* chỉ hiện thị đúng 1 lần không cho hiển thị nữa */
            }
            ?>
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

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên mã giảm giá</th>
                        <th>Mã giảm giá</th>
                        <th>SL Mã giảm giá</th>
                        <th>Điều kiện giảm giá</th>
                        <th>Số giảm</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($coupon as $key => $cou)
                        @php
                            $i++;
                        @endphp
                        <tr>

                            <td>{{ $i }}</td>
                            <td>{{ $cou->coupon_name }}</td>
                            <td>{{ $cou->coupon_code }}</td>
                            <td>{{ $cou->coupon_times }}</td>

                            <td><span class="text-ellipsis">
                                    <?php
                            if ($cou->coupon_condition == 1) {
                            ?>
                                    Giảm theo %
                                    <?php
                            } else {
                            ?>
                                    Giảm theo tiền
                                    <?php
                            }
                            ?>
                                </span></td>
                            <td><span class="text-ellipsis">
                                    <?php
                            if ($cou->coupon_condition == 1) {
                            ?>
                                    Giảm {{ $cou->coupon_number }}%
                                    <?php
                            } else {
                            ?>
                                    Giảm {{ $cou->coupon_number }}k
                                    <?php
                            }
                            ?>
                                </span></td>
                            <td><span class="text-ellipsis"></span></td>
                            <td>

                                <a onclick="return confirm('Bạn có chắc muốn xóa danh mục này không?')"
                                    href="{{ URL::to('/delete-coupon/' . $cou->coupon_id) }}" class="active"
                                    ui-toggle-class="">
                                    <i class=" btn btn btn-outline-danger bi bi-trash-fill  text"></i></a>
                            </td>



                            </td>
                        </tr>

                        </tr>
                    @endforeach
                </tbody>
            </table>



            {{-- <div th:each="book : ${books} " class="mt-3">
                        <div class="alert alert-warning">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img style="width: 90%; height: 200px;"
                                        th:src="@{'/image/webContent/BookCoverImages/'+${book.bookCover}}"
                                        alt="Image not fount" />
                                </div>
                                <div class="col-sm-5">
                                    <h5 class="" th:text="${book.bookTitle}"></h5>
                                    <small th:text="${book.bookAuthor}"></small><br>
                                    <small><b>Remaning Books : </b><span th:text="${book.bookQuantity}"></span></small>
                                    <br>
                                    
                                    <small
                                        class="text-small text-muted">Lorem ipsum dolor sit
                                        amet, consectetur adipisicing elit. Aperiam id architecto
                                        quibusdam.</small>
                                        
                                </div>
                                <div class="col-sm-4">
                                    <small>Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Dolores tempora!</small>
                                    <div class="text-right bottom">
                                        <button
                                            th:attr="onclick=|viewOrderDitails('${ book.bookId }')|"
                                            
                                            class="btn btn-outline-info">Please wait..</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  --}}

            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-5 text-center">
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        {{-- {{ $all_product->render() }} --}}
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
