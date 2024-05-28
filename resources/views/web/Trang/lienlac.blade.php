@extends('web.main')

@section('content')

    <main>
        <section class="container stylization maincont">


            <ul class="b-crumbs">
                <li>
                    <a href="/trangchu">
                        Trang chủ
                    </a>
                </li>
                <li>
                    <span>Liên lạc</span>
                </li>
            </ul>
            <h1 class="main-ttl"><span>Liên lạc</span></h1>
            <!-- Contacts - start -->
            <br>
            <div class="iconbox-wrap">
                <div class="row iconbox-list">
                    <div class="cf-xs-6 cf-sm-4 cf-lg-4 col-xs-6 col-sm-4 iconbox-i">
                        <p class="iconbox-i-img"><!-- NO SPACE --><img src="/web/img/tieu-chuan-chuyen-cuoc-goi-cho-nhan-vien-khach-san-4.jpg" alt=""><!-- NO SPACE --></p>
                        <h3 class="iconbox-i-ttl">+7 777 123 4567</h3>
                        Let's have a<br>
                        talk together
                        <span class="iconbox-i-margin"></span>
                    </div>
                    <div class="cf-xs-6 cf-sm-4 cf-lg-4 col-xs-6 col-sm-4 iconbox-i">
                        <p class="iconbox-i-img"><!-- NO SPACE --><img src="/web/img/giay-99-36370.jpg" alt=""><!-- NO SPACE --></p>
                        <h3 class="iconbox-i-ttl">ĐỊA CHỈ CỦA CHÚNG TÔI</h3>
                        Mai Đăng Chơn - Đà Nẵng - VN
                        <span class="iconbox-i-margin"></span>
                    </div>
                    <div class="cf-xs-6 cf-sm-4 cf-lg-4 col-xs-6 col-sm-4 iconbox-i">
                        <p class="iconbox-i-img"><!-- NO SPACE --><img src="/web/img/shop-giay-phu-yen-5.jpg" alt=""><!-- NO SPACE --></p>
                        <h3 class="iconbox-i-ttl">LỊCH TRÌNH</h3>
                        Thứ Hai-Thứ Sáu 07: 00-22: 00
                        <br>
                        Thứ Bảy-Chủ Nhật đóng cửa
                        <span class="iconbox-i-margin"></span>
                    </div>
                </div>
            </div>

            <!-- Contacts Info - end -->
            <div class="social-wrap">
                <div class="social-list">
                    <div class="social-i">
                        <a rel="nofollow" target="_blank" href="http://facebook.com/">
                            <p class="social-i-img">
                                <i class="fa fa-facebook"></i>
                            </p>
                            <p class="social-i-ttl">Facebook</p>
                        </a>
                    </div>
                    <div class="social-i">
                        <a rel="nofollow" target="_blank" href="http://google.com/">
                            <p class="social-i-img">
                                <i class="fa fa-google-plus"></i>
                            </p>
                            <p class="social-i-ttl">Google +</p>
                        </a>
                    </div>
                    <div class="social-i">
                        <a rel="nofollow" target="_blank" href="http://twitter.com/">
                            <p class="social-i-img">
                                <i class="fa fa-twitter"></i>
                            </p>
                            <p class="social-i-ttl">Twitter</p>
                        </a>
                    </div>
                    <div class="social-i">
                        <a rel="nofollow" target="_blank" href="http://vk.com/">
                            <p class="social-i-img">
                                <i class="fa fa-vk"></i>
                            </p>
                            <p class="social-i-ttl">Vkontakte</p>
                        </a>
                    </div>
                    <div class="social-i">
                        <a rel="nofollow" target="_blank" href="http://instagram.com/">
                            <p class="social-i-img">
                                <i class="fa fa-instagram"></i>
                            </p>
                            <p class="social-i-ttl">Instagram</p>
                        </a>
                    </div>
                    <div class="social-i">
                        <a rel="nofollow" target="_blank" href="http://youtube.com/">
                            <p class="social-i-img">
                                <i class="fa fa-youtube"></i>
                            </p>
                            <p class="social-i-ttl">Youtube</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contactform-wrap">
                <form action="#" class="form-validate">
                    <h3 class="component-ttl component-ttl-ct component-ttl-hasdesc"><span>Nhận xét & Đánh giá</span></h3>
                    <p class="component-desc component-desc-ct">Alias minima veritatis unde illo deserunt omnis facilis</p>
                    <p class="contactform-field contactform-text">
                        <label class="contactform-label">Name</label><!-- NO SPACE --><span class="contactform-input"><input placeholder="Name" type="text" name="name" data-required="text"></span>
                    </p>
                    <p class="contactform-field contactform-email">
                        <label class="contactform-label">E-mail</label><!-- NO SPACE --><span class="contactform-input"><input placeholder="Your E-mail" type="text" name="email" data-required="text" data-required-email="email"></span>
                    </p>
                    <p class="contactform-field contactform-textarea">
                        <label class="contactform-label">Message</label><!-- NO SPACE --><span class="contactform-input"><textarea placeholder="Your message" name="mess" data-required="text"></textarea></span>
                    </p>

                    <div class="prod-comment-submit">
{{--                        <input type="submit" value="Submit">--}}
                        <div class="prod-rating">
                            <i class="fa fa-star-o" title="5"></i><i class="fa fa-star-o" title="4"></i><i class="fa fa-star-o" title="3"></i><i class="fa fa-star-o" title="2"></i><i class="fa fa-star-o" title="1"></i>
                        </div>
                        <p class="contactform-submit">
                            <input value="Send" type="submit">
                        </p>

                    </div>
                </form>
            </div>
            <br>
            <br>
            <!-- Google Maps -->
{{--            <div class="contacts-map allstore-gmap" style="position: relative; overflow: hidden;">--}}
{{--                --}}
{{--            </div>--}}
            <div >
                <center>
                    <iframe class="allstore-gmap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15343.31481796549!2d108.24033465033531!3d15.970319371527449!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4!5e0!3m2!1svi!2s!4v1632722742684!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </center>
            </div>
            <!-- Contacts - end -->

        </section>
    </main>

@endsection
