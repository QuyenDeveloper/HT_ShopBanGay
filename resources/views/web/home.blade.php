
@extends('web.main')


@section('content')

    <!-- Main Content - start -->
    <main>
        <section class="container">


            <!-- Slider -->
            <div class="fr-slider-wrap">
                <div class="fr-slider">
                    <ul class="slides">
                        <li>
                            <img src="web/img/slider/nike.png" alt="">
                            <div class="fr-slider-cont" style="color: black">
                                <h3>GIẢM GIÁ -30%</h3>
                                <p>Tất cả chúng tôi đều có sự lựa chọn cho bạn.</p>
                                <p class="fr-slider-more-wrap">
                                    <a class="fr-slider-more" href="/trangchu/sanpham/giam_gia">Xem bộ sưu tập</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <img src="web/img/slider/slide2.jpg" alt="">
                            <div class="fr-slider-cont" style="color: white">
                                <h3 style="color: white">BỘ SƯU TẬP MỚI</h3>
                                <p >Bản thân nỗi đau là rất nhiều nỗi đau, nó được tăng cường bởi quá trình tạo mỡ.<br>
                                    Hãy mua một đôi giày cuungf tập luyện thôi nào!</p>
                                <p class="fr-slider-more-wrap">
                                    <a class="fr-slider-more" href="/trangchu/sanpham/thuvien">MUA SẮM NGAY BÂY GIỜ</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <img src="web/img/slider/slide3.png" alt="">
                            <div class="fr-slider-cont">
                                <h3>XU HƯỚNG MÙA HÈ</h3>
                                <p>Bản thân nỗi đau là rất nhiều nỗi đau, nó được tăng cường bởi quá trình tạo mỡ.<br>
                                    Hãy mua một đôi giày cuungf tập luyện thôi nào!</p>
                                <p class="fr-slider-more-wrap">
                                    <a class="fr-slider-more" href="/trangchu/sanpham/thuvien">BẮT ĐẦU MUA SẮM</a>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


            <!-- Popular Products -->
            <div class="fr-pop-wrap">

                <h3 class="component-ttl"><span>Sản phẩm phổ biến</span></h3>

                <ul class="fr-pop-tabs sections-show">
                    <li><a data-frpoptab-num="1" data-frpoptab="#frpoptab-tab-1" href="#" class="active">Tất cả doanh mục</a></li>
                    <li><a data-frpoptab-num="2" data-frpoptab="#frpoptab-tab-2" href="#">Nam</a></li>
                    <li><a data-frpoptab-num="3" data-frpoptab="#frpoptab-tab-3" href="#">Nữ</a></li>
                    <li><a data-frpoptab-num="4" data-frpoptab="#frpoptab-tab-4" href="#">Trẻ em</a></li>
                </ul>

                <div class="fr-pop-tab-cont">
{{--                    ALL--}}
                    <p data-frpoptab-num="1" class="fr-pop-tab-mob active" data-frpoptab="#frpoptab-tab-1">All Categories</p>
                    <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-1">

                        <ul class="slides">

                            @foreach($products_all as $product_all)
                                <li class="prod-i">
                                    <div class="prod-i-top">
                                        <a href="/trangchu/sanpham/NDsanphan/{{$product_all->id}}" class="prod-i-img"><img  src="{{$product_all->anh1}}" alt="Aspernatur excepturi rem"/></a>
                                        <p class="prod-i-info">
                                        </p>
                                    </div>
                                    <h3>
                                        <a href="/trangchu/sanpham/NDsanphan/{{$product_all->id}}">{{$product_all->name}}</a>
                                    </h3>
                                    <p class="prod-i-price">
                                        <?php $return = true ?>
                                        @if($return && $product_all->money_sale > 0)
                                            <center><p>{{$product_all->money_sale}} đ - <strike style="color: red;">{{$product_all->money}} đ</strike></p></center>

                                    <?php $return = false ?>
                                    @endif
                                    @if($return)
                                        <center><p>{{$product_all->money}} đ</p></center>
                                        @endif
                                        </p>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                    <p data-frpoptab-num="2" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-2">Nam</p>
                    <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-2">

                        <ul class="slides">

                            @foreach($products_nam as $product_nam)
                                <li class="prod-i">
                                    <div class="prod-i-top">
                                        <a href="/trangchu/sanpham/NDsanphan/{{$product_nam->id}}" class="prod-i-img"><img  src="{{$product_nam->anh1}}" alt="Aspernatur excepturi rem"/></a>
                                        <p class="prod-i-info">
{{--                                            <a href="" onclick="themVaoyeuthich3('{{$product_nam->id}}')" class="prod-i-favorites"><span>Yêu Thích</span><i class="fa fa-heart"></i></a>--}}
{{--                                            <a href="/trangchu/sanpham/NDsanphan/{{$product_nam->id}}" class=" prod-i-qview"><span>Chi Tiết</span><i class="fa fa-search"></i></a>--}}
{{--                                            <a class="prod-i-compare" href="#"><span>So Sánh</span><i class="fa fa-bar-chart"></i></a>--}}
                                        </p>
{{--                                        <p class="prod-i-addwrap">--}}
{{--                                            <a href="#" class="prod-i-add">Thêm Vào Giỏ hàng</a>--}}
{{--                                        </p>--}}
                                    </div>
                                    <h3>
                                        <a href="/trangchu/sanpham/NDsanphan/{{$product_nam->id}}">{{$product_nam->name}}</a>
                                    </h3>
                                    <p class="prod-i-price">
                                        <?php $return = true ?>
                                        @if($return && $product_nam->money_sale > 0)
                                            <center><p>{{$product_nam->money_sale}} đ - <strike style="color: red;">{{$product_nam->money}} đ</strike></p></center>

                                    <?php $return = false ?>
                                    @endif
                                    @if($return)
                                        <center><p>{{$product_nam->money}} đ</p></center>
                                        @endif
                                        </p>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                    <p data-frpoptab-num="3" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-3">Nữ</p>
                    <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-3">

                        <ul class="slides">

                            @foreach($products_nu as $product_nu)
                                <li class="prod-i">
                                    <div class="prod-i-top">
                                        <a href="/trangchu/sanpham/NDsanphan/{{$product_nu->id}}" class="prod-i-img"><img  src="{{$product_nu->anh1}}" alt="Aspernatur excepturi rem"/></a>
                                        <p class="prod-i-info">
{{--                                            <a href=""  onclick="themVaoyeuthich3('{{$product_nu->id}}')" class="prod-i-favorites"><span>Yêu Thích</span><i class="fa fa-heart"></i></a>--}}
{{--                                            <a href="/trangchu/sanpham/NDsanphan/{{$product_nu->id}}" class="prod-i-qview"><span>Chi Tiết</span><i class="fa fa-search"></i></a>--}}
{{--                                            <a class="prod-i-compare" href="#"><span>So Sánh</span><i class="fa fa-bar-chart"></i></a>--}}
                                        </p>
{{--                                        <p class="prod-i-addwrap">--}}
{{--                                            <a href="#" class="prod-i-add">Thêm Vào Giỏ hàng</a>--}}
{{--                                        </p>--}}
                                    </div>
                                    <h3>
                                        <a href="/trangchu/sanpham/NDsanphan/{{$product_nu->id}}">{{$product_nu->name}}</a>
                                    </h3>
                                    <p class="prod-i-price">
                                        <?php $return = true ?>
                                        @if($return && $product_nu->money_sale > 0)
                                            <center><p>{{$product_nu->money_sale}} đ - <strike style="color: red;">{{$product_nu->money}} đ</strike></p></center>

                                    <?php $return = false ?>
                                    @endif
                                    @if($return)
                                        <center><p>{{$product_nu->money}} đ</p></center>
                                        @endif
                                        </p>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                    <p data-frpoptab-num="4" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-4">Trẻ em</p>
                    <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-4">

                        <ul class="slides">

                            @foreach($products_treem0 as $product_treem0)
                                <li class="prod-i">
                                    <div class="prod-i-top">
                                        <a href="/trangchu/sanpham/NDsanphan/{{$product_treem0->id}}" class="prod-i-img"><img  src="{{$product_treem0->anh1}}" alt="Aspernatur excepturi rem"/></a>
                                        <p class="prod-i-info">
{{--                                            <a href="" onclick="themVaoyeuthich3('{{$product_treem0->id}}')" class="prod-i-favorites"><span>Yêu Thích</span><i class="fa fa-heart"></i></a>--}}
{{--                                            <a href="/trangchu/sanpham/NDsanphan/{{$product_treem0->id}}" class=" prod-i-qview"><span>Chi Tiết</span><i class="fa fa-search"></i></a>--}}
{{--                                            <a class="prod-i-compare" href="#"><span>So Sánh</span><i class="fa fa-bar-chart"></i></a>--}}
                                        </p>
{{--                                        <p class="prod-i-addwrap">--}}
{{--                                            <a href="#" class="prod-i-add">Thêm Vào Giỏ hàng</a>--}}
{{--                                        </p>--}}
                                    </div>
                                    <h3>
                                        <a href="/trangchu/sanpham/NDsanphan/{{$product_treem0->id}}">{{$product_treem0->name}}</a>
                                    </h3>
                                    <p class="prod-i-price">
                                        <?php $return = true ?>
                                        @if($return && $product_treem0->money_sale > 0)
                                            <center><p>{{$product_treem0->money_sale}} đ - <strike style="color: red;">{{$product_treem0->money}} đ</strike></p></center>

                                    <?php $return = false ?>
                                    @endif
                                    @if($return)
                                        <center><p>{{$product_treem0->money}} đ</p></center>
                                        @endif
                                        </p>
                                </li>
                            @endforeach
                        </ul>

                    </div>


            <!-- Banners -->
            <div class="banners-wrap">
                <div class="banners-list">
                    <div class="banner-i style_11">
                        <span class="banner-i-bg" style="background: url('web/imgs/giay1.jpg');"></span>
                        <div class="banner-i-cont">
                            <p class="banner-i-subttl">BỘ SƯU TẬP MỚI</p>
                            <h3 class="banner-i-ttl">GIÀY NAM</h3>
                            <p class="banner-i-link"><a href="/trangchu/sanpham/thuvien/Nam">XEM THÊM</a></p>
                        </div>
                    </div>
                    <div class="banner-i style_22">
                        <span class="banner-i-bg" style="background: url('web/imgs/PKIEN.jpg');"></span>
                        <div class="banner-i-cont">
                            <p class="banner-i-subttl">BỘ SƯU TẬP TUYỆT VỜI</p>
                            <h3 class="banner-i-ttl">PHỤ KIỆN GIÀY</h3>
                            <p class="banner-i-link"><a href="/trangchu/phukien">XEM NHIỀU HƠN</a></p>
                        </div>
                    </div>
                    <div class="banner-i style_21">
                        <span class="banner-i-bg" style="background: url('web/imgs/THAO.jpg');"></span>
                        <div class="banner-i-cont">
                            <h3 class="banner-i-ttl">GIÀY THỂ THAO</h3>
                            <p class="banner-i-link"><a href="/trangchu/sanpham/thuvien">ĐI TỚI DOANH MỤC</a></p>
                        </div>
                    </div>
                    <div class="banner-i style_21">
                        <span class="banner-i-bg" style="background: url('web/imgs/NN.png');"></span>
                        <div class="banner-i-cont">
                            <h3 class="banner-i-ttl">GIÀY NAM & NỮ</h3>
                            <p class="banner-i-link"><a href="/trangchu/sanpham/thuvien">XEM THÊM</a></p>
                        </div>
                    </div>
                    <div class="banner-i style_22">
                        <span class="banner-i-bg" style="background: url('web/imgs/SALE.jpg');"></span>
                        <div class="banner-i-cont">
                            <p class="banner-i-subttl">GIẢM -20%</p>
                            <h3 class="banner-i-ttl">BỘ SƯU TẬP</h3>
                            <p class="banner-i-link"><a href="/trangchu/sanpham/giam_gia">MUA SẮM NGAY BÂY GIỜ</a></p>
                        </div>
                    </div>
                    <div class="banner-i style_12">
                        <span class="banner-i-bg" style="background: url('web/imgs/GNu.jpg');"></span>
                        <div class="banner-i-cont">
                            <p class="banner-i-subttl">GIÀY PHONG CÁCH</p>
                            <h3 class="banner-i-ttl">BỘ SƯU TẬP NỮ</h3>
                            <p>Một lựa chọn tuyệt vời về giày và một số phụ kiện</p>
                            <p class="banner-i-link"><a href="/trangchu/sanpham/thuvien/Nu">XEM THÊM</a></p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Special offer -->
            <div class="discounts-wrap">
                <h3 class="component-ttl"><span>Giảm giá đặt biệt</span></h3>
{{--                //PHP--}}
                <div class="flexslider discounts-list" >
                    <ul class="slides">
                        @foreach($products_sale as $product_sale)
                            <li class="discounts-i" style="width: 40px;">
                                <a href="/trangchu/sanpham/NDsanphan/{{$product_sale->id}}" class="discounts-i-img">
                                    <img src="{{$product_sale->anh1}}" alt="Dicta doloremque">
                                </a>
                                <h3 class="discounts-i-ttl">
                                    <a href="/trangchu/sanpham/NDsanphan/{{$product_sale->id}}">{{$product_sale->name}}</a>
                                </h3>
                                <p class="discounts-i-price">
                                <p>{{$product_sale->money_sale}} đ  </p>
                                <p><strike style="color: red;">{{$product_sale->money}} đ </strike></p>
                                </p>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Special offer -->
                <div class="discounts-info">
                    <div style="margin-top: -100px;">
                        <p>Giảm giá đặt biệt!<br>Thời gian có hạn</p>
                        <a href="/trangchu/sanpham/giam_gia">MUA SẮM NGAY BÂY GIỜ</a>
                    </div>

                </div>
            </div>


            <!-- Latest news -->
            <div class="posts-wrap">
                <div class="posts-list">
                    <div class="posts-i">
                        <a class="posts-i-img" href="/trangchu/blog">
                            <span style="background: url('/web/imgs/G1.jpg')"></span>
                        </a>
                        <time class="posts-i-date" datetime="2021-09-27 00:00:00"><span>27</span> Tháng 9</time>
                        <div class="posts-i-info">
                            <a href="blog.html" class="posts-i-ctg">Nhận Xét</a>
                            <h3 class="posts-i-ttl">
                                <a href="post.html">tìm kiếm</a>
                            </h3>
                        </div>
                    </div>
                    <div class="posts-i">
                        <a class="posts-i-img" href="/trangchu/blog">
                            <span style="background: url('/web/imgs/G2.jpg')"></span>
                        </a>
                        <time class="posts-i-date" datetime="2021-09-26 00:00:00"><span>26</span> Tháng 9</time>
                        <div class="posts-i-info">
                            <a href="blog.html" class="posts-i-ctg">Bài Viết</a>
                            <h3 class="posts-i-ttl">
                                <a href="post.html">Sản phẩm</a>
                            </h3>
                        </div>
                    </div>
                    <div class="posts-i">
                        <a class="posts-i-img" href="/trangchu/blog">
                            <span style="background: url('/web/imgs/G3.jpg')"></span>
                        </a>
                        <time class="posts-i-date" datetime="2021-09-25 00:00:00"><span>25</span> Tháng 9</time>
                        <div class="posts-i-info">
                            <a href="blog.html" class="posts-i-ctg">Tin Tức</a>
                            <h3 class="posts-i-ttl">
                                <a href="post.html">Đây là điều hầu hết mọi người đều từ bỏ</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Testimonials -->
            <div class="reviews-wrap">
                <div class="reviewscar-wrap">
                    <div class="swiper-container reviewscar">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <p>Bản thân nỗi đau là quan trọng, nhưng tôi cho nó vào nỗi đau của một nỗi đau lớn nào đó. Để ít nhất sắp tới, chúng ta phải thực hiện bất kỳ trường lao động nào ngoại trừ việc tận dụng các mục tiêu từ đó để đạt được. Bài tập về nhà</p>
                            </div>
                            <div class="swiper-slide">
                                <p>Ông ta muốn tham nhũng, nhưng liệu tôi có mở lỗi cho người vĩ đại, người mà trong khi buộc tội ông ta về những món nợ và những lần chúng ta có thể được chấp nhận, vậy liệu ông ta có tha thứ cho nỗi đau của tôi, chứ không phải niềm vui? Anh ta càng từ chối những lời nói và sự đau đớn. Nỗi đau của việc chọn một thứ gì đó tương tự, và cùng với nó, sự thật của nó</p>
                            </div>
                            <div class="swiper-slide">
                                <p>Tuy nhiên, sự phân biệt giữa những cách thức mà một số người chọn từ bỏ những khó khăn của việc lựa chọn theo thời gian, nhưng có lý do gì để khiến họ quay trở lại nhiệm vụ của mình? Không ai nên phân biệt nhanh những điều với những người khen ngợi mình, rằng không ai mong muốn bất kỳ niềm vui nào hoặc bất cứ điều gì từ niềm vui lớn của thú vui</p>
                            </div>
                            <div class="swiper-slide">
                                <p>Bản thân nỗi đau là quan trọng, nhưng tôi cho nó vào nỗi đau của một nỗi đau lớn nào đó. Để ít nhất sắp tới, chúng ta phải thực hiện bất kỳ trường lao động nào ngoại trừ việc tận dụng các mục tiêu từ đó để đạt được. Bài tập về nhà</p>
                            </div>
                            <div class="swiper-slide">
                                <p>Toàn bộ nội dung được lựa chọn từ những thứ tương tự, cùng với rất nhiều thứ, cho các dịch vụ của một chuyên gia vào thời đó, loại thứ mà chúng bị chỉ trích nhiều nhất, bị bỏ rơi và sự khác biệt giữa chúng đã được chơi! Bất cứ ai biết bất kỳ sự khác biệt hey? Đây là nỗi đau mà họ để lại cho một số người</p>
                            </div>
                            <div class="swiper-slide">
                                <p>Thời gian hoặc là vì lý do đó, nhưng chỉ dành cho những người không có thông điệp lâu dài, hoặc trong thời gian may mắn, tâm trạng. Điều này ít phải theo dõi hơn, vì chúng ta bắt anh ta không có hậu quả gì hơn là xử lý hậu quả của anh ta. Tôi sẽ trở thành hiện hữu, và nỗi đau sẽ trở thành nguồn vui chính trong những nhu cầu thiết yếu của cuộc sống</p>
                            </div>
                            <div class="swiper-slide">
                                <p>Hậu quả được chấp nhận là thông điệp, không phải lỗi. Hơn nữa, tôi sẽ ít dễ dàng đến với những bổn phận của hiện tại, không bị cản trở bởi những nỗi đau của hiện tại, hoặc để được chấp nhận bởi những nỗi đau, Chỉ và hạnh phúc</p>
                            </div>
                            <div class="swiper-slide">
                                <p>Trừ khi họ rơi vào một thứ gì đó lỏng lẻo, thì những nỗi đau cũng theo đó mà xảy ra, và họ không biết rằng người được chọn đang bị mù quáng bởi chính những rắc rối đó; Nhưng nếu một người ghét thời gian, nỗi đau còn lớn hơn những thú vui mà một số người xa lánh thời gian như một kiến trúc sư.</p>
                            </div>
                            <div class="swiper-slide">
                                <p>Từ chối những cách đó, những khó chịu, những nỗi đau mà chúng ta cho là kết quả của những lựa chọn của một người đàn ông hạnh phúc, những thú vui lớn lao, bởi vì anh ta đến với anh ta như những nỗi đau của cuộc đời? Sự lựa chọn thường là những thứ sẽ đi kèm với các thông điệp</p>
                            </div>
                            <div class="swiper-slide">
                                <p>Từ chối những cách đó, những khó chịu, những nỗi đau mà chúng ta cho là kết quả của những lựa chọn của một người đàn ông hạnh phúc, những thú vui lớn lao, bởi vì anh ta đến với anh ta như những nỗi đau của cuộc đời? Sự lựa chọn thường là những thứ sẽ đi kèm với các thông điệp</p>
                            </div>
                            <div class="swiper-slide">
                                <p>Điều đó, khi tách rời khỏi trách nhiệm tham nhũng của họ, hoặc thậm chí là người tạo ra sự sống, ngăn cản họ ghét họ, và với sự căm ghét đó của những người có mặt chỉ yêu thích nỗi đau của thú vui, sự phân biệt này được cho là lớn hơn và đau đớn hơn. Nỗi đau đớn về tâm hồn vất vả mà không ai được chọn</p>
                            </div>
                            <div class="swiper-slide">
                                <p>Sẽ đến với chúng tôi rằng chúng tôi có thể ít có khả năng làm như vậy, vì những nỗi đau và nợ nần tương tự, nhưng chúng tôi không có lựa chọn nào khác ngoài việc làm khác. Nó dễ dàng, đối với nỗi đau của nghĩa vụ của sự thật, với nỗi đau mà khoái cảm là thứ của cơ thể chứ không phải là văn phòng của những người đáng bị đau nhất, nó muốn được chấp nhận.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-container reviewscar-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/web/img/phil-knight-4104-1520930023.jpg" alt="Aureole Jayde">
                                <h3 class="reviewscar-ttl"><a href="reviews.html">Aureole Jayde</a></h3>
                                <p class="reviewscar-post">Giám Đốc</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="/web/img/phil-knight-4104-1520930023.jpg" alt="Benjy Darrin">
                                <h3 class="reviewscar-ttl"><a href="reviews.html">Benjy Darrin</a></h3>
                                <p class="reviewscar-post">Thiết kế</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="/web/img/phil-knight-4104-1520930023.jpg" alt="Jeni Margie">
                                <h3 class="reviewscar-ttl"><a href="reviews.html">Jeni Margie</a></h3>
                                <p class="reviewscar-post">Nhà Phát Triển</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="/web/img/phil-knight-4104-1520930023.jpg" alt="Edweena Chelsea">
                                <h3 class="reviewscar-ttl"><a href="reviews.html">Edweena Chelsea</a></h3>
                                <p class="reviewscar-post">Người Quản lý</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="/web/img/phil-knight-4104-1520930023.jpg" alt="Sean Rudolph">
                                <h3 class="reviewscar-ttl"><a href="reviews.html">Sean Rudolph</a></h3>
                                <p class="reviewscar-post">Thiết kế</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="/web/img/phil-knight-4104-1520930023.jpg" alt="Brigham Murphy">
                                <h3 class="reviewscar-ttl"><a href="reviews.html">Brigham Murphy</a></h3>
                                <p class="reviewscar-post">Giám Đốc</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="/web/img/phil-knight-4104-1520930023.jpg" alt="Barrie Roderick">
                                <h3 class="reviewscar-ttl"><a href="reviews.html">Barrie Roderick</a></h3>
                                <p class="reviewscar-post">Người Quản lý</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="/web/img/phil-knight-4104-1520930023.jpg" alt="John Doe">
                                <h3 class="reviewscar-ttl"><a href="reviews.html">John Doe</a></h3>
                                <p class="reviewscar-post">Nhà Phát Triển</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="/web/img/phil-knight-4104-1520930023.jpg" alt="Shirlee Annabel">
                                <h3 class="reviewscar-ttl"><a href="reviews.html">Shirlee Annabel</a></h3>
                                <p class="reviewscar-post">Người Quản lý</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="/web/img/phil-knight-4104-1520930023.jpg" alt="Lettice Alyce">
                                <h3 class="reviewscar-ttl"><a href="reviews.html">Lettice Alyce</a></h3>
                                <p class="reviewscar-post">Giám Đốc</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="/web/img/phil-knight-4104-1520930023.jpg" alt="Meriel Glory">
                                <h3 class="reviewscar-ttl"><a href="reviews.html">Meriel Glory</a></h3>
                                <p class="reviewscar-post">Nhà Phát Triển</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="/web/img/phil-knight-4104-1520930023.jpg" alt="Janene Alaina">
                                <h3 class="reviewscar-ttl"><a href="reviews.html">Janene Alaina</a></h3>
                                <p class="reviewscar-post">Nhà Phát Triển</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Subscribe Form -->
            <div class="newsletter">
                <h3>Đăng ký với chúng tôi</h3>
                <p style="width: 50%;">Nhập email của bạn nếu bạn muốn nhận tin tức của chúng tôi</p>
                <form id="ID_form" action="" method="post">
{{--                    @include('web.admin.alert')--}}
                    <input id="nhapmail" type="email" name="mail" placeholder="Email của bạn" >
{{--                    <input  name="OK" value="Gửi" type="submit">--}}
                    <input  name="OK" value="Gửi" type="button" onclick="mailTtin()">
                    @csrf
                </form>
            </div>

                    <!-- Quick View Product - start -->
{{--                    <div class="qview-modal">--}}
{{--                        <div class="prod-wrap">--}}
{{--                            <a href="#">--}}
{{--                                <h1 class="main-ttl">--}}
{{--                                    <span>sản phẩm</span>--}}
{{--                                </h1>--}}
{{--                            </a>--}}
{{--                            <div class="prod-slider-wrap">--}}
{{--                                <div class="prod-slider">--}}
{{--                                    <ul class="prod-slider-car">--}}
{{--                                        @if($product_all->anh1 != null)--}}
{{--                                            <li>--}}
{{--                                                <a data-fancybox-group="popup-product" class="fancy-img" href="{{$product_all->anh1}}">--}}
{{--                                                    <img src="{{$product_all->anh1}}" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                        @if($product_all->anh2 != null)--}}
{{--                                            <li>--}}
{{--                                                <a data-fancybox-group="popup-product" class="fancy-img" href="{{$product_all->anh2}}">--}}
{{--                                                    <img src="{{$product_all->anh2}}" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                        @if($product_all->anh3 != null)--}}
{{--                                            <li>--}}
{{--                                                <a data-fancybox-group="popup-product" class="fancy-img" href="{{$product_all->anh3}}">--}}
{{--                                                    <img src="{{$product_all->anh3}}" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                        @if($product_all->anh4 != null)--}}
{{--                                            <li>--}}
{{--                                                <a data-fancybox-group="popup-product" class="fancy-img" href="{{$product_all->anh4}}">--}}
{{--                                                    <img src="{{$product_all->anh4}}" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                        @if($product_all->anh5 != null)--}}
{{--                                            <li>--}}
{{--                                                <a data-fancybox-group="popup-product" class="fancy-img" href="{{$product_all->anh5}}">--}}
{{--                                                    <img src="{{$product_all->anh5}}" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                        @if($product_all->anh6 != null)--}}
{{--                                            <li>--}}
{{--                                                <a data-fancybox-group="popup-product" class="fancy-img" href="{{$product_all->anh6}}">--}}
{{--                                                    <img src="{{$product_all->anh6}}" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                        @if($product_all->anh7 != null)--}}
{{--                                            <li>--}}
{{--                                                <a data-fancybox-group="popup-product" class="fancy-img" href="{{$product_all->anh7}}">--}}
{{--                                                    <img src="{{$product_all->anh7}}" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                        @if($product_all->anh8 != null)--}}
{{--                                            <li>--}}
{{--                                                <a data-fancybox-group="popup-product" class="fancy-img" href="{{$product_all->anh8}}">--}}
{{--                                                    <img src="{{$product_all->anh8}}" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                        @if($product_all->anh9 != null)--}}
{{--                                            <li>--}}
{{--                                                <a data-fancybox-group="popup-product" class="fancy-img" href="{{$product_all->anh9}}">--}}
{{--                                                    <img src="{{$product_all->anh9}}" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                        @if($product_all->anh10 != null)--}}
{{--                                            <li>--}}
{{--                                                <a data-fancybox-group="popup-product" class="fancy-img" href="{{$product_all->anh10}}">--}}
{{--                                                    <img src="{{$product_all->anh10}}" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}

{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="prod-thumbs">--}}
{{--                                    <ul class="prod-thumbs-car">--}}
{{--                                        @if($product_all->anh1 != null)--}}
{{--                                            <li>--}}
{{--                                                <a data-slide-index="0" href="#">--}}
{{--                                                    <img src="{{$product_all->anh1}}" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                        @if($product_all->anh2 != null)--}}
{{--                                            <li>--}}
{{--                                                <a data-slide-index="1" href="#">--}}
{{--                                                    <img src="{{$product_all->anh2}}" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                        @if($product_all->anh3 != null)--}}
{{--                                            <li>--}}
{{--                                                <a data-slide-index="2" href="#">--}}
{{--                                                    <img src="{{$product_all->anh3}}" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                        @if($product_all->anh4 != null)--}}
{{--                                            <li>--}}
{{--                                                <a data-slide-index="3" href="#">--}}
{{--                                                    <img src="{{$product_all->anh4}}" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                        @if($product_all->anh5 != null)--}}
{{--                                            <li>--}}
{{--                                                <a data-slide-index="4" href="#">--}}
{{--                                                    <img src="{{$product_all->anh5}}" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                        @if($product_all->anh6 != null)--}}
{{--                                            <li>--}}
{{--                                                <a data-slide-index="5" href="#">--}}
{{--                                                    <img src="{{$product_all->anh6}}" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                        @if($product_all->anh7 != null)--}}
{{--                                            <li>--}}
{{--                                                <a data-slide-index="6" href="#">--}}
{{--                                                    <img src="{{$product_all->anh7}}" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                        @if($product_all->anh8 != null)--}}
{{--                                            <li>--}}
{{--                                                <a data-slide-index="6" href="#">--}}
{{--                                                    <img src="{{$product_all->anh8}}" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                        @if($product_all->anh9 != null)--}}
{{--                                            <li>--}}
{{--                                                <a data-slide-index="6" href="#">--}}
{{--                                                    <img src="{{$product_all->anh9}}" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                        @if($product_all->anh10 != null)--}}
{{--                                            <li>--}}
{{--                                                <a data-slide-index="6" href="#">--}}
{{--                                                    <img src="{{$product_all->anh10}}" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="prod-cont">--}}
{{--                                <p class="prod-actions">--}}
{{--                                    <a href="#" class="prod-favorites"><i class="fa fa-heart"></i> Yêu thích</a>--}}
{{--                                    <a href="#" class="prod-compare"><i class="fa fa-bar-chart"></i> So sánh</a>--}}
{{--                                </p>--}}
{{--                                <div class="prod-skuwrap">--}}
{{--                                    <p class="prod-skuttl">Màu sắt</p>--}}
{{--                                    <ul class="prod-skucolor">--}}
{{--                                        @foreach($products_all as $products_loai)--}}
{{--                                            @if($product_all->name == $products_loai->name)--}}
{{--                                                <li class="active">--}}
{{--                                                    <img src="{{$products_loai->anh1}}" alt="">--}}
{{--                                                </li>--}}
{{--                                            @endif--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                    <p class="prod-skuttl">Sizes</p>--}}
{{--                                    <div class="offer-props-select">--}}
{{--                                        --}}{{--                                                    <p>XL</p>--}}
{{--                                        --}}{{--                                                    <ul>--}}
{{--                                        --}}{{--                                                        <li><a href="#">XS</a></li>--}}
{{--                                        --}}{{--                                                    </ul>--}}
{{--                                        <select class="form-control"  name="menu_id" >--}}
{{--                                            <option value="-1" style=" color: red;">null</option>--}}
{{--                                            @foreach($products_all as $products_size)--}}
{{--                                                @if($products_size -> size1 != null)--}}
{{--                                                    <option value="{{$products_size -> size1}}">{{$products_size -> size1}}</option>--}}
{{--                                                @endif--}}
{{--                                                @if($products_size -> size2 != null)--}}
{{--                                                    <option value="{{$products_size -> size2}}">{{$products_size -> size2}}</option>--}}
{{--                                                @endif--}}
{{--                                                @if($products_size -> size3 != null)--}}
{{--                                                    <option value="{{$products_size -> size3}}">{{$products_size -> size3}}</option>--}}
{{--                                                @endif--}}
{{--                                                @if($products_size -> size4 != null)--}}
{{--                                                    <option value="{{$products_size -> size4}}">{{$products_size -> size4}}</option>--}}
{{--                                                @endif--}}
{{--                                                @if($products_size -> size5 != null)--}}
{{--                                                    <option value="{{$products_size -> size5}}">{{$products_size -> size5}}</option>--}}
{{--                                                @endif--}}
{{--                                                @if($products_size -> size6 != null)--}}
{{--                                                    <option value="{{$products_size -> size6}}">{{$products_size -> size6}}</option>--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="prod-info">--}}
{{--                                    <p class="prod-price">--}}
{{--                                        <b class="item_current_price">--}}
{{--                                            <?php $return = true ?>--}}
{{--                                            @if($return && $product_all->money_sale > 0)--}}
{{--                                                <center><p>{{$product_all->money_sale}} đ - <strike style="color: red;">{{$product_all->money}} đ</strike></p></center>--}}
{{--                                    <?php $return = false ?>--}}
{{--                                    @endif--}}
{{--                                    @if($return)--}}
{{--                                        <center><p>{{$product_all->money}} đ</p></center>--}}
{{--                                        @endif--}}
{{--                                        </b>--}}
{{--                                        </p>--}}
{{--                                        <p class="prod-qnt">--}}
{{--                                            <input type="number" value="1" style="width: 60px">--}}
{{--                                            --}}{{--                                <a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>--}}
{{--                                            --}}{{--                                <a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>--}}
{{--                                        </p>--}}
{{--                                        <p class="prod-addwrap">--}}
{{--                                            <a href="#" class="prod-add">Thêm vào giỏ hàng</a>--}}
{{--                                        </p>--}}
{{--                                </div>--}}
{{--                                <ul class="prod-i-props">--}}
{{--                                    <li>--}}
{{--                                        <p>{{$product_all->dattrung}}</p>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- Quick View Product - end -->
{{--        </section>--}}
    </main>
{{--    <!-- Main Content - end -->--}}
@endsection
