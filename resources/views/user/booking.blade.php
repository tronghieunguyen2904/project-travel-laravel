@extends('layout/layout_user_detail')
@section('product')
<div class="body">
    <div class="info-product">
        <div class="product-img">
            <img src="/assets/layout_user/img/{{$booking->img_tour}}" alt="">
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
                <p class="title-text">{{$booking->name_tour}}</p>
                <div class="entry">
                    <span>Mã tour: <b>{{$booking->id_tour}}</b></span>
                    <span>Ngày khởi hành: <b>{{$booking->date_go}}</b></span>
                    <span>Thời gian : <b>4 ngày</b></span>
                    <span>Nơi khởi hành: <b>{{$booking->place_go}}</b></span>
                </div>
            </div>
        </div>
    </div>
    <div class="text-heading">
        <h2>Nhập thông tin</h2>
        <div class="">
            <h3>Thông tin người đặt</h3>
        </div>
    </div>
    <form class="row g-3 needs-validation" action="/user/checkout/{{$booking->id_tour}}" method="post" novalidate>
        @csrf
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Họ và tên</label>
            <input type="text" class="form-control" id="validationCustom01" name="name" required value="{{session()->get('user')['name']}}">
            <div class="invalid-feedback">
                Vui lòng nhập họ và tên
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Email</label>
            <input type="email" class="form-control" id="validationCustom02" name="email" required value="{{session()->get('user')['email']}}">
            <div class="invalid-feedback">
                Vui lòng nhập email
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" id="validationCustom03" name="address" required value="{{session()->get('user')['address']}}">
            <div class="invalid-feedback">
                Vui lòng nhập địa chỉ
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="validationCustom03" name="phone" required value="{{session()->get('user')['phone']}}"> 
            <div class="invalid-feedback">
                Vui lòng nhập số điện thoại
            </div>
        </div>
        <div class="row col-md-12 justify-content-center ">
            <div class="col-md-12 col-12">
                <div class="row" id="qty-container">
                    <div class="col-6" id="">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-dark">Người lớn</p>
                            </div>
                            <div class="input-group-adult w-auto justify-content-end align-items-center">
                                <input type="button" value="-"
                                    class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                    data-field="quantity_adult">
                                <input type="number" step="1" max="10" value="1" name="quantity_adult"
                                    class="quantity-field border-0 text-center w-25" id="qty-adult">
                                <input type="button" value="+"
                                    class="button-plus border rounded-circle icon-shape icon-sm " data-field="quantity_adult">
                            </div>
                        </div>
                    </div>
                    <div class="col-6" id="qty-child">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-dark">Trẻ em</p>
                            </div>
                            <div class="input-group-child w-auto justify-content-end align-items-center">
                                <input type="button" value="-"
                                    class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                    data-field="quantity_child">
                                <input type="number" step="1" max="10" value="1" name="quantity_child"
                                    class="quantity-field border-0 text-center w-25" id="qty-child">
                                <input type="button" value="+"
                                    class="button-plus border rounded-circle icon-shape icon-sm lh-0"
                                    data-field="quantity_child">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Đồng ý với các điều khoản và điều kiện
                </label>
                <div class="invalid-feedback">
                    Bạn phải đồng ý các điều khoản trước khi đặt
                </div>
            </div>
        </div>
        <div class="text-heading">
            <div class="">
                <h3>Thông tin từng khách hàng</h3>
            </div>
            <div class="">
                <h3>Người lớn</h3>
            </div>
            <div id="row-info-adult">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Họ tên" name="detail_adult_name_1">
                    </div>
                    <div class="col">
                        <select class="form-select" id="validationCustom04" name="detail_adult_sex_1" required>
                            <option selected disabled value="">Giới tính</option>
                            <option>Nam</option>
                            <option>Nữ</option>
                            <option>Khác</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="CMND" name="detail_adult_id_1">
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" placeholder="Năm sinh" name="detail_adult_birth_1">
                    </div>            
                </div>
            </div>

            <div class="group-info" id="group-info">

            </div>
            <div class="">
                <h3>Trẻ Em</h3>
            </div>
            <div id="row-info-child">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Họ tên" name="detail_child_name_1" >
                    </div>
                    <div class="col">
                        <select class="form-select" id="validationCustom04" name="detail_child_sex_1" required>
                            <option selected disabled value="">Giới tính</option>
                            <option>Nam</option>
                            <option>Nữ</option>
                            <option>Khác</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="CMND" name="detail_child_id_1">
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" placeholder="Năm sinh" name="detail_child_birth_1">
                    </div>
                </div>
            </div>
            <div id="group-info-child">

            </div>
        </div>
        <div class="col-12">
            <input type="submit" class="submit-btn" value="Đặt tour">
        </div>
    </form>

