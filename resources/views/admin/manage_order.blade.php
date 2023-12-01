@extends('admin_layout')
@section('admin_content')
    <section>
        <div class="mt-2 p-5 ">
            <h5 class="text-muted my-2">Liệt kê đơn hàng</h5>
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

                </div>
            </nav>
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span class="text-alert">' . $message . '</span>';
                Session::put('message', null);
            }
            ?>

            <table class="table table-hover">

                <thead>
                    <tr>
                        <th>Thứ tự</th>
                        <th>Mã đơn hàng</th>
                        <th>Ngày tháng đặt hàng</th>
                        <th>Tình trạng đơn hàng</th>

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
                                    Đơn hàng mới
                                @else
                                    Đã xử lý
                                @endif
                            </td>


                            <td>
                                <a href="{{ URL::to('/view-order/' . $ord->order_code) }}" class="active styling-edit"
                                    ui-toggle-class="">
                                    <i class="fa fa-eye text-success text-active"></i></a>



                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>



            

            <footer class="panel-footer">
                <div class="row">

                    <div class="col-sm-7 text-right text-center-xs">
                        {{--  {{ $all_product->render() }} --}}
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
