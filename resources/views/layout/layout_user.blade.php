<?php
if(!isset($_SESSION)) session_start();
if(isset($_SESSION['submit']) && $_SESSION['submit']=1 )//chua dang nhap
{
    header('location:index_login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/assets/layout_user/css/style.css">
    <link rel="icon" href="/assets/layout_user/img/icon.png" type="image/x-icon" />
    <!-- Do đặt trong thư mục user, nên phải lùi lại 1 cấp  -->
    <link rel="stylesheet"
        href="/assets/layout_user/fonts/fontawesome-free-6.1.0-web/fontawesome-free-6.1.0-web/css/all.css">
    <!-- Link Swiper's CSS -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel | Project Tour</title>
    <style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        background-color: #eee
    }

    .chat-btn {
        position: absolute;
        right: 14px;
        bottom: 30px;
        cursor: pointer
    }

    .chat-btn .close {
        display: none
    }

    .chat-btn i {
        transition: all 0.9s ease
    }

    #check:checked~.chat-btn i {
        display: block;
        pointer-events: auto;
        transform: rotate(180deg)
    }

    #check:checked~.chat-btn .comment {
        display: none
    }

    .chat-btn i {
        font-size: 22px;
        color: #fff !important
    }

    .chat-btn {
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50px;
        background-color: #2d4271;
        color: #fff;
        font-size: 22px;
        border: none
    }

    .wrapper {
        position: absolute;
        right: 20px;
        bottom: 100px;
        width: 600px;
        background-color: #fff;
        border-radius: 5px;
        opacity: 0;
        transition: all 0.4s
    }

    #check:checked~.wrapper {
        opacity: 1
    }

    .header-chat {
        padding: 13px;
        background-color: #2d4271;
        border-radius: 5px 5px 0px 0px;
        margin-bottom: 10px;
        color: #fff
    }

    .chat-form {
        padding: 15px
    }


    #check {
        display: none !important
    }

    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        z-index: 10000;
    }

    .my-float {
        margin-top: 22px;
    }

    /* #chat2 .form-control {
        border-color: transparent;
    }

    #chat2 .form-control:focus {
        border-color: transparent;
        box-shadow: inset 0px 0px 0px 1px transparent;
    } */

    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }

    div#chat2 {
        width: 100%;
        margin: 0 auto;

    }

    input#exampleFormControlInput1 {
        border: none;
        margin: 0 20px;
    }
    </style>
</head>

