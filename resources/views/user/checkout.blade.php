@extends('layout/layout_user_detail')
@section('product')
<div class="product-container">
    <div class="container-text" style="margin-top:35px;margin-bottom:20px">
        <h1>Thông tin đặt tour</h1>
    </div>
    <div class="tab-panels">
        <div class="panels-container">
            <div class="panels-row">
                <div class="col-left">
                    <div class="box-order">
                        <div class="container-text">
                            <h1>Thông tin người đặt</h1>
                        </div>
                        <p>Tên khách hàng : <b>{{$data['name']}}</b></p>
                        <p>Email : <b>{{$data['email']}}</b></p>
                        <p>Số Điện Thoại : <b>{{$data['phone']}}</b></p>
                        <p>Địa chỉ : <b>{{$data['address']}}</b></p>
                    </div>
                </div>
                <div class="col-right-checkout">
                    <div class="info-product-checkout">
                        <div class="product-img">
                            <img src="/assets/layout_user/img/{{$t->img_tour}}" alt="">
                        </div>
                        <div class="product-content">
                            <div>
                                <div class="product-item-detail-review">
                                    <div class="product-item-detail-point">
                                        <span>9.8</span>
                                    </div>
                                    <div class="product-item-detail-feedback">
                                        <h6>Tuyệt vời</h6>
                                    </div>
                                </div>
                                <p class="title-text">{{$t->name_tour}}</p>
                                <div class="entry">
                                    <span>Mã tour: <b>{{$t->id_tour}}</b></span>
                                    <span>Ngày khởi hành: <b>{{$t->date_go}}</b></span>
                                    <span>Thời gian : <b>4 ngày</b></span>
                                    <span>Nơi khởi hành: <b>{{$t->place_go}}</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <table class='table table-bordered table-striped'>
            <thead>
                <tr>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Số CMND</th>
                    <th scope="col">Ngày sinh</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataOrder as $item)
                <tr>
                    <td>{{$item->name_customer}}</td>
                    <td>{{$item->sex}}</td>
                    <td>{{$item->CMND}}</td>
                    <td>{{$item->birth}}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="3">Thành tiền:</td>
                    <td>{{number_format(($qtyAdult * $t->adult_price) + ($qtyChild * $t->child_price))}}đ</td>
                </tr>
            </tbody>
        </table>
        <div class="checkout">
        <div class="text-heading">
            <h2>Thanh toán</h2>
            <div class="">
                <h3>Các hình thức thanh toán</h3>
            </div>
            <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                action="/user/chekout/vnpay">
                @csrf
                <input type="hidden" name="id_order_tour" value="$data['id_order_tour']">
                <input type="hidden" name="total_price" value='{{($qtyAdult * $t->adult_price) + ($qtyChild * $t->child_price)}}'>
                <input type="submit" name="redirect" id="redirect" value="Thanh toán PayVN">
            </form>
        </div>
    </div>
    </div>
</div>


@endsection