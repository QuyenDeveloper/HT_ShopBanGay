
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
                        <p>12</p>
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
        </section>
    </main>
    <!-- Main Content - end -->

@endsection
