<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moon Tour</title>
    <link rel="stylesheet"
        href="/assets/layout_user/fonts/fontawesome-free-6.1.0-web/fontawesome-free-6.1.0-web/css/all.css">
    <link rel="stylesheet" href="/assets/layout_user/css/product1.css">
    <!-- <link rel="stylesheet" href="/assets/layout_user/css/style.css"> -->
    @yield('css')
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- <link rel="stylesheet" href="/assets/layout_user/css/bootstrap.min.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    .img-cart {
        width: 150px;
        height: 150px;
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
                        <th><a href="#" id="login" class="login">????ng nh???p</a></th>
                    </tr>
                </table>
            </div>

            <div class="home-box">
                <div class="logo logo-footer">
                    <a href="">Travel</a>
                </div>

                <div class="home-box">
                    <ul id="list-banner">
                        <li><a href="/" class="list">Trang ch???</a></li>
                        <li><a href="" class="list">Gi???i thi???u</a></li>
                        <li><a href="" class="list">Du l???ch trong n?????c<i class="fa fa-angle-down"></i></a></li>
                        <li><a href="./tour-out.html" class="list">Du l???ch n?????c ngo??i<i
                                    class="fa fa-angle-down"></i></a></li>
                        <li><a href="./hotel.html" class="list">Kh??ch s???n</a></li>
                        <li><a href="./news.html" class="list">Tin t???c</a></li>
                        <li><a href="./contact.html" class="list">Li??n H???</a></li>
                        <li><a href="" class="list"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>


            </div>
        </div>
        <!-- ///////////////////////////////////////// -->
        @yield('product')
        <div class="sale-product-container">
            @yield('heading')
            @yield('search')
            @yield('link')
            @yield('sale-product-list')
        </div>
        <div id="footer">
            <div class="logo logo-footer">
                <a href="">Travel</a>
            </div>
            <div id="footer-box">
                <div class="footer-col">
                    <div id="col-1">
                        <div>
                            <h3>Li??n H???</h3>
                        </div>
                        <div class="f-info">
                            <div><a href=""><i class="fa-solid fa-location-dot"></i> 319 c16 L?? Th?????ng Ki???t, Q.11,
                                    HCM</a></div>
                        </div>
                        <div class="f-info">
                            <div><a href=""><i class="fa-solid fa-phone"></i> 0126 922 0162</a></div>
                        </div>
                        <div class="f-info">
                            <div><a href=""><i class="fa-solid fa-envelope"></i> nguyenhieu@gmail.com</a></div>
                        </div>
                        <div class="f-info">
                            <p>????ng k?? ????? ???????c nh???n th??ng tin khuy???n m??i m???t c??ch nhanh ch??ng.</p>
                        </div>
                        <div class="f-info">
                            <span>
                                <input type="email" name="" id="finput-email" placeholder="Email c???a b???n">
                            </span>
                            <input type="submit" value="G???i" id="fbtn-submit">
                        </div>
                    </div>
                </div>
                <div class="footer-col">
                    <div id="col-1">
                        <div>
                            <h3 class="h3-list">Tin T???c</h3>
                        </div>
                        <div>
                            <ul>
                                <li><a href="">B???n tin Du Li??ch Vi????t</a></li>
                                <li><a href="">Go??c ba??o chi?? Du Li??ch Vi????t</a></li>
                                <li><a href="">C???m nang du l???ch</a></li>
                                <li><a href="">Kh??m ph?? du l???ch</a></li>
                                <li><a href="">Kinh nghi???m du l???ch</a></li>
                                <li><a href="">S??? ki???n du l???ch</a></li>
                                <li><a href="">T?? v???n du l???ch</a></li>
                                <li><a href="">Tuy???n d???ng Du L???ch</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-col">
                    <div id="col-1">
                        <div>
                            <h3 class="h3-list">G??c Kh??ch H??ng</h3>
                        </div>
                        <div>
                            <ul>
                                <li><a href="">Quy t????c ba??o hi????m</a></li>
                                <li><a href="">??i????u ki????n & ??i????u khoa??n</a></li>
                                <li><a href="">Quy????n ri??ng t??</a></li>
                                <li><a href="">Chi??nh sa??ch ba??o m????t va?? th??ng tin</a></li>
                                <li><a href="">Y?? ki????n kha??ch ha??ng</a></li>
                                <li><a href="">Kha??ch ha??ng th??n thi????t</a></li>
                                <li><a href="">Ph????ng th????c thanh toa??n</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-img">
                    <div id="col-1">
                        <div>
                            <h3>Tour Ph??? Bi???n</h3>
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
        <div class="modal">
            <div class="modal-container js-modal-container">
                <div class="modal-close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="modal-body">
                    <h3>????ng Nh???p</h3>
                    <label for="" class="modal-label">T??n t??i kho???n ho???c ?????a ch??? email </label>
                    <input type="text" name="" id="" class="modal-input">

                    <label for="" class="modal-label">M???t Kh???u </label>
                    <input type="password" name="" id="" class="modal-input">

                    <button id="btn-input">
                        ????ng nh???p
                    </button>
                    <input type="checkbox" id="re-pass">
                    <label for="re-pass" class="remember-pass">Ghi nh??? m???t kh???u</label>
                    <div class="container-pass">
                        <a href="" class="change-pass">Qu??n m???t kh???u?</a>
                        <a href="#" class="change-pass">????ng k?? </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    const logins = document.querySelectorAll('.login')
    const closes = document.querySelectorAll('.modal-close')
    const modal = document.querySelector('.modal')
    const modalContainer = document.querySelector('.js-modal-container')


    function showLogin() {
        modal.classList.add('open')
    }

    function closeLogin() {
        modal.classList.remove('open')
    }

    function overlayClose(event) {
        event.stopPropagation()
    }

    for (const login of logins) {
        login.addEventListener('click', showLogin)
    }

    for (const close of closes) {
        close.addEventListener('click', closeLogin)
    }

    modal.addEventListener('click', closeLogin)
    modalContainer.addEventListener('click', overlayClose)
    </script>
    <script>
    const searchButton = document.getElementById('search-button');
    const searchInput = document.getElementById('search-input');
    searchButton.addEventListener('click', () => {
        const inputValue = searchInput.value;
        alert(inputValue);
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>