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
                                <a class="d-inline-flex align-items-center rounded  " href="/user/profile/order">
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
                        <h5 class="fw-bold">Thông tin cá nhân</h5>
                        <p class="text-muted mb-4">
                            Cập nhật thông tin của Quý khách và tìm hiểu các thông tin này
                            được sử dụng ra sao.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-12">Họ và tên</div>
                        <div class="col-md-9 col-12"><span>{{session()->get('user')['name']}}</span></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-12">Địa chỉ Email </div>
                        <div class="col-md-9 col-12"><span>{{session()->get('user')['email']}}</span></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-12">Số điện thoại</div>
                        <div class="col-md-9 col-12"><span>{{session()->get('user')['phone']}}</span></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-12">Địa chỉ</div>
                        <div class="col-md-9 col-12"><span>
                                @if(session('user')['address'] == null)
                                <span>Chưa có thông tin</span>
                                @else
                                <p>{{session()->get('user')['address']}}</p>
                                @endif
                            </span></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-12">Giới tính</div>
                        <div class="col-md-9 col-12"><span>
                                @if(session('user')['gender'] == null)
                                <span>Chưa có thông tin</span>
                                @else
                                <p>{{session()->get('user')['gender']}}</p>
                                @endif
                            </span></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-12">Ngày sinh</div>
                        <div class="col-md-9 col-12"><span> 
                            @if(session('user')['date'] == null)
                                <span>Chưa có thông tin</span>
                                @else
                                <p>{{session()->get('user')['date']}}</p>
                                @endif
                            </span></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection