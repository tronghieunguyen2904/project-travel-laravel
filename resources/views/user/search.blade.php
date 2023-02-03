@extends('layout/layout_user_detail')
@section('css')
<link rel="stylesheet" href="/assets/layout_user/css/style.css">
@endsection
@section('heading')
<div class="heading">
    <h2>Tìm kiếm</h2>
</div>
@endsection
@section('search')
<div class="search-product">
    <div class="input-group">
        <form action="/search" method="get">
            <div class="form-search">
                <div class="form-outline">
                    <input type="search" id="form1" class="form-control" name="keyword" />
                    <label class="form-label" for="form1">Search</label>
                </div>
                <div><input type="submit" class="btn btn-primary" value="Tìm kiếm"></div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('sale-product-list')
<div class="sale-product-list" id="product-search-list">
    @foreach($data as $item)
    <div class="col">
        <div class="card" id="card-search">
            <div class="product-img" id="product-search-img">
                <a href="detail.php?id={{$item->id_tour}}"><img src="/storage/admin/img/{{$item->img_tour}}"
                        alt=""></a>
            </div>
            <div class="product-body">
                <p class="tour-date">{{$item->date_go}}</p>
                <p class="tour-title">{{$item->name_tour}}</p>
                <div class="tour-code">
                    <div class="tour-code-title">Mã tour:</div>
                    <div>
                        <i class="fa-solid fa-ticket"></i>
                        <span>{{$item->id_tour}}</span>
                    </div>
                </div>
                <p class="tour-place">Nơi khởi hành: {{$item->place_go}}</p>
                <div class="tour-price">
                    <div class="price-old-container">
                        Trẻ Em Giá:
                        <span class="price-old">7,990,000₫</span>
                    </div>
                    <div class="price-new-container">
                        <span class="price-new">{{number_format($item->child_price,2)}}đ</span>
                        <span class="discount">6% GIẢM</span>
                    </div>
                </div>
                <div class="tour-price">
                    <div class="price-old-container">
                        Người Lớn Giá:
                        <span class="price-old">8,990,000₫</span>
                    </div>
                    <div class="price-new-container">
                        <span class="price-new">{{number_format($item->adult_price,2)}}₫</span>
                        <span class="discount">6% GIẢM</span>
                    </div>
                </div>
            </div>
            <div class="button">
                <a href="/detail/{{$item->id_tour}}" class="btn-product">Xem thêm</a>
            </div>
            <a href="/cart/add/{{$item->id_tour}}">Thêm</a>
        </div>
    </div>
    @endforeach
</div>
@section('link')
    <div class="link">
        {{$data->links()}}
    </div>
    @endsection
@endsection