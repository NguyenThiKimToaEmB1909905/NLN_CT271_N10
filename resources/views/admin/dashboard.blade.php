@extends('admin_layout')
@section('admin_content')
    <section>
        <div class="container p-sm-5">
            <h5 class="text-muted my-2">Admin Dashboard</h5>
            <div class="fullDivider"></div>
            <div class="row d-flex mt-5">
                <div class=" count-card mt-3 p-2">
                    <div class="row">
                        <div class="col-sm-5 text-center pt-3">
                            <img class="dashImg" src="{{ URL::to('resources/image/webImg/books.png') }}" alt="" />

                        </div>
                        <div class="col-sm-7">
                            <h2 class="text-warning">Books</h2>

                            <small class="text-info"></small><br />
                            <small class="text-info m-up-5" th:text="${'Old book  '+oldBooks}"></small> <br />
                            <small class="text-info m-up-10" th:text="'Total books '+${totalBooks}"></small>



                        </div>
                    </div>
                </div>

                <div class=" count-card mt-3 p-2">
                    <div class="row">
                        <div class="col-sm-5 text-center pt-4">
                            <img style="width: 80%; height: 100%" class="dashImg"
                                src="{{ URL::to('resources/image/webImg/users.png') }}" alt="" />
                        </div>
                        <div class="col-sm-7">
                            <h2 class="text-primary">Users</h2>
                            <h6 class="text-muted">
                                <span class="text-info" th:text="${totalUsers}"></span> users
                                present
                            </h6>


                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex ">
                <div class=" count-card mt-3 p-2">
                    <div class="row">
                        <div class="col-sm-5 text-center pt-3">
                            <img class="dashImg" src="{{ URL::to('resources/image/webImg/stores.png') }}" alt="" />
                        </div>
                        <div class="col-sm-7">
                            <h2 class="text-success">Stores</h2>

                            <small class="text-info" th:text="'total stores ' +${totalStores}"></small><br />
                            <i class="text-small m-up-5 fa-solid fa-warning text-danger"></i> <small
                                class="text-info m-up-5" th:text="${'Uncheck stores : '+unCheckStore.size()}"></small>

                        </div>
                    </div>
                </div>

                <div class=" count-card mt-3 p-2">
                    <div class="row">
                        <div class="col-sm-5 text-center pt-3">
                            <img style="width: 60%; height: 100%" class="dashImg"
                                src="{{ URL::to('resources/image/webImg/orders.png') }}" alt="" />
                        </div>
                        <div class="col-sm-7">
                            <h2 class="text-info">Orders</h2>

                            <small class="text-info" th:text="'Total Orders ' +${totalOrders}"></small><br />
                            <i class="text-small m-up-5 fa-solid fa-warning text-danger"></i> <small
                                class="text-info m-up-5" th:text="${'Unplace Orders : '+unCheckOrder.size()}"></small>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-md-6 ">
                    Unckeck Stores
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>#ID</td>
                                <td>Name</td>
                                <td>Owener</td>
                                <td>Date</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr th:each="bookStore : ${bookStores}" class="pointer"
                                th:attr="onclick=|clickOnStore('${bookStore.storeId}')|">
                                <td th:text="${bookStore.storeId}">1234</td>
                                <td th:text="${bookStore.storeName}">name</td>
                                <td th:text=${bookStore.owner.userName}>owner name</td>
                                <td th:text=${bookStore.startdate}>date</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="col-md-6 ">
                    orders tables
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>#ID</td>
                                <td>B.Name</td>
                                <td>C.Name</td>
                                <td>Date</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr th:each="bookOrder : ${bookOrders}" class="pointer"
                                th:attr="onclick=|clickOnOrder('${bookOrder.orderId}')|">
                                <td th:text="${bookOrder.orderId}">12</td>
                                <td th:text="${bookOrder.orderedBooks.bookTitle}">book name</td>
                                <td th:text=${bookOrder.OrderPersonName}>customer name</td>
                                <td th:text=${bookOrder.orderDate}>customer name</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <script>
                function clickOnOrder(id) {
                    window.location.assign("/admin/searchOrder/" + id);
                }

                function clickOnStore(id) {
                    window.location.assign("/admin/searchStore/" + id);
                }
            </script>
    </section>
@endsection
