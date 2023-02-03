<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <thead>
         <tr>
             <td>Mã</td>
             <td>Tên</td>
        </tr>
     </thead>
          @foreach(Cart::content() as $item)
          <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
            </tr>
          @endforeach
          </table>
      
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moon Tour</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/layout_user/css/product1.css">
    <link rel="stylesheet" href="../font/fontawesome-free-6.1.0-web/fontawesome-free-6.1.0-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .img-cart{
            width:150px;
            height:150px;
        }
    </style>
</head>
<body>
    <div id="main">
        <!-- ////////////////////////////banner/////////////////////////////////// -->
        <div id="home">
        <div class="home-box">
            <table>
                <tr>
                    <th class="social"></th>
                    <th class="social"><a class="icon" href=""><i class="fa fa-phone"></i>+01269220162</a></th>
                    <th class="social"><a class="icon" href=""><i class="fa-brands fa-facebook-f"></i></a></th>
                    <th class="social"><a class="icon" href=""><i class="fa-brands fa-instagram"></i></a></th>
                    <th class="social"><a class="icon" href=""><i class="fa-brands fa-twitter"></i></a></th>
                    <th class="social"><a class="icon" href=""><i class="fa fa-envelope"></i></a></th>
                    <th><a href="#" id="login" class="login">Đăng nhập</a></th>
                </tr>
            </table>
        </div>

        <div class="home-box">
        <div class="logo logo-footer">
                    <a href="">Travel</a>
                </div>

            <div class="home-box">
                <ul id="list-banner">
                    <li><a href="./index.php" class="list">Trang chủ</a></li>
                    <li><a href="" class="list">Giới thiệu</a></li>
                    <li><a href="" class="list">Du lịch trong nước<i class="fa fa-angle-down"></i></a></li>
                    <li><a href="./tour-out.html" class="list">Du lịch nước ngoài<i class="fa fa-angle-down"></i></a></li>
                    <li><a href="./hotel.html" class="list">Khách sạn</a></li>
                    <li><a href="./news.html" class="list">Tin tức</a></li>
                    <li><a href="./contact.html" class="list">Liên Hệ</a></li>
                    <li><a href="" class="list"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>

           
        </div>
        </div>
    <!-- ///////////////////////////////////////// -->
	<div class="heading">
        <a href="/">Tiếp tục mua hàng</a>
        <h2>Đơn hàng của bạn</h2>
    </div>
	<div class="content">
		<div class="container">
		<div class="single">
		<div class="col-md-12">
			<table class='table table-bordered table-striped'>
                <?php
                if (Cart::total()>0){
                    ?>
                    <thead>
                        <tr>
                        <th scope="col">Mã sản phẩm</th>
                        <th scope="col">Tên tour</th>
                        <th scope="col">Hình</th>
                        <th scope="col">Số lượng trẻ em</th>
                        <th scope="col">Số lượng người lớn</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col">#</th>
                        </tr>
                    </thead>
                    <?php
                }else
                {
                    ?>
                        <div class="cart-empty">
                            <img src="/assets/layout_user/img/cart-empty.jpg" alt="">
                            <h4>Không có sản phẩm trong giỏ hàng</h4>
                        </div>   
                    <?php
                }
                ?>
                <tbody>
                @foreach(Cart::content() as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{number_format($item->price)}}</td>
                    <td><a href="/cart/remove/{{$item->rowId}}">Xóa</a></td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="2">Thành tiền</td>
                    <td>{{Cart::subtotal()}}</td>
                </tr>
                </tbody>
            </table>
            <div class="checkout">
            <div class="text-heading">
                <?php 
                    if (Cart::total()>0)
                    {
                        ?>
                        <h2>Thanh toán</h2>
                        <div class="">
                            <h3>Các hình thức thanh toán</h3>
                        </div>
                        <!-- <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                                action="/user/checkout">
                                <input type="hidden" name="total_price" value=''>
                                <input type="submit" name="redirect" id="redirect" value="Thanh toán">
                            </form> -->
                            <a href="/user/checkout">Thanh toán</a>
                        <?php
                    }
                ?>
            </div>
            </div>
	    </div>
	    </div>
		</div>

        <div id="footer">
                <div class="logo logo-footer">
                    <a href="">Travel</a>
                </div>
        <div id="footer-box">
            <div class="footer-col">
                <div id="col-1">
                    <div>
                        <h3>Liên Hệ</h3>
                    </div>
                    <div class="f-info">
                        <div><a href=""><i class="fa-solid fa-location-dot"></i> 319 c16 Lý Thường Kiệt, Q.11, HCM</a></div>
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
                            <li><a href="">Bản tin Du Lịch Việt</a></li>
                            <li><a href="">Góc báo chí Du Lịch Việt</a></li>
                            <li><a href="">Cẩm nang du lịch</a></li>
                            <li><a href="">Khám phá du lịch</a></li>
                            <li><a href="">Kinh nghiệm du lịch</a></li>
                            <li><a href="">Sự kiện du lịch</a></li>
                            <li><a href="">Tư vấn du lịch</a></li>
                            <li><a href="">Tuyển dụng Du Lịch</a></li>
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
                            <li><a href="">Quy tắc bảo hiểm</a></li>
                            <li><a href="">Điều kiện & điều khoản</a></li>
                            <li><a href="">Quyền riêng tư</a></li>
                            <li><a href="">Chính sách bảo mật và thông tin</a></li>
                            <li><a href="">Ý kiến khách hàng</a></li>
                            <li><a href="">Khách hàng thân thiết</a></li>
                            <li><a href="">Phương thức thanh toán</a></li>
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
                        <div><img src="/assets/layout_user/img/dat-phong-khach-san-grand-ho-tram-gia-re_du-lich-viet_2-300x225.png" alt=""></div>
                    </div>
                    <div class="f-img">
                        <div><img src="/assets/layout_user/img/dat-phong-khach-san-victoria-sapa-resort-gia-re_du-lich-viet-300x225.png" alt=""></div>
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
    <div class="modal">
        <div class="modal-container js-modal-container">  
            <div class="modal-close">
                <i class="fa-solid fa-xmark"></i>
            </div> 
            <div class="modal-body">
                <h3>Đăng Nhập</h3>
                <label for="" class="modal-label">Tên tài khoản hoặc địa chỉ email </label>
                <input type="text" name="" id="" class="modal-input">

                <label for="" class="modal-label">Mật Khẩu </label>
                <input type="password" name="" id="" class="modal-input">

                <button id="btn-input">
                    Đăng nhập
                </button>
                <input type="checkbox" id="re-pass">
                <label for="re-pass" class="remember-pass">Ghi nhớ mật khẩu</label>
                <div class="container-pass">
                    <a href="" class="change-pass">Quên mật khẩu?</a>
                    <a href="#" class="change-pass">Đăng ký </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        const logins = document.querySelectorAll('.login')
        const closes = document.querySelectorAll('.modal-close')
        const modal = document.querySelector('.modal')
        const modalContainer = document.querySelector('.js-modal-container')


        function showLogin()
        {
            modal.classList.add('open')
        }
        function closeLogin()
        {
            modal.classList.remove('open')
        }
        function overlayClose(event)
        {
            event.stopPropagation()
        }
        
        for(const login of logins){
        login.addEventListener('click',showLogin)
        }

        for(const close of closes){
        close.addEventListener('click',closeLogin)
        }

        modal.addEventListener('click',closeLogin)
        modalContainer.addEventListener('click',overlayClose)
    </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>