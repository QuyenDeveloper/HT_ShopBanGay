
@extends('web.main')


@section('content')
<style>
    .star-rating {
        position: relative;
        display: inline-block;
        font-size: 0; /* Remove the gap between inline-block elements */
    }

    .star-rating .fa-star {
        font-size: 24px; /* Adjust this size as needed */
        color: #ccc; /* Color for unfilled stars */
    }

    .star-rating .star-rating-fill {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        overflow: hidden;
        white-space: nowrap;
    }

    .star-rating .star-rating-fill .fa-star {
        color: #f5a623; /* Color for filled stars */
        position: relative;
        z-index: 1;
    }
</style>
<main>
    <section class="container">
        <ul class="b-crumbs">
            <li>
                <a href="/trangchu">
                    Trang chủ
                </a>
            </li>
            <li>
                <a href="/trangchu/sanpham/thuvien">
                    Sản phẩm
                </a>
            </li>
            <li>
                <a
                    @if($SPs->menu_name1 == 'Phụ kiện')
                    href="/trangchu/phukien"
                    @endif
                    @if($SPs->menu_name1 != 'Phụ kiện')
                    href="/trangchu/sanpham/thuvien/{{$SPs->menu_name1}}"
                    @endif
                >
                    {{$SPs->menu_name1}}
                </a>
            </li>
            <li>
                <a>
                    {!! \App\Helpers\Helper::truncateText($SPs->name,40) !!}
                </a>
            </li>

        </ul>
        <h1 class="main-ttl"><span>{{$SPs->name}}</span></h1>


        <!-- Single Product - start -->
        <div class="prod-wrap">

            <!-- Product Images -->
            <div class="prod-slider-wrap">
                <div class="prod-slider">
                    <ul class="prod-slider-car">
                        @if($SPs->anh1 != null)
                            <li>
                                <a data-fancybox-group="product" class="fancy-img" href="{{$SPs->anh1}}">
                                    <img class="xzoom" id="xzoom-default" src="{{$SPs->anh1}}" alt="" >
                                </a>
                            </li>
                        @endif
                        @if($SPs->anh2 != null)
                            <li>
                                <a data-fancybox-group="product" class="fancy-img" href="{{$SPs->anh2}}">
                                    <img class="xzoom" id="xzoom-default" src="{{$SPs->anh2}}" alt="">
                                </a>
                            </li>
                        @endif
                        @if($SPs->anh3 != null)
                            <li>
                                <a data-fancybox-group="product" class="fancy-img" href="{{$SPs->anh3}}">
                                    <img class="xzoom" id="xzoom-default" src="{{$SPs->anh3}}" alt="">
                                </a>
                            </li>
                        @endif
                        @if($SPs->anh4 != null)
                            <li>
                                <a data-fancybox-group="product" class="fancy-img" href="{{$SPs->anh4}}">
                                    <img class="xzoom" id="xzoom-default" src="{{$SPs->anh4}}" alt="">
                                </a>
                            </li>
                        @endif
                        @if($SPs->anh5 != null)
                            <li>
                                <a data-fancybox-group="product" class="fancy-img" href="{{$SPs->anh5}}">
                                    <img class="xzoom" id="xzoom-default" src="{{$SPs->anh5}}" alt="">
                                </a>
                            </li>
                        @endif
                        @if($SPs->anh6 != null)
                            <li>
                                <a data-fancybox-group="product" class="fancy-img" href="{{$SPs->anh6}}">
                                    <img src="{{$SPs->anh6}}" alt="">
                                </a>
                            </li>
                        @endif
                        @if($SPs->anh7 != null)
                            <li>
                                <a data-fancybox-group="product" class="fancy-img" href="{{$SPs->anh7}}">
                                    <img src="{{$SPs->anh7}}" alt="">
                                </a>
                            </li>
                        @endif
                        @if($SPs->anh8 != null)
                            <li>
                                <a data-fancybox-group="product" class="fancy-img" href="{{$SPs->anh8}}">
                                    <img src="{{$SPs->anh8}}" alt="">
                                </a>
                            </li>
                        @endif
                        @if($SPs->anh9 != null)
                            <li>
                                <a data-fancybox-group="product" class="fancy-img" href="{{$SPs->anh9}}">
                                    <img src="{{$SPs->anh9}}" alt="">
                                </a>
                            </li>
                        @endif
                        @if($SPs->anh10 != null)
                            <li>
                                <a data-fancybox-group="product" class="fancy-img" href="{{$SPs->anh10}}">
                                    <img src="{{$SPs->anh10}}" alt="">
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="prod-thumbs">
                    <ul class="prod-thumbs-car">
                        @if($SPs->anh1 != null)
                            <li>
                                <a data-slide-index="0" href="#">
                                    <img src="{{$SPs->anh1}}" alt="">
                                </a>
                            </li>
                        @endif
                        @if($SPs->anh2 != null)
                            <li>
                                <a data-slide-index="1" href="#">
                                    <img src="{{$SPs->anh2}}" alt="">
                                </a>
                            </li>
                        @endif
                        @if($SPs->anh3 != null)
                            <li>
                                <a data-slide-index="2" href="#">
                                    <img src="{{$SPs->anh3}}" alt="">
                                </a>
                            </li>
                        @endif
                        @if($SPs->anh4 != null)
                            <li>
                                <a data-slide-index="3" href="#">
                                    <img src="{{$SPs->anh4}}" alt="">
                                </a>
                            </li>
                        @endif
                        @if($SPs->anh5 != null)
                            <li>
                                <a data-slide-index="4" href="#">
                                    <img src="{{$SPs->anh5}}" alt="">
                                </a>
                            </li>
                        @endif
                        @if($SPs->anh6 != null)
                            <li>
                                <a data-slide-index="5" href="#">
                                    <img src="{{$SPs->anh6}}" alt="">
                                </a>
                            </li>
                        @endif
                        @if($SPs->anh7 != null)
                            <li>
                                <a data-slide-index="6" href="#">
                                    <img src="{{$SPs->anh7}}" alt="">
                                </a>
                            </li>
                        @endif
                        @if($SPs->anh8 != null)
                            <li>
                                <a data-slide-index="6" href="#">
                                    <img src="{{$SPs->anh8}}" alt="">
                                </a>
                            </li>
                        @endif
                        @if($SPs->anh9 != null)
                            <li>
                                <a data-slide-index="6" href="#">
                                    <img src="{{$SPs->anh9}}" alt="">
                                </a>
                            </li>
                        @endif
                        @if($SPs->anh10 != null)
                            <li>
                                <a data-slide-index="6" href="#">
                                    <img src="{{$SPs->anh10}}" alt="">
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>

            <!-- Product Description/Info -->
            <div class="prod-cont">
{{--                <div class="prod-cont-txt">--}}
{{--                    {{$SPs->content}}--}}
{{--                </div>--}}
                <p class="prod-actions ">
                    <span  id="themVaoyeuthich">
                        @if($yeuthichs == null)
                            <a id="themVaoyeuthich1" href="#" onclick="themVaoyeuthich('{{Auth::user()->id}}', '{{$SPs->id}}')" class="prod-favorites"><i class="fa fa-heart"></i> Yêu thích</a>
                        @endif
                        @if($yeuthichs != null)
                            <a id="themVaoyeuthich2"  href="#" onclick="xoayeuthich('{{Auth::user()->id}}', '{{$SPs->id}}')" class="prod-favorites"><i class="fa fa-heart" style="color: black;"></i>Yêu thích</a>
                        @endif
                    </span>
                </p>

                <form method="POST" id="them_vao_Gio_Hang">
                    <div class="prod-skuwrap">
                        <p class="prod-skuttl">Đánh giá</p>
                        <div class="star-rating" data-rating="{{ $Rating }}">
                            <div class="star-rating-fill" style="width: 0%;">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                        <br>
                        <input name="idSP_GH" id="idSP_GH" type="hidden" value="{{$SPs->id}}">

                        <br>
                        <p class="prod-skuttl">Đã bán</p>
                        <div class="offer-props-select">
                            <input name="daBan" id="daBan" type="number" value="{{$SPs->daBan}}" style="width: 60px; height: 40px;" disabled>
                        </div>

                        <p class="prod-skuttl">Số lượng còn lại</p>
                        <div class="offer-props-select">
                            <input name="soluong" id="soluong" type="number" value="{{$SPs->soluong}}" style="width: 60px; height: 40px;" disabled>
                        </div>

                        <p class="prod-skuttl">Sizes</p>
                        <div class="offer-props-select">
                            <select class="form-control"  name="sizeSP_KHcan" id="sizeSP_KHcan">
                                <option value="-1" style=" color: red;">Chọn</option>
{{--                                @foreach($products_all as $products_size)--}}
                                    @if($SPs -> size1 != null)
                                        <option value="{{$SPs -> size1}}">{{$SPs -> size1}}</option>
                                    @endif
                                    @if($SPs -> size2 != null)
                                        <option value="{{$SPs -> size2}}">{{$SPs -> size2}}</option>
                                    @endif
                                    @if($SPs -> size3 != null)
                                        <option value="{{$SPs -> size3}}">{{$SPs -> size3}}</option>
                                    @endif
                                    @if($SPs -> size4 != null)
                                        <option value="{{$SPs -> size4}}">{{$SPs -> size4}}</option>
                                    @endif
                                    @if($SPs -> size5 != null)
                                        <option value="{{$SPs -> size5}}">{{$SPs -> size5}}</option>
                                    @endif
                                    @if($SPs -> size6 != null)
                                        <option value="{{$SPs -> size6}}">{{$SPs -> size6}}</option>
                                    @endif
{{--                                @endforeach--}}
                            </select>
                        </div>

                    </div>
                    <div class="prod-info">
                        <p class="" style="width: auto; font-size: 20px;">
                                <?php $return = true ?>
                                @if($return && $SPs->money_sale > 0)
                                    <b  class="item_current_price">{{number_format($SPs->money_sale,0,',','.')}} đ - <strike style="color: red;">{{number_format($SPs->money,0,',','.')}} đ</strike></b>
                                <?php $return = false ?>
                                @endif
                                @if($return)
                                    <b class="item_current_price">{{number_format($SPs->money,0,',','.')}} đ</b>
                                @endif
                        </p>
                        <p class="prod-qnt">
                            <input name="SLSP_GH" id="SLSP_GH" type="number" value="1" style="width: 60px; height: 40px">
                        </p>
                        <p class="prod-addwrap">
                            <input type="hidden" name="idKH_GH" id="idKH_GH" value="{{Auth::user()->id}}">
                            <a href="#" onclick="themVaoGioHang()" class="prod-add " rel="nofollow">Thêm vào giỏ hàng</a>
                        </p>
                    </div>
                </form>
                {{-- <ul class="prod-i-props">
                    <?php
                    $dattrungs = explode(";", $SPs->dattrung);
                    ?>
                        @foreach($dattrungs as $dattrung)
                            <li>
                                    <b>{{$dattrung}}</b>
                            </li>
                        @endforeach
                </ul> --}}
            </div>

            <!-- Product Tabs -->
            <div class="prod-tabs-wrap">
                <ul class="prod-tabs">
                    <li><a data-prodtab-num="1" class="active" href="#" data-prodtab="#prod-tab-1">Miêu tả</a></li>
                    {{-- <li><a data-prodtab-num="2" id="prod-props" href="#" data-prodtab="#prod-tab-2">đặt trưng</a></li> --}}
                    <li><a data-prodtab-num="3" href="#" data-prodtab="#prod-tab-3">nhận xét</a></li>
                </ul>
                <div class="prod-tab-cont">

                    <p data-prodtab-num="1" class="prod-tab-mob active" data-prodtab="#prod-tab-1">Description</p>
                    <div class="prod-tab stylization" id="prod-tab-1">
                        <p>
                            {!! nl2br(e($SPs->content)) !!}
                        </p>
                    </div>

                    {{-- <p data-prodtab-num="2" class="prod-tab-mob" data-prodtab="#prod-tab-2">Features</p>
                    <div class="prod-tab prod-props" id="prod-tab-2">
                        <table>

                            <?php
                                $dattrungs = explode(";", $SPs->dattrung);
                            ?>
                            <tbody>
                            @foreach($dattrungs as $dattrung)
                            <tr>
                                <?php
                                $dattrungCons = explode(":: ", $dattrung);
                                ?>
                                @foreach($dattrungCons as $dattrungCon)
                                    <td>{{$dattrungCon}}</td>
                                @endforeach
                            </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div> --}}

                    <p data-prodtab-num="3" class="prod-tab-mob" data-prodtab="#prod-tab-3">Reviews (3)</p>
                    <div class="prod-tab" id="prod-tab-3">
                        <ul class="reviews-list">
                            @foreach ($Comments as $Comment)
                                <li class="reviews-i existimg">
                                    <div class="reviews-i-img">
                                        <img src="{{ $Comment->user->avt ? $Comment->user->avt : 'http://placehold.it/120x120' }}" alt="{{ $Comment->user->name }}">

                                        <div class="reviews-i-rating">
                                            @for ($i = 0; $i < 5; $i++)
                                                @if ($i < $Comment->danhgia)
                                                    <i class="fa fa-star"></i>
                                                @else
                                                    <i class="fa fa-star-o"></i>
                                                @endif
                                            @endfor
                                        </div>
                                        <time datetime="{{ $Comment->create_at }}" class="reviews-i-date">{{ \Carbon\Carbon::parse($Comment->create_at)->format('d M Y') }}</time>
                                    </div>
                                    <div class="reviews-i-cont">
                                        <p>{{ $Comment->cmt }}</p>
                                        <span class="reviews-i-margin"></span>
                                        <h3 class="reviews-i-ttl">{{ $Comment->user->name }}</h3>
                                        <p class="reviews-i-showanswer"><span data-open="Show answer" data-close="Hide answer">Show answer</span> <i class="fa fa-angle-down"></i></p>
                                    </div>
                                    <div class="reviews-i-answer">
                                        <p>Thanks for your feedback!<br>
                                            </p>
                                        <span class="reviews-i-margin"></span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <div class="prod-comment-form">
                            <h3>Nhận xét của bạn</h3>
                            <form method="POST" action="/trangchu/sanpham/binhluan">
                                <input type="hidden" name="idSP" value="{{$SPs->id}}">
                                <input type="hidden" name="idKH" value="{{Auth::user()->id}}">
                                <input style="width: 100%;" type="text" placeholder="Name" value="{{Auth::user()->name}}" readonly>
                                <input style="width: 100%;" type="text" placeholder="E-mail" value="{{Auth::user()->email}}" readonly>
                                <textarea placeholder="Nhận xét của bạn..." name="cmt" ></textarea>
                                <div class="prod-comment-submit">
                                    <input type="submit" value="Nhận xét">
                                    <input type="hidden" name="danhgia" id="danhgia">
                                    <div class="prod-rating">
                                        <i class="fa fa-star-o" title="5" onclick="danhgia(5)"></i>
                                        <i class="fa fa-star-o" title="4" onclick="danhgia(4)"></i>
                                        <i class="fa fa-star-o" title="3" onclick="danhgia(3)"></i>
                                        <i class="fa fa-star-o" title="2" onclick="danhgia(2)"></i>
                                        <i class="fa fa-star-o" title="1" onclick="danhgia(1)"></i>
                                    </div>
                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Single Product - end -->

        <!-- Related Products - start -->
        <div class="prod-related">
            <h2><span>-- SẢM PHẨM TƯƠNG TỰ --</span></h2>
            <div class="prod-related-car" id="prod-related-car">

                <div class="flex-viewport" style="overflow: hidden; position: relative;">
                    <ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-226px, 0px, 0px);">
                        <li class="prod-rel-wrap clone" aria-hidden="true" style="width: 226px; margin-right: 0px; float: left; display: block;">
                            @foreach($SPTTs as $SPTT)
                                <div class="prod-rel">
                                    <a href="/trangchu/sanpham/NDsanphan/{{$SPTT['id']}}" class="prod-rel-img">
                                        <img src="{{$SPTT['anh1']}}" alt="Maxime molestias necessitatibus nobis" draggable="false">
                                    </a>
                                    <div class="prod-rel-cont">
                                        <h3><a href="/trangchu/sanpham/NDsanphan/{{$SPTT['id']}}">{{$SPTT['name']}}</a></h3>
                                        <p class="prod-rel-price">
                                            <?php $return = true ?>
                                            @if($return && $SPTT['money_sale'] > 0)
                                                <b  class="item_current_price">{{number_format($SPTT['money_sale'],0,',','.')}} đ</b>
                                                <?php $return = false ?>
                                            @endif
                                            @if($return)
                                                <b class="item_current_price">{{number_format($SPTT['money'],0,',','.')}} đ</b>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            @endforeach

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Related Products - end -->

    </section>
</main>
    <!-- Main Content - end -->
<script src="/web/js/danhgia.js"></script>

@endsection
