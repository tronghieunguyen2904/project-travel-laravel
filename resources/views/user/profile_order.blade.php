@extends('layout/layout_user_detail')
@section('product')
<style>
.heading,
.row {
    border-bottom: 1px solid #dddddd;
    padding: 10px;
}

.wrapper.p-4,
.col-md-9.col-12.right.ps-md-4 {
    border: 2px solid #dddddd;
    border-radius: 10px;
}

.heading {
    width: 100%;
    margin-bottom: 10px;
}

/* .form-control{
    width:500px;
} */
</style>
<div class="profile">
    <div class="container">
        <div class="row py-4">


            <div class="col-md-3 col-12 left">
                <div class="wrapper p-4">
                    <div class="info d-flex align-items-center mb-md-3">
                        <div class="image me-3">
                            <a href="#">
                                <img src="https://lh3.googleusercontent.com/a/AEdFTp7BRo3OrgUrayAJtQ1Btht6vF00I8NpN9pY7Job=s96-c"
                                    class="rounded-circle" />
                            </a>
                        </div>
                        <div class="info-wrapper">
                            <div>
                                <h5 class="fw-bold">{{session()->get('user')['name']}}</h5>
                                <small><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="016968647436353433323241666c60686d2f626e6c">[email&#160;protected]</a></small>
                            </div>
                            <span id="toggle-profile-menu" class="d-lg-none">
                                <i class="icon icon--chevron-down"></i>
                            </span>
                        </div>
                    </div>
                    <nav class="profile-links py-3">
                        <ul class="list-unstyled mb-0 py-3 pt-md-1">
                            <li class="mb-1">
                                <a class="
                          d-inline-flex
                          align-items-center
                          rounded
                          collapsed
                        " data-bs-toggle="collapse" data-bs-target="#getting-started-collapse" aria-expanded="false">
                                    <h6 class="fw-bold">Tài khoản</h6>
                                </a>
                                <div class="collapse show" id="getting-started-collapse">
                                    <ul class="list-unstyled fw-normal pb-1 small">
                                        <li>
                                            <a href="/user/profile" class="d-inline-flex
                                align-items-center
                                rounded
                                active
                              ">
                                                Thông tin cá nhân
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/user/profile/changePassword"
                                                class="d-inline-flex align-items-center rounded  ">
                                                Đổi mật khẩu
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-1">
                                <a class="d-inline-flex align-items-center rounded  " href="/Profile/Order">
                                    <h6 class="fw-bold">Đơn đặt chỗ</h6>
                                </a>
                            </li>
                            <li class="mb-1">
                                <a class="d-inline-flex align-items-center rounded  " href="#">
                                    <h6 class="fw-bold">Đánh giá của Quý khách</h6>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-9 col-12 right ps-md-4">
                <div class="wrapper p-md-4">
                    <div class="heading">
                        <h5 class="fw-bold">Danh sách tour </h5>
                        <p class="text-muted mb-4">
                            Danh sách các tour quý khách đã đặt
                        </p>
                    </div>
                    <div class="container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Mã đơn hàng</th>
                                    <th scope="col">Tên người đặt</th>
                                    <th scope="col">Thời gian đặt</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($order as $items)
                                <tr>
                                    <th scope="row">{{$items->id_order_tour}}</th>
                                    <td>{{$items->name}}</td>
                                    <td>{{$items->order_time}}</td>
                                    <td>
                                        @if($items->status == 'Yes')
                                            <p class="alert alert-success" style="width:130px;text-align:center"> Đã xác nhận</p>
                                        @else
                                               <p class="alert alert-danger" style="width:130px"> Chưa xác nhận</p>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/user/profile/detail_order/{{$items->id_order_tour}}" class="btn btn-primary">Xem</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection