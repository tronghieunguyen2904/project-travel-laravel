@extends('layout/layout_user_detail')
@section('product')
<div class="product-container">
    <div class="product">
        <div class="product-img">
            <img src="/storage/admin/img/{{$detail->img_tour}}" alt="">
        </div>
        <div class="product-text">
            <h1>{{$detail->name_tour}}</h1>
            <div>
                <p>Nằm đối diện resort là sân gôn The Bluffs do tay gôn huyền thoại Greg Norman thiết kế. The Grand Ho
                    Tram
                    Strip cách Thành phố Hồ Chí Minh 2 giờ lái xe qua huyện Long Thành và sắp xếp buýt miễn phí cho
                    khách.
                    Dịch vụ đón tại sân bay và máy bay trực thăng được cung cấp kèm phụ phí. <br>
                    Resort cách thành phố Vũng Tàu 50 km và cách Sân bay Quốc tế Tân Sơn Nhất khoảng 120 km.
                </p>
            </div>
            <div class="submit-container">

                <div class="submit-box">
                    <!-- <input type="submit" value="Đặt tour" class="submit-btn"> -->
                    <a href="/booking/{{$detail->id_tour}}" class="submit-btn">Đặt Tour</a>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="tab-panels">
        <div class="panels-container">
            <div class="panels-row">
                <div class="col-left">
                    <div class="box-order">
                        <p>Khởi hành : <b>07/09/2022</b></p>
                        <p>Thời gian : <b>5 ngày</b></p>
                        <p>Nơi khởi hành : <b>TP. Hồ Chí Minh</b></p>
                        <p>Số chỗ còn nhận : <b>5</b></p>
                    </div>
                </div>
                <div class="col-right">
                    <div class="panels-items">
                        <i class="fa-regular fa-flag"></i>
                        <label for="">Thời gian</label>
                        <p>5 ngày 4 đêm</p>
                    </div>
                    <div class="panels-items">
                        <i class="fa-solid fa-car"></i>
                        <label for="">Phương tiện di chuyển</label>
                        <p>Xe du lịch</p>
                    </div>
                    <div class="panels-items">
                        <i class="fa-regular fa-map"></i>
                        <label for="">Điểm tham quan</label>
                        <p>Nha Trang, Đà Lạt, Vinwonder, Ga Đà Lạt, Thác Bobla, Đường Hầm Đất Sét, Làng Hoa Vạn Thành,
                            Làng
                            Chài Xưa, Hòn Lao, Đảo Khỉ</p>
                    </div>
                    <div class="panels-items">
                        <i class="fa-solid fa-fire"></i>
                        <label for="">Ẩm thực</label>
                        <p>Buffet sáng, Theo thực đơn, Đặc sản địa phương, Buffet sáng, Theo thực đơn, Đặc sản địa
                            phương
                        </p>
                    </div>
                    <div class="panels-items">
                        <i class="fa-solid fa-hotel"></i>
                        <label for="">Khách sạn</label>
                        <p>Khách sạn 3 sao</p>
                    </div>
                    <div class="panels-items">
                        <i class="fa-solid fa-clock"></i>
                        <label for="">Thời gian lý tưởng</label>
                        <p>Quanh năm</p>
                    </div>
                    <div class="panels-items">
                        <i class="fa-solid fa-users"></i>
                        <labzel for="">Đối tượng thích hợp</label>
                            <p>Gia đình nhiều thế hệ</p>
                    </div>
                    <div class="panels-items">
                        <i class="fa-regular fa-star"></i>
                        <label for="">Ưu đãi</label>
                        <p>Đã bao gồm ưu đãi trong giá tour</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border"></div>
    <div class="container-text">
        <h1>Lịch trình</h1>
    </div>
    <div class="policy">
        <div class="policy-box">
            <div class="row">
                <div class="col-md-12 time-line">
                    <h2 class="day">Ngày 1 - TP. HỒ CHÍ MINH - NỘI BÀI (HÀ NỘI) - LÀO CAI – SAPA 02 bữa ăn: (Trưa,
                        Chiều)
                    </h2>
                    <div class="excerpt">
                        <span class="line"></span>
                        <div class="text-excerpt">
                            Quý khách tập trung tại sân bay Tân Sơn Nhất (Ga nội địa), hướng dẫn viên hỗ trợ khách làm
                            thủ
                            tục đáp chuyến bay đi Hà Nội. Đến sân bay Nội Bài, xe và HDV Vietravel đón Quý khách đi khởi
                            hành theo cao tốc Hà Nội – Lào Cai đưa Quý khách đến phố núi Sapa.
                            Trên đường, Quý khách dùng cơm trưa tại nhà hàng địa phương. Đến nơi, Quý khách tham quan:
                            <ul>
                                <li><b>Bản Cát Cát</b>- đẹp như một bức tranh giữa vùng phố cổ Sapa, nơi đây thu hút du
                                    khách bởi cầu treo, thác nước, guồng nước và những mảng màu hoa mê hoặc du khách khi
                                    lạc
                                    bước đến đây. Thăm những nếp nhà của người Mông, Dao, Giáy trong bản, du khách sẽ
                                    không
                                    khỏi ngỡ ngàng trước vẻ đẹp mộng mị của một trong những ngôi làng cổ đẹp nhất Sapa.
                                </li>
                            </ul>
                            Quý khách dùng cơm tối và nhận phòng nghỉ ngơi hoặc tự do dạo phố ngắm nhà thờ Đá Sapa, tự
                            do
                            thưởng thức đặc sản vùng cao như: thịt lợn cắp nách nướng, trứng nướng, rượu táo mèo, giao
                            lưu
                            với người dân tộc vùng cao.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 time-line">
                    <h2 class="day">Ngày 2 - SAPA – FANSIPAN LEGEND – ĐÈO Ô QUY HỒ 03 bữa ăn: (Sáng, Trưa, Chiều)</h2>
                    <div class="excerpt">
                        <span class="line"></span>
                        <div class="text-excerpt">
                            Quý khách dùng điểm tâm sáng tại khách sạn. xe đưa đoàn ra ga Sapa, Quý khách trải nghiệm
                            đến
                            khu du lịch Fansipan Legend bằng Tàu hỏa leo núi Mường Hoa hiện đại nhất Việt Nam với tổng
                            chiều
                            dài gần 2000m, thưởng ngoạn bức tranh phong cảnh đầy màu sắc của cánh rừng nguyên sinh,
                            thung
                            lũng Mường Hoa. <br>
                            <ul>
                                <li>Chinh phục đỉnh núi Fansipan với độ cao 3.143m hùng vĩ bằng cáp treo (chi phí tự
                                    túc).
                                </li>
                                <li>Lễ Phật tại <b>chùa Trình</b> hay cầu phúc lộc, bình an cho gia đình tại <b>Bích Vân
                                        Thiền Tự</b> trong hệ thống cảnh quan tâm linh trên đỉnh Fansipan.</li>
                            </ul>
                            Tiếp tục hành trình, Quý khách dùng cơm trưa và tham quan:<br>
                            <ul>
                                <li>Chinh phục đèo <b>Ô Quy Hồ</b> - con đèo đẹp, hùng vĩ và dài nhất trong Tứ Đại Đỉnh
                                    Đèo
                                    miền Bắc.</li>
                                <li>Khu du lịch <b>Cổng Trời Ô Quy Hồ</b> - một trong những điểm săn mây, ngắm hoàng hôn
                                    cực
                                    đẹp tại Sapa.</li>
                            </ul>
                            Quý khách dùng cơm tối tại Sapa và tự do nghỉ ngơi.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 time-line">
                    <h2 class="day">Ngày 3 - SAPA – LÀO CAI - NINH BÌNH 03 bữa ăn: (Sáng, Trưa, Chiều)</h2>
                    <div class="excerpt">
                        <span class="line"></span>
                        <div class="text-excerpt">
                            Quý khách ăn sáng và trả phòng khách sạn. Xe khởi hành đưa Quý khách đi Ninh Bình, trên
                            đường
                            dừng tham quan mua sắm tại <b>Siêu thị Du lịch nông nghiệp Ocop Phú Thọ</b> và dùng cơm trưa
                            tại
                            nhà hàng địa phương. Đến nơi, Quý khách tham quan <b>Chùa Bái Đính</b>, một quần thể chùa
                            với
                            nhiều kỷ lục Việt Nam như pho tượng phật Di Lặc bằng đồng nặng 80 tấn, hành lang với 500
                            tượng
                            vị La Hán, tòa Bảo Tháp cao 99m… Quý khách dùng cơm tối và nhận phòng khách sạn nghỉ ngơi.
                            <br>
                            Tiếp tục hành trình, xe khởi hành đưa Quý khách ra sân bay Nội Bài làm thủ tục đón chuyến
                            bay về
                            Tp.HCM. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-text">
        <h1>Chính Sách Tour</h1>
    </div>
    <div class="policy">
        <div class="policy-box">
            <div class="header">
                <p>Tiên phong tặng BẢO HIỂM COVID cho toàn bộ khách hàng của hệ thống có tuổi từ 18 đến dưới 70</p>
            </div>
            <div class="list">
                <p>* Giá tour bao gồm: </p>
                <p> Xe phục vụ theo chương trình </p>
                <p> Các bữa ăn theo chương trình: 1 bữa sáng + 1 bữa trưa+ 1 bữa tối.</p>
                <p> Chi phí tham quan theo chương trình.</p>
                <p> Chi phí xe điện, tàu thuyền tham quan theo chương trình</p>
                <p> Hướng dẫn viên tiếng Việt.</p>
                <p> Bảo hiểm du lịch, bảo hiểm Covid</p>
                <p> Nón, khẩu trang y tế.</p>
                <p> Nước suối, khăn lạnh: 2 đơn vị/ ngày/ khách.</p>
                <p> Thuế VAT</p>
            </div>
            <div class="list2">
                <p>* Giá tour không bao gồm:</p>
                <p>Chi phí tham quan, ăn uống ngoài chương trình, </p>
                <p>Chi phí cá nhân khác</p>
            </div>
        </div>
    </div>
    <div class="border"></div>
    <div>
        <div id="tour-title">
            <h2>Sản Phẩm Tương Tự</h2>
        </div>
    </div>
    <div class="product-pop">
        <div class="product-box">
            <div class="img-box"><a href=""><img src="/assets/layout_user/img/tour-nhieu.png" alt=""></a></div>
            <div class="text-box">
                <p>Du lịch Châu Á</p>
                <p><a href="">Khách sạn Grand Hồ Tràm Khuyến Mãi 5 Sao</a></p>
            </div>
            <div class="price-box"><span>1,999,000đ</span></div>
        </div>
        <div class="product-box">
            <div class="img-box"><a href=""><img src="/assets/layout_user/img/tour-nh-2.jpg" alt=""></a></div>
            <div class="text-box">
                <p>Du lịch Châu Á</p>
                <p><a href="">Tour Miền Trung, Tặng vé cáp treo, Buffet trưa, tối & KS4* tại Bà Nà</a></p>
            </div>
            <div class="price-box"><span>4,999,000đ</span></div>
        </div>
        <div class="product-box">
            <div class="img-box"><a href=""><img src="/assets/layout_user/img/tour-nh-3.png" alt=""></a></div>
            <div class="text-box">
                <p>Du lịch Châu Á</p>
                <p><a href="">Bleach Resort Phan Thiết Khuyến Mãi Mùa Đông</a></p>
            </div>
            <div class="price-box"><span>2,999,000đ</span></div>
        </div>
    </div>
</div>
<div id="contact">
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
                        <textarea name="" id="textarea-form" cols="55" rows="7" placeholder="Nội dung"></textarea>
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
@endsection