</div>
</div>
<script>
const inputValueAdult = document.querySelector("#qty-adult");
const inputValueChild = document.querySelector("#qty-child");
const rowAdult = document.querySelector("#row-info-adult");
const rowChild = document.querySelector("#row-info-child");
const groupInfo = document.querySelector("#group-info");
const groupInfoChild = document.querySelector("#group-info-child");
// let valueAdult = inputValueAdult.value;
// console.log(valueAdult);
let text =
    '<form id="row-info"> <div class="row"> <div class="col"><input type="text" class="form-control" placeholder="Họ tên" name="detail_adult_name"></div><div class="col"> <select class="form-select" id="validationCustom04" name="detail_adult_sex" required><option selected disabled value="">Choose...</option><option>Nam</option><option>Nữ</option><option>Khác</option> </select> </div><div class="col"> <input type="text" class="form-control" placeholder="CMND" name="detail_adult_id"></div><div class="col"><input type="date" class="form-control" placeholder="Năm sinh" name="detail_adult_birth"> </div></div></form>';



// selectValueAdult.addEventListener('change', () => {
//     x = 0;
//     valueAdult = selectValueAdult.options[selectValueAdult.selectedIndex].text;
//     valueAdult = parseInt(valueAdult);
//     if (y < valueAdult) {
//         x = valueAdult - y;
//     } else {
//         x = y - valueAdult;
//     }
//     for (let i = 1; i <= x; i++) {
//         row.remove();
//     }
//     for (let i = 1; i <= valueAdult; i++) {
//         groupInfo.innerHTML = groupInfo.innerHTML + text;
//         z++;
//     }
//     y = z;
//     console.log(z);
//     console.log(valueAdult);
//     console.log(x);
// });


// selectValueChild.addEventListener('change', () => {
//     console.log(selectValueChild.options[selectValueChild.selectedIndex].text);
// });
</script>
<script>
function incrementValueAdult(e) {
    e.preventDefault();
    var fieldName = $(e.target).data('field');
    var parent = $(e.target).closest('div');
    currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

    if (!isNaN(currentVal)) {
        parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
    } else {
        parent.find('input[name=' + fieldName + ']').val(0);
    }
    groupInfo.innerHTML = groupInfo.innerHTML +
        '<div id="row-info-adult"> <div class="row"> <div class="col"><input type="text" class="form-control" placeholder="Họ tên" name="detail_adult_name_'+(currentVal+1)+'"></div><div class="col"> <select class="form-select" id="validationCustom04" name="detail_adult_sex_'+(currentVal+1)+'" required><option selected disabled value="">Choose...</option><option>Nam</option><option>Nữ</option><option>Khác</option> </select> </div><div class="col"> <input type="text" class="form-control" placeholder="CMND" name="detail_adult_id_'+(currentVal+1)+'"></div><div class="col"><input type="date" class="form-control" placeholder="Năm sinh" name="detail_adult_birth_'+(currentVal+1)+'"> </div></div></div>';
}

function decrementValueAdult(e) {
    e.preventDefault();
    var fieldName = $(e.target).data('field');
    var parent = $(e.target).closest('div');
    var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

    if (!isNaN(currentVal) && currentVal > 0) {
        parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
    } else {
        parent.find('input[name=' + fieldName + ']').val(0);
    }
    $("#row-info-adult").remove();
}

function incrementValueChild(e) {
    e.preventDefault();
    var fieldName = $(e.target).data('field');
    var parent = $(e.target).closest('div');
    currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

    if (!isNaN(currentVal)) {
        parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
    } else {
        parent.find('input[name=' + fieldName + ']').val(0);
    }
    groupInfoChild.innerHTML = groupInfoChild.innerHTML +
        '<div id="row-info-child"> <div class="row"> <div class="col"><input type="text" class="form-control" placeholder="Họ tên" name="detail_child_name_'+(currentVal+1)+'"></div><div class="col"> <select class="form-select" id="validationCustom04" name="detail_child_sex_'+(currentVal+1)+'" required><option selected disabled value="">Choose...</option><option>Nam</option><option>Nữ</option><option>Khác</option> </select> </div><div class="col"> <input type="text" class="form-control" placeholder="CMND" name="detail_child_id_'+(currentVal+1)+'"></div><div class="col"><input type="date" class="form-control" placeholder="Năm sinh" name="detail_child_birth_'+(currentVal+1)+'"> </div></div></div>';
}

function decrementValueChild(e) {
    e.preventDefault();
    var fieldName = $(e.target).data('field');
    var parent = $(e.target).closest('div');
    var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

    if (!isNaN(currentVal) && currentVal > 0) {
        parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
    } else {
        parent.find('input[name=' + fieldName + ']').val(0);
    }
    $("#row-info-child").remove();
}

$('.input-group-adult').on('click', '.button-plus', function(e) {
    incrementValueAdult(e);
});

$('.input-group-adult').on('click', '.button-minus', function(e) {
    decrementValueAdult(e);
});
$('.input-group-child').on('click', '.button-plus', function(e) {
    incrementValueChild(e);
});

$('.input-group-child').on('click', '.button-minus', function(e) {
    decrementValueChild(e);
});
</script>
@endsection