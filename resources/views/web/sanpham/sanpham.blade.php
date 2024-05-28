
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
                    <a href="/trangchu/sanpham/{{$duoidan}}">
                        {{$title}}
                    </a>
                </li>
                @if(isset($ten1))
                    <li>
                        <span>{{$ten1}}</span>
                    </li>
                @endif
            </ul>
            <h1 class="main-ttl"><span>{{$ten}}@if(isset($ten1)) / {{$ten1}}@endif</span></h1>
            <!-- Catalog Sidebar - start -->
            <div class="section-sb">

                <!-- Catalog Categories - end -->

                <!-- Filter - start -->
                <div class="section-filter">
                    <button id="section-filter-toggle" class="section-filter-toggle" data-close="Hide Filter" data-open="Show Filter">
                        <span>BỘ LỌC</span> <i class="fa fa-angle-down"></i>
                    </button>
                        <div class="section-filter-cont">
                            <form action="@if($action == 'ok')/trangchu/sanpham/thuvien @endif" method="post">{{--@if($action == 'ok') /trangchu/sanpham/thuvien @endif--}}
                            <div class="section-filter-price">
                                <input name="money" class="range-slider section-filter-price" data-min="0" data-max="20000000" data-from="500000" data-to="19500000" data-prefix="đ " data-grid="false">
{{--                                <div name="money" class="range-slider section-filter-price" data-min="0" data-max="20000000" data-from="500000" data-to="15000000" data-prefix="$" data-grid="false" ></div>--}}
                            </div>
                            <div class="section-filter-item">
                                <p class="section-filter-ttl">Phong Cách <i class="fa fa-angle-down"></i></p>
                                <div class="section-filter-fields">
                                    @foreach($phongcachs as $phongcach)
                                    <p class="section-filter-field">
                                        <input name="theloai_{{$phongcach->id}}" id="section-filter-checkbox2-{{$phongcach->name}}" value="{{$phongcach->name}}" type="checkbox">
                                        <label class="section-filter-checkbox" for="section-filter-checkbox2-{{$phongcach->name}}">{{$phongcach->name}}</label>
                                    </p>
                                    @endforeach
                                </div>
                            </div>
                            <div class="section-filter-item opened">
                                <p class="section-filter-ttl">Thương Hiệu <i class="fa fa-angle-down"></i></p>
                                <div class="section-filter-fields">
                                    <div class="section-filter-select">
                                        <select name="nhanhieu" data-placeholder="Decoration" class="chosen-select" >
                                            <option >null</option>
                                            @foreach($nhanhieus as $nhanhieu)
                                            <option value="{{$nhanhieu->name}}">{{$nhanhieu->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="section-filter-item opened">
                                <p class="section-filter-ttl">Size <i class="fa fa-angle-down"></i></p>
                                <div class="section-filter-fields">
                                    <div class="section-filter-select">
                                        <select name="size" data-placeholder="Manufacturer country Decoration" class="chosen-select" >
                                            <option >null</option>
                                            <optgroup label="1-3 tuổi">
                                                @foreach($sizes as $size)
                                                    @if($size->size >=16 && $size->size <25)
                                                        <option >{{$size->size }}</option>
                                                    @endif
                                                @endforeach
                                            </optgroup>
                                            <optgroup label="3-6 tuổi">
                                                @foreach($sizes as $size)
                                                    @if($size->size >=25 && $size->size <31)
                                                        <option >{{$size->size }}</option>
                                                    @endif
                                                @endforeach
                                            </optgroup>
                                            <optgroup label="6-12 tuổi">
                                                @foreach($sizes as $size)
                                                    @if($size->size <=37)
                                                        <option >{{$size->size }}</option>
                                                    @endif
                                                @endforeach
                                            </optgroup>
                                            <optgroup label="Lớn hơn 12 tuổi">
                                                @foreach($sizes as $size)
                                                    @if($size->size >37)
                                                        <option >{{$size->size }}</option>
                                                    @endif
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="section-filter-buttons">
                                <button type="submit" style="background: black;" class="btn btn-primary">ÁP DỤNG BỘ LỌC</button>
{{--                                <input class="btn btn-themes" id="set_filter" name="set_filter" value="ÁP DỤNG BỘ LỌC" type="submit">--}}
                                <input class="btn btn-link" id="del_filter" name="del_filter" value="ĐẶT LẠI" type="button">
                            </div>
                            @csrf
                            </form>
                        </div>
                            </div>

                        </div>

                </div>
                <!-- Filter - end -->

            </div>
            <!-- Catalog Sidebar - end -->
            <!-- Catalog Items | Gallery V1 - start -->
            <div class="section-cont">

                <!-- Catalog Topbar - start -->
                <div class="section-top">

                    <!-- View Mode -->
                    <ul class="section-mode">
                        <li class="section-mode-gallery {{($duoidan == 'thuvien')? 'active':''}}"><a title="Chế độ xem: thư viện" href="/trangchu/sanpham/thuvien<?php if(isset($tenduoi)){ ?>/{{$tenduoi}}<?php } ?>"></a></li>
                        <li class="section-mode-list {{($duoidan == 'danhsach')? 'active':''}}"><a title="Chế độ xem: danh sách" href="/trangchu/sanpham/danhsach<?php if(isset($tenduoi)){ ?>/{{$tenduoi}}<?php } ?>"></a></li>
                        <li class="section-mode-table {{($duoidan == 'bang')? 'active':''}}"><a title="Chế độ xem: bảng" href="/trangchu/sanpham/bang<?php if(isset($tenduoi)){ ?>/{{$tenduoi}}<?php } ?>"></a></li>
                    </ul>

                    <!-- Sorting -->
                    <div class="section-sortby">
                        <p> Sắp xếp mặc định</p>
                        <ul>
{{--                            <li>--}}
{{--                                <a href="#">Mặc định</a>--}}
{{--                            </li>--}}
                            <li>
                                <a href="#">Phổ biến</a>
                            </li>
                            <li>
                                <a href="#">Giá thấp -> cao</a>
                            </li>
                            <li>
                                <a href="#">Giá cao -> thấp</a>
                            </li>
                            <li>
                                <a href="#">Theo tiêu đề A <i class="fa fa-angle-right"></i> Z</a>
                            </li>
                            <li>
                                <a href="#">Theo tiêu đề Z <i class="fa fa-angle-right"></i> A</a>
                            </li>

                        </ul>
                    </div>

                    <!-- Count per page -->
                    <div class="section-count">
                        <p>24</p>
                        <ul>
                            <li><a href="#">12</a></li>
                            <li><a href="#">24</a></li>
                            <li><a href="#">48</a></li>
                        </ul>
                    </div>

                </div>

                <!-- Catalog Topbar - end -->
                @yield('hienthi')



                <!-- Pagination - start -->
                <center>
                    <ul class="pagi">
                        {{ $products->links() }}
                        <?php
                            $sumTrang = $products->lastPage();
                            for ($i = 1; $i <= $sumTrang; $i++){
                        ?>
                            <li><a href="/trangchu/sanpham/{{$duoidan}}?page={{$i}}">{{$i}}</a></li>
                        <?php } ?>

    {{--                    <li class="pagi-next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>--}}
                    </ul>
                <div id="TT"></div>
                </center>
                <!-- Pagination - end -->
            </div>
            <!-- Catalog Items | Gallery V1 - end -->

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
{{--                            <ul class="prod-slider-car">--}}
{{--                                <li>--}}
{{--                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">--}}
{{--                                        <img src="http://placehold.it/500x525" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x591">--}}
{{--                                        <img src="http://placehold.it/500x591" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">--}}
{{--                                        <img src="http://placehold.it/500x525" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">--}}
{{--                                        <img src="http://placehold.it/500x722" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">--}}
{{--                                        <img src="http://placehold.it/500x722" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">--}}
{{--                                        <img src="http://placehold.it/500x722" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">--}}
{{--                                        <img src="http://placehold.it/500x722" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="prod-thumbs">--}}
{{--                            <ul class="prod-thumbs-car">--}}
{{--                                <li>--}}
{{--                                    <a data-slide-index="0" href="#">--}}
{{--                                        <img src="http://placehold.it/500x525" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a data-slide-index="1" href="#">--}}
{{--                                        <img src="http://placehold.it/500x591" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a data-slide-index="2" href="#">--}}
{{--                                        <img src="http://placehold.it/500x525" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a data-slide-index="3" href="#">--}}
{{--                                        <img src="http://placehold.it/500x722" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a data-slide-index="4" href="#">--}}
{{--                                        <img src="http://placehold.it/500x722" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a data-slide-index="5" href="#">--}}
{{--                                        <img src="http://placehold.it/500x722" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a data-slide-index="6" href="#">--}}
{{--                                        <img src="http://placehold.it/500x722" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
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