<body>
    <!-- <div class="loader-wrapper" style=""></div> -->
    <div id="main">

        <!-- Code begins here -->

        <a href="" class="float">
            <input type="checkbox" id="check"> <label class="chat-btn" for="check"> <i class="fa-solid fa-messages"></i>
                <i class="fa fa-close close"></i> </label>
            <div class="wrapper">
                <div class="header-chat">
                    <h6>Let's Chat - Online</h6>
                </div>
                <div class="chat-form">

                    <div class="card" id="chat2">

                        <div class="card-body" data-mdb-perfect-scrollbar="true"
                            style="position: relative; height: 400px;overflow: scroll">

                            <div class="d-flex flex-row justify-content-start">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp"
                                    alt="avatar 1" style="width: 45px; height: 100%;">
                                <div>
                                    <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">
                                        Hi</p>
                                    <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">
                                        How are you ...???
                                    </p>
                                    <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">
                                        What are you doing
                                        tomorrow? Can we come up a bar?</p>
                                    <p class="small ms-3 mb-3 rounded-3 text-muted">23:58</p>
                                </div>
                            </div>


                            <div class="d-flex flex-row justify-content-end mb-4 pt-1">
                                <div>
                                    <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Hiii, I'm
                                        good.</p>
                                    <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">How are you
                                        doing?</p>
                                    <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Long time no
                                        see! Tomorrow
                                        office. will
                                        be free on sunday.</p>
                                    <p class="small me-3 mb-3 rounded-3 text-muted d-flex justify-content-end">
                                        00:06</p>
                                </div>
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava4-bg.webp"
                                    alt="avatar 1" style="width: 45px; height: 100%;">
                            </div>

                            <div class="d-flex flex-row justify-content-start">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp"
                                    alt="avatar 1" style="width: 45px; height: 100%;">
                                <div>
                                    <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">
                                        Hi</p>
                                    <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">
                                        How are you ...???
                                    </p>
                                    <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">
                                        What are you doing
                                        tomorrow? Can we come up a bar?</p>
                                    <p class="small ms-3 mb-3 rounded-3 text-muted">23:58</p>
                                </div>
                            </div>


                        </div>
                        <div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp"
                                alt="avatar 3" style="width: 40px; height: 100%;">
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1"
                                placeholder="Type message">
                            <button style="submit"  class="btn btn-success"><i class="fas fa-paper-plane"></i></button>
                            
                        </div>
                    </div>


                </div>
            </div>
        </a>
        <div class="header">
            <div class="container-header">
                <div class="row">
                    <div class="nav-container">
                        <div class="logo">
                            <a href="">Travel</a>
                        </div>
                        <div>
                            <ul class="nav-list">
                                <li class="nav-items"><a href="">Trang chủ</a></li>
                                <li class="nav-items"><a href="">Giới thiệu</a></li>
                                <li class="nav-items">
                                    <div class="dropdown show" id="drd">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Du lịch trong nước
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            @foreach($lct as $items)
                                            <form action="/search" method="get" class="location">
                                                <div class="col-md-3 location-container">
                                                    <!-- <a class="dropdown-item" href="#">{{$items->name_location}}</a> -->
                                                    <input type="hidden" name="kwLocation"
                                                        value="{{$items->id_location}}">
                                                    <input type="submit" class="dropdown-item"
                                                        value="{{$items->name_location}}">
                                                </div>
                                            </form>
                                            @endforeach
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-items"><a href="">Du lịch nước ngoài</a></li>
                                <li class="nav-items"><a href="">Tin tức</a></li>
                            </ul>
                        </div>
                        <div class="account-container">

                            @yield('login')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="home-container" style="background-image: url(/assets/layout_user/img/background.jpg);"> -->
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="/assets/layout_user/img/background.jpg" class="d-block w-100" alt="...">
                    <div class="slider-item">
                        <div class="wraper">
                            <div class="slider-item-content">
                                <h1>Hà Nội - Vịnh Hạ Long - Sapa</h1>
                                <p>Nằm đối diện resort là sân gôn The Bluffs do tay gôn huyền thoại Greg Norman thiết
                                    kế. The Grand Ho Tram Strip cách Thành phố Hồ Chí Minh 2 giờ lái xe qua huyện Long
                                    Thành và sắp xếp buýt miễn phí cho khách. Dịch vụ đón tại sân bay và máy bay trực
                                    thăng được cung cấp kèm phụ phí.</p>
                                <p><input type="submit" value="Xem chi tiết"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="/assets/layout_user/img/background1.jpg" class="d-block w-100" alt="...">
                    <div class="slider-item">
                        <div class="wraper">
                            <div class="slider-item-content">
                                <h1>Đà Lạt - Nha Trang (Khách Sạn 3*&4*) (Tour Tiết Kiệm)</h1>
                                <p>Nằm đối diện resort là sân gôn The Bluffs do tay gôn huyền thoại Greg Norman thiết
                                    kế. The Grand Ho Tram Strip cách Thành phố Hồ Chí Minh 2 giờ lái xe qua huyện Long
                                    Thành và sắp xếp buýt miễn phí cho khách. Dịch vụ đón tại sân bay và máy bay trực
                                    thăng được cung cấp kèm phụ phí.</p>
                                <p><input type="submit" value="Xem chi tiết"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="/assets/layout_user/img/background2.jpg" class="d-block w-100" alt="...">
                    <div class="slider-item">
                        <div class="wraper">
                            <div class="slider-item-content">
                                <h1>Phú Quốc - Thiên đường giải trí Vinwonder - Safari World</h1>
                                <p>Nằm đối diện resort là sân gôn The Bluffs do tay gôn huyền thoại Greg Norman thiết
                                    kế. The Grand Ho Tram Strip cách Thành phố Hồ Chí Minh 2 giờ lái xe qua huyện Long
                                    Thành và sắp xếp buýt miễn phí cho khách. Dịch vụ đón tại sân bay và máy bay trực
                                    thăng được cung cấp kèm phụ phí.</p>
                                <p><input type="submit" value="Xem chi tiết"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <section class="search">
                <div class="wraper">
                    <form action="/search" method="get">
                        <div class="search-content-items">
                            <div class="search-content-item">
                                <i class="fa-solid fa-location-dot"></i>
                                <input type="text" placeholder="Bạn muốn đi đâu?" class="input-search" name="keyword">
                                <div class="autobox">
                                    <li>Hà Nội</li>
                                    <li>Hải Phòng</li>
                                    <li>Nghệ An</li>
                                    <li>Đà Nẵng</li>
                                    <li>Hồ Chí Minh</li>
                                </div>
                            </div>
                            <div class="search-content-item">
                                <i class="fa-solid fa-calendar-days"></i>
                                <input type="text" id="myID" placeholder="Ngày đi" name="keywordDate">
                            </div>
                            <div class="search-content-item">
                                <i class="fa-solid fa-arrow-down-1-9"></i>
                                <input type="text" placeholder="Số Ngày" name="keywordQtyDate">
                            </div>
                            <div class="search-content-item">
                                <i class="fa-solid fa-user"></i>
                                <input type="text" placeholder="Số lượng chỗ còn" name="keywordQtyPlace">
                            </div>
                            <div class="search-content-item">
                                <input type="submit" value="Tìm kiếm" class="btn-search">
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    </div>
    <div class="body">
        <div class="product-cotainer">
            <div class="slide-product-container">
                <h3 class="slide-title">Chương trình khuyến mãi</h3>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="/assets/layout_user/img/promotion1.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="/assets/layout_user/img/promotion2.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="/assets/layout_user/img/promotion5.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="/assets/layout_user/img/promotion6.jpg" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="sale-product-container">
                <h3 class="slide-title">Sản phẩm ưu đãi</h3>
                <div class="swiper mySwiper1">
                    <div class="sale-product-list swiper-wrapper">
                        @foreach($bestSeller as $item)
                        <div class="col swiper-slide">
                            <div class="card">
                                <div class="product-img">
                                    <a href="detail.php?id={{$item->id_tour}}"><img
                                            src="/storage/admin/img/{{$item->img_tour}}" alt=""></a>
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
                                            <span class="price-new">{{number_format($item->child_price)}}đ</span>
                                            <span class="discount">6% GIẢM</span>
                                        </div>
                                    </div>
                                    <div class="tour-price">
                                        <div class="price-old-container">
                                            Người Lớn Giá:
                                            <span class="price-old">8,990,000₫</span>
                                        </div>
                                        <div class="price-new-container">
                                            <span class="price-new">{{number_format($item->adult_price)}}₫</span>
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
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="sale-product-container">
                <h3 class="slide-title">Sản phẩm Hot</h3>
                <div class="hot-tour-list">
                    @foreach($dataHot as $item)
                    <div class="rows">
                        <div class="hot-card">
                            <div class="product-item-img">
                                <a href="detail.php?id={{$item->place_go}}" class="item-img">
                                    <img src="/storage/admin/img/{{$item->img_tour}}" alt="">
                                </a>
                            </div>
                            <div class="product-item-detail">
                                <div class="card-body-hot">
                                    <div class="product-item-detail-category">
                                        <a href="">Vé máy bay + Khách sạn</a>
                                    </div>
                                    <h5 class="product-item-detail-title">
                                        <a href="detail.php?id={{$item->id_tour}}">
                                            {{$item->name_tour}}
                                        </a>
                                    </h5>
                                    <div class="product-item-detail-rating-star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="product-item-detail-review">
                                        <div class="product-item-detail-point">
                                            <span>9.8</span>
                                        </div>
                                        <div class="product-item-detail-feedback">
                                            <h6>Tuyệt vời</h6>
                                        </div>
                                    </div>
                                    <div class="product-item-detail-location">
                                        <i class="fa-solid fa-location-dot"></i> 240/9 Phangmuang Sai Kor Road, Patong,
                                        Kathu Patong Beach 83150, Thái Lan
                                    </div>
                                </div>
                            </div>
                            <div class="product-item-price">
                                <div class="card-body-hot" style="border: none;">
                                    <h5 class="product-item-price-min">Giá chỉ từ</h5>
                                    <div>
                                        <span class="product-item-price-number">Trẻ em:
                                            {{number_format($item->child_price,2)}}₫</span>
                                        <span class="product-item-price-text">/khách</span>
                                    </div>
                                    <div>
                                        <span class="product-item-price-number">Người lớn:
                                            {{number_format($item->adult_price,2)}}₫</span>
                                        <span class="product-item-price-text">/khách</span>
                                    </div>
                                    <p class="product-item-price-day"> Ngày đi {{$item->date_go}}</p>
                                    <div class="product-item-price-button">
                                        <div class="product-item-price-button-left">
                                            <div class="btn-left">Ngày khác</div>
                                        </div>
                                        <div class="product-item-price-button-right">
                                            <a href="/detail/{{$item->id_tour}}" class="btn-right">
                                                <label for="">Đặt tour</label>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="product-item-price-promotion">Đã bao gồm trong giá</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="news-container">
            <div id="tour4">
                <div>
                    <h3 class="slide-title">Tin tức du lịch</h3>
                </div>
                <div class="product-pop">
                    <div class="product-box">
                        <div class="img-box">
                            <a href=""><img src="/assets/layout_user/img/blog-img6.jpg" alt=""></a>
                        </div>
                        <div class="text-box">
                            <p>A Quote Post for Vestibulum</p>
                            <div class="is-divider"></div>
                            <p><a href="">Cras at fringilla lacus. Phasellus tincidunt tempor mi, ut tincidunt [...]
                                </a></p>
                        </div>
                        <div class="price-box"><span>Xem thêm</span></div>
                    </div>
                    <div class="product-box">
                        <div class="img-box">
                            <a href=""><img src="/assets/layout_user/img/blog-img7.jpg" alt=""></a>
                        </div>
                        <div class="text-box">
                            <p>Thailand Special Places of 2014</p>
                            <div class="is-divider"></div>
                            <p><a href="">Aliquam at pulvinar sem. Donec nec dolor elit. Vivamus sollicitudin, [...]
                                </a></p>
                        </div>
                        <div class="price-box"><span>Xem thêm</span></div>
                    </div>
                    <div class="product-box">
                        <div class="img-box">
                            <a href=""><img src="/assets/layout_user/img/blog-img10.jpg" alt=""></a>
                        </div>
                        <div class="text-box">
                            <p>10 Best Places Gallery</p>
                            <div class="is-divider"></div>
                            <p><a href="">Sed quam nisl, commodo in interdum sit amet, molestie vehicula [...]</a></p>
                        </div>
                        <div class="price-box"><span>Xem thêm</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="why-travel">
            <div>
                <h3 class="slide-title">Vì sao chọn chúng tôi</h3>
            </div>
            <div class="why-container">
                <div class="why-items">
                    <i class="fa-solid fa-mobile why-icons"></i>
                    <h5 class="why-items-title">Mạng bán tour</h5>
                    <p class="card-text">Đầu tiên tại Việt Nam</p>
                    <p class="card-text">Ứng dụng công nghệ mới nhất</p>
                </div>
                <div class="why-items">
                    <i class="fa-regular fa-thumbs-up why-icons"></i>
                    <h5 class="why-items-title">Sản phẩm & Dịch vụ</h5>
                    <p class="card-text">Đa dạng – Chất lượng – An toàn</p>
                </div>
                <div class="why-items">
                    <i class="fa-solid fa-money-bill why-icons"></i>
                    <h5 class="why-items-title">Giá cả</h5>
                    <p class="card-text">Luôn có mức giá tốt nhất</p>
                </div>
                <div class="why-items">
                    <i class="fa-solid fa-plane-up why-icons"></i>
                    <h5 class="why-items-title">Đặt tour</h5>
                    <p class="card-text">Dễ dàng & nhanh chóng chỉ với 3 bước</p>
                </div>
                <div class="why-items">
                    <i class="fa-regular fa-credit-card why-icons"></i>
                    <h5 class="why-items-title">Thanh toán</h5>
                    <p class="card-text">An toàn & linh hoạt</p>
                </div>
                <div class="why-items">
                    <i class="fa-solid fa-headset why-icons"></i>
                    <h5 class="why-items-title">Hỗ trợ</h5>
                    <p class="card-text">Hotline & trực tuyến (08h00 - 22h00)</p>
                </div>
            </div>
        </div>
        <div id="contact">
            <div>
                <h3 class="slide-title">Liên hệ với chúng tôi</h3>
            </div>
            <div id="contact-box">
                <div id="contact-img">
                    <div id="img-box">
                        <img src="/assets/layout_user/img/contact-people.png" alt="" id="img">
                    </div>
                </div>
                <div id="contact-form">
                    <div id="form">
                        <div id="text-contact">
                            <h2>CONTACT US</h2>
                            <p>Just pack and go! Let leave your travel plan to travel experts!</p>
                        </div>
                        <form action="" style="margin-bottom: 1.3em;">
                            <div id="form-box">
                                <input type="text" size="40" placeholder="Họ và tên" aria-required="true" class="text"
                                    aria-invalid="true">
                                <input type="email" size="40" placeholder="Email" aria-required="true" class="text"
                                    aria-invalid="true">
                                <textarea name="" id="textarea-form" cols="55" rows="7"
                                    placeholder="Nội dung"></textarea>
                            </div>
                            <div id="button-contact">
                                <input type="submit" value="Gửi tin nhắn" id="btn-submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div id="footer-container">
            <div id="logo-container-footer" class="logo-footer">
                <div class="logo logo-footer">
                    <a href="">Travel</a>
                </div>
                </a>
            </div>
            <div id="footer-box">
                <div class="footer-col">
                    <div id="col-1">
                        <div>
                            <h3>Liên Hệ</h3>
                        </div>
                        <div class="f-info">
                            <div><a href=""><i class="fa-solid fa-location-dot"></i> 319 c16 Lý Thường Kiệt, Q.11,
                                    HCM</a></div>
                        </div>
                        <div class="f-info">
                            <div><a href=""><i class="fa-solid fa-phone"></i> 0126 922 0162</a></div>
                        </div>
                        <div class="f-info">
                            <div><a href=""><i class="fa-solid fa-envelope"></i> nguyenhieu@gmail.com</a></div>
                        </div>
                        <div class="f-info">
                            <p>Đăng ký để được nhận thông tin khuyến mãi một cách nhanh chóng.</p>
                        </div>
                        <div class="f-info">
                            <span>
                                <input type="email" name="" id="finput-email" placeholder="Email của bạn">
                            </span>
                            <input type="submit" value="Gửi" id="fbtn-submit">
                        </div>
                    </div>
                </div>
                <div class="footer-col">
                    <div id="col-1">
                        <div>
                            <h3 class="h3-list">Tin Tức</h3>
                        </div>
                        <div>
                            <ul>
                                <li class="list-footer"><a href="">Bản tin Du Lịch Việt</a></li>
                                <li class="list-footer"><a href="">Góc báo chí Du Lịch Việt</a></li>
                                <li class="list-footer"><a href="">Cẩm nang du lịch</a></li>
                                <li class="list-footer"><a href="">Khám phá du lịch</a></li>
                                <li class="list-footer"><a href="">Kinh nghiệm du lịch</a></li>
                                <li class="list-footer"><a href="">Sự kiện du lịch</a></li>
                                <li class="list-footer"><a href="">Tư vấn du lịch</a></li>
                                <li class="list-footer"><a href="">Tuyển dụng Du Lịch</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-col">
                    <div id="col-1">
                        <div>
                            <h3 class="h3-list">Góc Khách Hàng</h3>
                        </div>
                        <div>
                            <ul>
                                <li class="list-footer"><a href="">Quy tắc bảo hiểm</a></li>
                                <li class="list-footer"><a href="">Điều kiện & điều khoản</a></li>
                                <li class="list-footer"><a href="">Quyền riêng tư</a></li>
                                <li class="list-footer"><a href="">Chính sách bảo mật và thông tin</a></li>
                                <li class="list-footer"><a href="">Ý kiến khách hàng</a></li>
                                <li class="list-footer"><a href="">Khách hàng thân thiết</a></li>
                                <li class="list-footer"><a href="">Phương thức thanh toán</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-img">
                    <div id="col-1">
                        <div>
                            <h3>Tour Phổ Biến</h3>
                        </div>
                        <div class="f-img">
                            <div><img
                                    src="/assets/layout_user/img/dat-phong-khach-san-grand-ho-tram-gia-re_du-lich-viet_2-300x225.png"
                                    alt=""></div>
                        </div>
                        <div class="f-img">
                            <div><img
                                    src="/assets/layout_user/img/dat-phong-khach-san-victoria-sapa-resort-gia-re_du-lich-viet-300x225.png"
                                    alt=""></div>
                        </div>
                        <div class="f-img">
                            <div><img src="/assets/layout_user/img/tour-nh-3.png" alt=""></div>
                        </div>
                        <div class="f-img">
                            <div><img src="/assets/layout_user/img/du-lich-canada-mua-thu-01.jpg" alt=""></div>
                        </div>
                        <div class="f-img">
                            <div><img src="/assets/layout_user/img/tham-quan-new-york-01.jpg" alt=""></div>
                        </div>
                        <div class="f-img">
                            <div><img src="/assets/layout_user/img/tour-nhieu.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal">
        <div class="modal-container js-modal-container" id="modal-container">
            <div class="modal-close">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="modal-body">
                <form id="input" method="POST" action="/user/login">
                    @csrf
                    <h3>Đăng Nhập</h3>
                    <label for="" class="modal-label">Tên tài khoản hoặc địa chỉ email </label>
                    <input type="text" name="username" id="" class="modal-input">

                    <label for="" class="modal-label">Mật Khẩu </label>
                    <input type="password" name="password" id="" class="modal-input">

                    <button id="btn-input" type="submit" name="submit">
                        Đăng nhập
                    </button>
                    <input type="checkbox" id="re-pass">
                    <label for="re-pass" class="remember-pass">Ghi nhớ mật khẩu</label>
                    <div class="container-pass">
                        <a href="" class="change-pass">Quên mật khẩu?</a>
                        <a href="#" class="change-pass" id="regis-animate">Đăng ký </a>
                    </div>
                </form>
            </div>
            <div class="regis-box">
                <form action="" id="regis">
                    <h3>Đăng Ký</h3>
                    <label for="" class="modal-label">Tên tài khoản hoặc địa chỉ email </label>
                    <input type="text" name="" class="modal-input">

                    <label for="" class="modal-label">Mật Khẩu </label>
                    <input type="password" name="" class="modal-input">

                    <label for="" class="modal-label">Mật Lại Nhập Khẩu </label>
                    <input type="password" name="" class="modal-input">

                    <button id="btn-input">
                        Đăng ký
                    </button>
                    <div class="container-pass">
                        <a href="" class="change-pass">Quên mật khẩu?</a>
                        <a href="#" class="change-pass" id="login-animate">Đăng nhập </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
    // const logins = document.querySelectorAll('.login')
    // const closes = document.querySelectorAll('.modal-close')
    // const modal = document.querySelector('.modal')
    // const modalContainer = document.querySelector('.js-modal-container')


    // function showLogin() {
    //     modal.classList.add('open')
    // }

    // function closeLogin() {
    //     modal.classList.remove('open')
    // }

    // function overlayClose(event) {
    //     event.stopPropagation()
    // }

    // for (const login of logins) {
    //     login.addEventListener('click', showLogin)
    // }

    // for (const close of closes) {
    //     close.addEventListener('click', closeLogin)
    // }

    // modal.addEventListener('click', closeLogin)
    // modalContainer.addEventListener('click', overlayClose)

    // var x = document.getElementById("input")
    // var y = document.getElementById("regis")
    // var z = document.getElementById("regis-animate")
    // var w = document.getElementById("login-animate")


    // function register() {
    //     y.classList.add('tran1')
    //     y.style.visibility = "visible";
    //     x.classList.add('tran')
    //     y.style.height = "10px";
    //     x.classList.remove('tran3')
    //     modalContainer.classList.add('js-modal-container')
    // }

    // function login() {
    //     x.classList.add('tran3')
    //     x.classList.remove('tran')
    //     y.classList.remove('tran1')
    //     y.style.visibility = "hidden";
    // }
    // z.addEventListener('click', register)
    // w.addEventListener('click', login)
    </script>
    <script>
    let btn = document.querySelector(".button-list")
    let sidebar = document.querySelector(".slidebar-container")

    btn.onclick = function() {
        sidebar.classList.toggle("active")
    }
    </script>

    <!-- Swiper JS -->
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script> -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> -->

    <script>
    var swiper = new Swiper(".mySwiper1", {
        slidesPerView: 3,
        spaceBetween: 0,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: false,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    </script>
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        loop: true,
        spaceBetween: 40,
        autoplay: {
            deplay: 1000,
            disableOnInteraction: false,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            550: {
                slidesPerView: 2,
            },
            800: {
                slidesPerView: 3,
            },
            // 1000: {
            //     slidesPerView: 4,
            // },  
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });
    </script>
    <script>
    $(document).ready(function() {
        $('.dropdown-toggle').dropdown()
    });
    </script>
    <script>
    //    $(window).on("load",function(){
    //         $("#loader-wrapper").fadeOut(1300);
    //    });
    // window.addEventListener('load', ()=>{
    //     const preload = document.querySelector('.loader-wrapper');
    //     preload.classList.add('preload-finish');
    // });
    </script>
    <script>
    let recommentList = [
        "An Giang",
        "Bến Tre",
        "Cà Mau",
        "Hà Nội",
        "Hải Phòng",
        "Hà Giang",
        "Hải Dương",
        "Hà Tĩnh",
        "Hà Nam",
        "Huế",
        "Hồ Chí Minh",
        "Phú Quốc",
        "Phú Thọ",
        "Nha Trang",
        "Quảng Bình",
        "Quảng Ngãi",
        "Vũng Tàu",
        "Đà Nẵng",
        "Đà Lạt",
    ];
    const inputSearch = document.querySelector(".input-search");
    const autobox = document.querySelector(".autobox");
    inputSearch.onkeyup = (e) => {
        // console.log(e.target.value);
        let checkData = e.target.value
        let dataArray = [];
        if (checkData) {
            dataArray = recommentList.filter((data) => {
                return data.toLocaleLowerCase().startsWith(checkData.toLocaleLowerCase())
            })
            dataArray = dataArray.map((data) => {
                return data = '<li>' + data + '</li>'
            })
            autobox.classList.add('active');
            // console.log(dataArray);
            showList(dataArray)
            let liItem = autobox.querySelectorAll("li")
            for (let i = 0; i < liItem.length; i++) {
                liItem[i].addEventListener("click", function() {
                    inputSearch.value = liItem[i].innerHTML
                    autobox.classList.remove('active');
                })
            }
        } else {
            autobox.classList.remove('active');
        }
    }

    function showList(list) {
        let listData
        if (!list.length) {
            listData = '<li>' + inputSearch.value + '</li>'
        } else {
            listData = list.join('')
        }
        autobox.innerHTML = listData
    }
    </script>
    <script>
    flatpickr("#myID", {
        minDate: "today"
    });
    </script>
</body>

</html>