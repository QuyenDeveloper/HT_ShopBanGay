
@extends('web.main')


@section('content')

    <!-- Main Content - start -->
    <main>
        <section class="container">


            <ul class="b-crumbs">
                <li>
                    <a href="/trangchu">
                        Trang chủ
                    </a>
                </li>
                <li>
                    <span>Yêu thích</span>
                </li>
            </ul>
            <h1 class="main-ttl"><span>Yêu thích<?php
                    $SLSPGH = 0;
                    foreach($SPyeuthichs as $SPyeuthich){
                        if ($SPyeuthich->ID_KH == Auth::user()->id) $SLSPGH++;
                    }
                    ?>
                                        <b style="color: red;">({{$SLSPGH}})</b></span></h1>
            <!-- Catalog Items | Full - start -->
            <div class="section-cont section-full">

                <div class="prod-items section-items">
                    @foreach($SPyeuthichs as $SPyeuthich)
                        @foreach($SPs as $SP)
                            @if($SP->id == $SPyeuthich->ID_SP)
                            <div class="prod-i">
                            <div class="prod-i-top">
                                <a href="/trangchu/sanpham/NDsanphan/{{$SP->id}}" class="prod-i-img"><!-- NO SPACE --><img src="{{$SP->anh1}}" alt="Reprehenderit rerum"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" onclick="xoayeuthich2('{{Auth::user()->id}}', '{{$SP->id}}')" class="prod-i-favorites"><span>Xóa khỏi yêu thích</span><i class="fa fa-remove"></i></a>
                                    <a href="/trangchu/sanpham/NDsanphan/{{$SP->id}}" class="{{--qview-btn--}} prod-i-qview"><span>Chi tiết</span><i class="fa fa-search"></i></a>
{{--                                    <a class="prod-i-compare" href="#"><span>So sánh</span><i class="fa fa-bar-chart"></i></a>--}}
                                </p>
{{--                                <a href="#" class="prod-i-buy">Add to cart</a>--}}
                                <p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

                                <div class="prod-i-properties">
                                    <dl>
                                        <dt>mô tả</dt>
                                        <dd>{{$SP->dattrung}}</dd>
                                    </dl>
                                </div>

                                <div class="prod-sticker">
                                    <?php
                                    $KQ=0;
                                    $giaGiam = $SP->money_sale;
                                    $giaGoc  = $SP->money;

                                    $a = ($giaGiam * 100)/$giaGoc;
                                    $b = 100-$a;
                                    $KQ = number_format($b ,2);
                                    ?>
                                    @if($KQ != 100)
                                        <div class="prod-sticker" style="width: 100px;">
                                            <p class="prod-sticker-3">{{$KQ}} %</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <h3>
                                <a href="/trangchu/sanpham/NDsanphan/{{$SP->id}}">{{$SP->name}}</a>
                            </h3>
                            <p class="prod-i-price">
{{--                                <b>$210</b>--}}
{{--                                <del>$240</del>--}}
                                <?php $return = true ?>
                                @if($return && $SP->money_sale > 0)
                                    <center><p>{{$SP->money_sale}} đ - <strike style="color: red;">{{$SP->money}} đ</strike></p></center>
                                <?php $return = false ?>
                                @endif
                                @if($return)
                                    <center><p>{{$SP->money}} đ</p></center>
                                @endif
                            </p>
                        </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
            <!-- Catalog Items | Full - end -->

            <!-- Quick View Product - start -->
{{--            <div class="qview-modal">--}}
{{--                <div class="prod-wrap">--}}
{{--                    <a href="product.html">--}}
{{--                        <h1 class="main-ttl">--}}
{{--                            <span>Reprehenderit adipisci</span>--}}
{{--                        </h1>--}}
{{--                    </a>--}}
{{--                    <div class="prod-slider-wrap">--}}
{{--                        <div class="prod-slider">--}}
{{--                            <div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 487px;"><ul class="prod-slider-car" style="width: 915%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">--}}
{{--                                        <li style="float: left; list-style: none; position: relative; width: 464px;">--}}
{{--                                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">--}}
{{--                                                <img src="http://placehold.it/500x525" alt="">--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li style="float: left; list-style: none; position: relative; width: 464px;">--}}
{{--                                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x591">--}}
{{--                                                <img src="http://placehold.it/500x591" alt="">--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li style="float: left; list-style: none; position: relative; width: 464px;">--}}
{{--                                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">--}}
{{--                                                <img src="http://placehold.it/500x525" alt="">--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li style="float: left; list-style: none; position: relative; width: 464px;">--}}
{{--                                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">--}}
{{--                                                <img src="http://placehold.it/500x722" alt="">--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li style="float: left; list-style: none; position: relative; width: 464px;">--}}
{{--                                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">--}}
{{--                                                <img src="http://placehold.it/500x722" alt="">--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li style="float: left; list-style: none; position: relative; width: 464px;">--}}
{{--                                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">--}}
{{--                                                <img src="http://placehold.it/500x722" alt="">--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li style="float: left; list-style: none; position: relative; width: 464px;">--}}
{{--                                            <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">--}}
{{--                                                <img src="http://placehold.it/500x722" alt="">--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    </ul></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a></div></div></div>--}}
{{--                        </div>--}}
{{--                        <div class="prod-thumbs">--}}
{{--                            <div class="bx-wrapper" style="max-width: 25032px; margin: 0px auto;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 102px;"><ul class="prod-thumbs-car" style="width: 915%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">--}}
{{--                                        <li style="float: left; list-style: none; position: relative; width: 86.4px; margin-right: 8px;">--}}
{{--                                            <a data-slide-index="0" href="#" class="active">--}}
{{--                                                <img src="http://placehold.it/500x525" alt="">--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li style="float: left; list-style: none; position: relative; width: 86.4px; margin-right: 8px;">--}}
{{--                                            <a data-slide-index="1" href="#">--}}
{{--                                                <img src="http://placehold.it/500x591" alt="">--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li style="float: left; list-style: none; position: relative; width: 86.4px; margin-right: 8px;">--}}
{{--                                            <a data-slide-index="2" href="#">--}}
{{--                                                <img src="http://placehold.it/500x525" alt="">--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li style="float: left; list-style: none; position: relative; width: 86.4px; margin-right: 8px;">--}}
{{--                                            <a data-slide-index="3" href="#">--}}
{{--                                                <img src="http://placehold.it/500x722" alt="">--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li style="float: left; list-style: none; position: relative; width: 86.4px; margin-right: 8px;">--}}
{{--                                            <a data-slide-index="4" href="#">--}}
{{--                                                <img src="http://placehold.it/500x722" alt="">--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li style="float: left; list-style: none; position: relative; width: 86.4px; margin-right: 8px;">--}}
{{--                                            <a data-slide-index="5" href="#">--}}
{{--                                                <img src="http://placehold.it/500x722" alt="">--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li style="float: left; list-style: none; position: relative; width: 86.4px; margin-right: 8px;">--}}
{{--                                            <a data-slide-index="6" href="#">--}}
{{--                                                <img src="http://placehold.it/500x722" alt="">--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    </ul></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a></div></div></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="prod-cont">--}}
{{--                        <p class="prod-actions">--}}
{{--                            <a href="#" class="prod-favorites"><i class="fa fa-heart"></i> Add to Wishlist</a>--}}
{{--                            <a href="#" class="prod-compare"><i class="fa fa-bar-chart"></i> Compare</a>--}}
{{--                        </p>--}}
{{--                        <div class="prod-skuwrap">--}}
{{--                            <p class="prod-skuttl">Color</p>--}}
{{--                            <ul class="prod-skucolor">--}}
{{--                                <li class="active">--}}
{{--                                    <img src="img/color/blue.jpg" alt="">--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <img src="img/color/red.jpg" alt="">--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <img src="img/color/green.jpg" alt="">--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <img src="img/color/yellow.jpg" alt="">--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <img src="img/color/purple.jpg" alt="">--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <p class="prod-skuttl">Sizes</p>--}}
{{--                            <div class="offer-props-select">--}}
{{--                                <p>XL</p>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#">XS</a></li>--}}
{{--                                    <li><a href="#">S</a></li>--}}
{{--                                    <li><a href="#">M</a></li>--}}
{{--                                    <li class="active"><a href="#">XL</a></li>--}}
{{--                                    <li><a href="#">L</a></li>--}}
{{--                                    <li><a href="#">4XL</a></li>--}}
{{--                                    <li><a href="#">XXL</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="prod-info">--}}
{{--                            <p class="prod-price">--}}
{{--                                <b class="item_current_price">$238</b>--}}
{{--                            </p>--}}
{{--                            <p class="prod-qnt">--}}
{{--                                <input type="text" value="1">--}}
{{--                                <a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>--}}
{{--                                <a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>--}}
{{--                            </p>--}}
{{--                            <p class="prod-addwrap">--}}
{{--                                <a href="#" class="prod-add">Add to cart</a>--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <ul class="prod-i-props">--}}
{{--                            <li>--}}
{{--                                <b>SKU</b> 05464207--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <b>Manufacturer</b> Mayoral--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <b>Material</b> Cotton--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <b>Pattern Type</b> Print--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <b>Wash</b> Colored--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <b>Style</b> Cute--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <b>Color</b> Blue, Red--}}
{{--                            </li>--}}
{{--                            <li><a href="#" class="prod-showprops">All Features</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- Quick View Product - end -->
        </section>
    </main>
    <!-- Main Content - end -->

@endsection
