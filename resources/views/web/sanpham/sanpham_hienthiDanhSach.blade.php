@extends('web.sanpham.sanpham')

@section('hienthi')
    <div class="prod-items section-items">
        @foreach($products as $product)
            <from method="POST" id="from">
        <div class="prodlist-i">
            <a class="prodlist-i-img" href="/trangchu/sanpham/NDsanphan/{{$product->id}}"><!-- NO SPACE -->
                <img src="{{$product->anh1}}" alt="Adipisci aperiam commodi"><!-- NO SPACE -->
            </a>
            <div class="prodlist-i-cont">
                <h3><a href="/trangchu/sanpham/NDsanphan/{{$product->id}}">{{$product->name}}</a></h3>
{{--                <div class="prodlist-i-txt">--}}
{{--                    {{$product->content}}--}}
{{--                </div>--}}
                <div class="prodlist-i-skuwrap">
                    <div class="prodlist-i-skuitem">
                        <p class="prodlist-i-skuttl">Giá</p>
                        <span >
{{--							<b>$59</b>--}}
                            <?php $return = true ?>
                            @if($return && $product->money_sale > 0)
                                <p>{{number_format($product->money_sale,0,',','.')}} đ - <strike style="color: red;"><del>{{number_format($product->money,0,',','.')}} đ</del></strike></p>
                                <?php $return = false ?>
                            @endif
                            @if($return)
                                <p>{{number_format($product->money,0,',','.')}} đ</p>
                            @endif
					</span>
                    </div>
                    <div class="prodlist-i-skuitem">
                        <p class="prodlist-i-skuttl">sizes</p>
                        <div class="offer-props-select">
                            <select  name="sizeSP_KHcan{{$product->id}}" id="sizeSP_KHcan{{$product->id}}" data-placeholder="Manufacturer country Decoration" style="width: 50px;height: 30px">
                                <option style="color: red;" value="-1" >null</option>
                                @if($product->size1 !== null)
                                    <option value="{{$product->size1}}" >{{$product->size1}}</option>
                                @endif
                                @if($product->size2 !== null)
                                <option value="{{$product->size2}}">{{$product->size2}}</option>
                                @endif
                                @if($product->size3 !== null)
                                <option value="{{$product->size3}}">{{$product->size3}}</option>
                                @endif
                                @if($product->size4 !== null)
                                <option value="{{$product->size4}}">{{$product->size4}}</option>
                                @endif
                                @if($product->size5 !== null)
                                <option value="{{$product->size5}}">{{$product->size5}}</option>
                                @endif
                                @if($product->size6 !== null)
                                <option value="{{$product->size6}}">{{$product->size6}}</option>
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
                <div class="prodlist-i-action">
                    <p class="prodlist-i-qnt">
                        <input value="1" name="SLSP_GH{{$product->id}}" id="SLSP_GH{{$product->id}}" style="width: 50px;" type="number">
                    </p>
                    <p class="prodlist-i-addwrap">
                        <a href="#" onclick="themVaoGioHang2('{{$product->id}}', 'sizeSP_KHcan{{$product->id}}', 'SLSP_GH{{$product->id}}')" class="prodlist-i-add">Thêm vào giỏ hàng</a>{{--, '{{Auth::user()->id}}'--}}
                    </p>

                </div>

                <p class="prodlist-i-info">
{{--                    <a href="#"  class="prodlist-i-favorites"><i class="fa fa-heart"></i> Yêu thích</a>--}}
                    <span  id="themVaoyeuthich">
{{--                        @if($yeuthichs == null)--}}
                            <a id="themVaoyeuthich1" href="#" onclick="themVaoyeuthich2({{--'{{Auth::user()->id}}', --}}'{{$product->id}}')" class="prodlist-i-favorites"><i class="fa fa-heart"></i> Yêu thích</a>
{{--                        @endif--}}
{{--                        @if($yeuthichs != null)--}}
{{--                            <a id="themVaoyeuthich2"  href="#" onclick="xoayeuthich('{{Auth::user()->id}}', '{{$SPs->id}}')" class="prod-favorites"><i class="fa fa-heart" style="color: black;"></i>Yêu thích</a>--}}
{{--                        @endif--}}
                    </span>
                    <span >
                        <a href="/trangchu/sanpham/NDsanphan/{{$product->id}}" class="{{--qview-btn--}} prodlist-i-qview"><i class="fa fa-search"></i> Chi tiết</a>
                    </span>

{{--                    <a class="prodlist-i-compare" href="#"><i class="fa fa-bar-chart"></i> So Sánh</a>--}}
                </p>
            </div>

            <div class="prodlist-i-props-wrap">
                {{$product->dattrung}}
            </div>
            <?php
            $KQ=0;
            $giaGiam = $product->money_sale;
            $giaGoc  = $product->money;

            $a = ($giaGiam * 100)/$giaGoc;
            $b = 100-$a;
            $KQ = number_format($b ,1);
            ?>
            @if($KQ != 100)
                <div class="prod-sticker">
                    <p class="prod-sticker-3">{{$KQ}} %</p>
                </div>
            @endif
{{--            <div class="prod-sticker">--}}
{{--                <p class="prod-sticker-3">-30%</p><p class="prod-sticker-4 countdown" data-date="06 oct 2021, 00:01:00"></p>--}}
{{--            </div>--}}
        </div>
            </from>
            @endforeach
    </div>

    @endsection
    {{--<div class="prodlist-i">--}}
{{--    <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="http://placehold.it/300x366" alt="Nulla numquam obcaecati"><!-- NO SPACE --></a>--}}
{{--    <div class="prodlist-i-cont">--}}
{{--        <h3><a href="product.html">Nulla numquam obcaecati</a></h3>--}}
{{--        <div class="prodlist-i-txt">--}}
{{--            Assumenda deserunt eligendi qui, est error, sed dolorum magnam sequi totam recusandae nam minima accusamus illo dolores adipisci non fugit quis consequatur					</div>--}}
{{--        <div class="prodlist-i-action">--}}
{{--            <p class="prodlist-i-qnt">--}}
{{--                <input value="1" type="text">--}}
{{--                <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>--}}
{{--                <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>--}}
{{--            </p>--}}
{{--            <p class="prodlist-i-addwrap">--}}
{{--                <a href="#" class="prodlist-i-add">Add to cart</a>--}}
{{--            </p>--}}
{{--            <span class="prodlist-i-price">--}}
{{--							<b>$48</b>--}}
{{--													</span>--}}
{{--        </div>--}}
{{--        <p class="prodlist-i-info">--}}
{{--            <a href="#" class="prodlist-i-favorites"><i class="fa fa-heart"></i> Add to wishlist</a>--}}
{{--            <a href="#" class="qview-btn prodlist-i-qview"><i class="fa fa-search"></i> Quick view</a>--}}
{{--            <a class="prodlist-i-compare" href="#"><i class="fa fa-bar-chart"></i> Compare</a>--}}
{{--        </p>--}}
{{--    </div>--}}

{{--    <div class="prodlist-i-props-wrap">--}}
{{--        <ul class="prodlist-i-props">--}}
{{--            <li><b>Material</b> Cotton,Polyester</li>--}}
{{--            <li><b>Sleeve Length</b> Short</li>--}}
{{--            <li><b>Tops Type</b> Tees</li>--}}
{{--            <li><b>Pattern Type</b> Solid</li>--}}
{{--            <li><b>Style</b> Casual</li>--}}
{{--            <li><b>Hooded</b> No</li>--}}
{{--            <li><b>Collar</b> V-Neck</li>--}}
{{--            <li><b>Sleeve Style</b> General</li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="prodlist-i">--}}
{{--    <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="http://placehold.it/370x300" alt="Dignissimos eaque earum"><!-- NO SPACE --></a>--}}
{{--    <div class="prodlist-i-cont">--}}
{{--        <h3><a href="product.html">Dignissimos eaque earum</a></h3>--}}
{{--        <div class="prodlist-i-txt">--}}
{{--            Deserunt sapiente mollitia expedita, quia blanditiis ipsam dignissimos? A consectetur tempora dolorum quisquam assumenda, quidem ratione accusamus cupiditate commodi					</div>--}}
{{--        <div class="prodlist-i-action">--}}
{{--            <p class="prodlist-i-qnt">--}}
{{--                <input value="1" type="text">--}}
{{--                <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>--}}
{{--                <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>--}}
{{--            </p>--}}
{{--            <p class="prodlist-i-addwrap">--}}
{{--                <a href="#" class="prodlist-i-add">Add to cart</a>--}}
{{--            </p>--}}
{{--            <span class="prodlist-i-price">--}}
{{--							<b>$37</b>--}}
{{--													</span>--}}
{{--        </div>--}}
{{--        <p class="prodlist-i-info">--}}
{{--            <a href="#" class="prodlist-i-favorites"><i class="fa fa-heart"></i> Add to wishlist</a>--}}
{{--            <a href="#" class="qview-btn prodlist-i-qview"><i class="fa fa-search"></i> Quick view</a>--}}
{{--            <a class="prodlist-i-compare" href="#"><i class="fa fa-bar-chart"></i> Compare</a>--}}
{{--        </p>--}}
{{--    </div>--}}

{{--    <div class="prodlist-i-props-wrap">--}}
{{--        <ul class="prodlist-i-props">--}}
{{--            <li><b>Gender</b> Unisex</li>--}}
{{--            <li><b>Material</b> Wool, Polyester</li>--}}
{{--            <li><b>Style</b> Casual</li>--}}
{{--            <li><b>Pattern Type</b> Solid</li>--}}
{{--            <li><b>Hats size</b> Oversize</li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="prodlist-i">--}}
{{--    <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="http://placehold.it/300x345" alt="Porro quae quasi"><!-- NO SPACE --></a>--}}
{{--    <div class="prodlist-i-cont">--}}
{{--        <h3><a href="product.html">Porro quae quasi</a></h3>--}}
{{--        <div class="prodlist-i-txt">--}}
{{--            Rerum est facere consequuntur, vero error deleniti totam vitae, eius necessitatibus, deserunt cupiditate quae iusto sint quasi, id officiis! Labore amet, architecto dolorum rerum voluptates					</div>--}}
{{--        <div class="prodlist-i-action">--}}
{{--            <p class="prodlist-i-qnt">--}}
{{--                <input value="1" type="text">--}}
{{--                <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>--}}
{{--                <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>--}}
{{--            </p>--}}
{{--            <p class="prodlist-i-addwrap">--}}
{{--                <a href="#" class="prodlist-i-add">Add to cart</a>--}}
{{--            </p>--}}
{{--            <span class="prodlist-i-price">--}}
{{--							<b>$85</b>--}}
{{--															<del>$110</del>--}}
{{--													</span>--}}
{{--        </div>--}}
{{--        <p class="prodlist-i-info">--}}
{{--            <a href="#" class="prodlist-i-favorites"><i class="fa fa-heart"></i> Add to wishlist</a>--}}
{{--            <a href="#" class="qview-btn prodlist-i-qview"><i class="fa fa-search"></i> Quick view</a>--}}
{{--            <a class="prodlist-i-compare" href="#"><i class="fa fa-bar-chart"></i> Compare</a>--}}
{{--        </p>--}}
{{--    </div>--}}

{{--    <div class="prodlist-i-props-wrap">--}}
{{--        <ul class="prodlist-i-props">--}}
{{--            <li><b>Sleeve Length</b> Full</li>--}}
{{--            <li><b>Sleeve Style</b> Long sleeve</li>--}}
{{--            <li><b>Collar</b> V-Neck</li>--}}
{{--            <li><b>Fabric Type</b> Broadcloth</li>--}}
{{--            <li><b>Material</b> Cotton,Spandex</li>--}}
{{--            <li><b>Hooded</b> No</li>--}}
{{--            <li><b>Pattern Type</b> Solid</li>--}}
{{--            <li><b>Gender</b> Men</li>--}}
{{--            <li><b>Style</b> Fashion</li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="prodlist-i">--}}
{{--    <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="http://placehold.it/378x300" alt="Sunt temporibus velit"><!-- NO SPACE --></a>--}}
{{--    <div class="prodlist-i-cont">--}}
{{--        <h3><a href="product.html">Sunt temporibus velit</a></h3>--}}
{{--        <div class="prodlist-i-txt">--}}
{{--            Excepturi odit perferendis assumenda nisi cum, sunt autem quos odio quibusdam ipsa, molestias eum officia					</div>--}}
{{--        <div class="prodlist-i-skuwrap">--}}
{{--            <div class="prodlist-i-skuitem">--}}
{{--                <p class="prodlist-i-skuttl">Color</p>--}}
{{--                <ul class="prodlist-i-skucolor">--}}
{{--                    <li class="active"><img src="img/color/blue.jpg" alt=""></li>--}}
{{--                    <li><img src="img/color/red.jpg" alt=""></li>--}}
{{--                    <!--<li><img src="img/color/yellow.jpg" alt=""></li>-->--}}
{{--                    <!--<li><img src="img/color/purple.jpg" alt=""></li>-->--}}
{{--                    <li><img src="img/color/green.jpg" alt=""></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="prodlist-i-skuitem">--}}
{{--                <p class="prodlist-i-skuttl">Clothes sizes</p>--}}
{{--                <div class="offer-props-select">--}}
{{--                    <p>XS</p>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">S</a></li>--}}
{{--                        <li><a href="#">M</a></li>--}}
{{--                        <li><a href="#">L</a></li>--}}
{{--                        <li class="active"><a href="#">XS</a></li>--}}
{{--                        <li><a href="#">XL</a></li>--}}
{{--                        <li><a href="#">XXL</a></li>--}}
{{--                        <li><a href="#">XXXL</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="prodlist-i-action">--}}
{{--            <p class="prodlist-i-qnt">--}}
{{--                <input value="1" type="text">--}}
{{--                <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>--}}
{{--                <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>--}}
{{--            </p>--}}
{{--            <p class="prodlist-i-addwrap">--}}
{{--                <a href="#" class="prodlist-i-add">Add to cart</a>--}}
{{--            </p>--}}
{{--            <span class="prodlist-i-price">--}}
{{--							<b>$115</b>--}}
{{--													</span>--}}
{{--        </div>--}}
{{--        <p class="prodlist-i-info">--}}
{{--            <a href="#" class="prodlist-i-favorites"><i class="fa fa-heart"></i> Add to wishlist</a>--}}
{{--            <a href="#" class="qview-btn prodlist-i-qview"><i class="fa fa-search"></i> Quick view</a>--}}
{{--            <a class="prodlist-i-compare" href="#"><i class="fa fa-bar-chart"></i> Compare</a>--}}
{{--        </p>--}}
{{--    </div>--}}

{{--    <div class="prodlist-i-props-wrap">--}}
{{--        <ul class="prodlist-i-props">--}}
{{--            <li><b>Gender</b> Men</li>--}}
{{--            <li><b>Shaft Material</b> Flock</li>--}}
{{--            <li><b>Lining Material</b> Plush</li>--}}
{{--            <li><b>Insole Material</b> Rubber</li>--}}
{{--            <li><b>Season</b> Winter</li>--}}
{{--            <li><b>With Platforms</b> No</li>--}}
{{--            <li><b>Pattern Type</b> Solid</li>--}}
{{--            <li><b>Boot Height</b> Ankle</li>--}}
{{--            <li><b>Closure Type</b> Lace-Up</li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="prodlist-i">--}}
{{--    <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="http://placehold.it/300x394" alt="Harum illum incidunt"><!-- NO SPACE --></a>--}}
{{--    <div class="prodlist-i-cont">--}}
{{--        <h3><a href="product.html">Harum illum incidunt</a></h3>--}}
{{--        <div class="prodlist-i-txt">--}}
{{--            Distinctio laborum quos fugit nobis mollitia rem sit saepe perspiciatis qui					</div>--}}
{{--        <div class="prodlist-i-skuwrap">--}}
{{--            <div class="prodlist-i-skuitem">--}}
{{--                <p class="prodlist-i-skuttl">Clothes sizes</p>--}}
{{--                <div class="offer-props-select">--}}
{{--                    <p>XS</p>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">S</a></li>--}}
{{--                        <li><a href="#">M</a></li>--}}
{{--                        <li><a href="#">L</a></li>--}}
{{--                        <li class="active"><a href="#">XS</a></li>--}}
{{--                        <li><a href="#">XL</a></li>--}}
{{--                        <li><a href="#">XXL</a></li>--}}
{{--                        <li><a href="#">XXXL</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="prodlist-i-action">--}}
{{--            <p class="prodlist-i-qnt">--}}
{{--                <input value="1" type="text">--}}
{{--                <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>--}}
{{--                <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>--}}
{{--            </p>--}}
{{--            <p class="prodlist-i-addwrap">--}}
{{--                <a href="#" class="prodlist-i-add">Add to cart</a>--}}
{{--            </p>--}}
{{--            <span class="prodlist-i-price">--}}
{{--							<b>$130</b>--}}
{{--													</span>--}}
{{--        </div>--}}
{{--        <p class="prodlist-i-info">--}}
{{--            <a href="#" class="prodlist-i-favorites"><i class="fa fa-heart"></i> Add to wishlist</a>--}}
{{--            <a href="#" class="qview-btn prodlist-i-qview"><i class="fa fa-search"></i> Quick view</a>--}}
{{--            <a class="prodlist-i-compare" href="#"><i class="fa fa-bar-chart"></i> Compare</a>--}}
{{--        </p>--}}
{{--    </div>--}}

{{--    <div class="prodlist-i-props-wrap">--}}
{{--        <ul class="prodlist-i-props">--}}
{{--            <li><b>Outerwear Type</b> Jackets</li>--}}
{{--            <li><b>Sleeve Style</b> Regular</li>--}}
{{--            <li><b>Pattern Type</b> Solid</li>--}}
{{--            <li><b>Material</b> Polyester,Cotton</li>--}}
{{--            <li><b>Hooded</b> Yes</li>--}}
{{--            <li><b>Style</b> Casual</li>--}}
{{--            <li><b>Collar</b> Turn-down Collar</li>--}}
{{--            <li><b>Decoration</b> Pockets</li>--}}
{{--            <li><b>Gender</b> Men</li>--}}
{{--            <li><b>Closure Type</b> Zipper</li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="prodlist-i">--}}
{{--    <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="http://placehold.it/300x303" alt="Reprehenderit rerum"><!-- NO SPACE --></a>--}}
{{--    <div class="prodlist-i-cont">--}}
{{--        <h3><a href="product.html">Reprehenderit rerum</a></h3>--}}
{{--        <div class="prodlist-i-skuwrap">--}}
{{--            <div class="prodlist-i-skuitem">--}}
{{--                <p class="prodlist-i-skuttl">Color</p>--}}
{{--                <ul class="prodlist-i-skucolor">--}}
{{--                    <li class="active"><img src="img/color/blue.jpg" alt=""></li>--}}
{{--                    <li><img src="img/color/red.jpg" alt=""></li>--}}
{{--                    <!--<li><img src="img/color/yellow.jpg" alt=""></li>-->--}}
{{--                    <!--<li><img src="img/color/purple.jpg" alt=""></li>-->--}}
{{--                    <li><img src="img/color/green.jpg" alt=""></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="prodlist-i-skuitem">--}}
{{--                <p class="prodlist-i-skuttl">Clothes sizes</p>--}}
{{--                <div class="offer-props-select">--}}
{{--                    <p>XS</p>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">S</a></li>--}}
{{--                        <li><a href="#">M</a></li>--}}
{{--                        <li><a href="#">L</a></li>--}}
{{--                        <li class="active"><a href="#">XS</a></li>--}}
{{--                        <li><a href="#">XL</a></li>--}}
{{--                        <li><a href="#">XXL</a></li>--}}
{{--                        <li><a href="#">XXXL</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="prodlist-i-action">--}}
{{--            <p class="prodlist-i-qnt">--}}
{{--                <input value="1" type="text">--}}
{{--                <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>--}}
{{--                <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>--}}
{{--            </p>--}}
{{--            <p class="prodlist-i-addwrap">--}}
{{--                <a href="#" class="prodlist-i-add">Add to cart</a>--}}
{{--            </p>--}}
{{--            <span class="prodlist-i-price">--}}
{{--							<b>$210</b>--}}
{{--															<del>$240</del>--}}
{{--													</span>--}}
{{--        </div>--}}
{{--        <p class="prodlist-i-info">--}}
{{--            <a href="#" class="prodlist-i-favorites"><i class="fa fa-heart"></i> Add to wishlist</a>--}}
{{--            <a href="#" class="qview-btn prodlist-i-qview"><i class="fa fa-search"></i> Quick view</a>--}}
{{--            <a class="prodlist-i-compare" href="#"><i class="fa fa-bar-chart"></i> Compare</a>--}}
{{--        </p>--}}
{{--    </div>--}}

{{--    <div class="prodlist-i-props-wrap">--}}
{{--        <ul class="prodlist-i-props">--}}
{{--            <li><b>Outerwear Type</b> Jackets</li>--}}
{{--            <li><b>Sleeve Style</b> Regular</li>--}}
{{--            <li><b>Pattern Type</b> Solid</li>--}}
{{--            <li><b>Material</b> Polyester,Cotton</li>--}}
{{--            <li><b>Hooded</b> Yes</li>--}}
{{--            <li><b>Style</b> Casual</li>--}}
{{--            <li><b>Collar</b> Turn-down Collar</li>--}}
{{--            <li><b>Decoration</b> Pockets</li>--}}
{{--            <li><b>Gender</b> Boys</li>--}}
{{--            <li><b>Closure Type</b> Zipper</li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="prodlist-i">--}}
{{--    <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="http://placehold.it/300x588" alt="Quae quasi adipisci alias"><!-- NO SPACE --></a>--}}
{{--    <div class="prodlist-i-cont">--}}
{{--        <h3><a href="product.html">Quae quasi adipisci alias</a></h3>--}}
{{--        <div class="prodlist-i-txt">--}}
{{--            Cum nihil saepe itaque, quibusdam quos libero, et possimus rerum ratione similique					</div>--}}
{{--        <div class="prodlist-i-action">--}}
{{--            <p class="prodlist-i-qnt">--}}
{{--                <input value="1" type="text">--}}
{{--                <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>--}}
{{--                <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>--}}
{{--            </p>--}}
{{--            <p class="prodlist-i-addwrap">--}}
{{--                <a href="#" class="prodlist-i-add">Add to cart</a>--}}
{{--            </p>--}}
{{--            <span class="prodlist-i-price">--}}
{{--							<b>$85</b>--}}
{{--													</span>--}}
{{--        </div>--}}
{{--        <p class="prodlist-i-info">--}}
{{--            <a href="#" class="prodlist-i-favorites"><i class="fa fa-heart"></i> Add to wishlist</a>--}}
{{--            <a href="#" class="qview-btn prodlist-i-qview"><i class="fa fa-search"></i> Quick view</a>--}}
{{--            <a class="prodlist-i-compare" href="#"><i class="fa fa-bar-chart"></i> Compare</a>--}}
{{--        </p>--}}
{{--    </div>--}}

{{--    <div class="prodlist-i-props-wrap">--}}
{{--        <ul class="prodlist-i-props">--}}
{{--            <li><b>Gender</b> Women</li>--}}
{{--            <li><b>Pattern Type</b> Solid</li>--}}
{{--            <li><b>Color Style</b> Natural Color</li>--}}
{{--            <li><b>Material</b> Polyester</li>--}}
{{--            <li><b>Length</b> LongHooded</li>--}}
{{--            <li><b>Fabric Type</b> Woven</li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="prodlist-i">--}}
{{--    <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="http://placehold.it/300x416" alt="Maxime molestias necessitatibus nobis"><!-- NO SPACE --></a>--}}
{{--    <div class="prodlist-i-cont">--}}
{{--        <h3><a href="product.html">Maxime molestias necessitatibus nobis</a></h3>--}}
{{--        <div class="prodlist-i-txt">--}}
{{--            Tempora eius in voluptates quos dolorem, omnis consequatur quae, autem eligendi totam ex esse dolores accusamus					</div>--}}
{{--        <div class="prodlist-i-action">--}}
{{--            <p class="prodlist-i-qnt">--}}
{{--                <input value="1" type="text">--}}
{{--                <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>--}}
{{--                <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>--}}
{{--            </p>--}}
{{--            <p class="prodlist-i-addwrap">--}}
{{--                <a href="#" class="prodlist-i-add">Add to cart</a>--}}
{{--            </p>--}}
{{--            <span class="prodlist-i-price">--}}
{{--							<b>$95</b>--}}
{{--													</span>--}}
{{--        </div>--}}
{{--        <p class="prodlist-i-info">--}}
{{--            <a href="#" class="prodlist-i-favorites"><i class="fa fa-heart"></i> Add to wishlist</a>--}}
{{--            <a href="#" class="qview-btn prodlist-i-qview"><i class="fa fa-search"></i> Quick view</a>--}}
{{--            <a class="prodlist-i-compare" href="#"><i class="fa fa-bar-chart"></i> Compare</a>--}}
{{--        </p>--}}
{{--    </div>--}}

{{--    <div class="prodlist-i-props-wrap">--}}
{{--        <ul class="prodlist-i-props">--}}
{{--            <li><b>Outerwear Type</b> Jackets</li>--}}
{{--            <li><b>Sleeve Style</b> Regular</li>--}}
{{--            <li><b>Pattern Type</b> Solid</li>--}}
{{--            <li><b>Material</b> Polyester,Cotton</li>--}}
{{--            <li><b>Hooded</b> Yes</li>--}}
{{--            <li><b>Style</b> Casual</li>--}}
{{--            <li><b>Collar</b> Turn-down Collar</li>--}}
{{--            <li><b>Decoration</b> Pockets</li>--}}
{{--            <li><b>Gender</b> Men</li>--}}
{{--            <li><b>Closure Type</b> Zipper</li>--}}
{{--        </ul>--}}
{{--    </div>--}}

{{--    <div class="prod-sticker">--}}
{{--        <p class="prod-sticker-3">-30%</p><p class="prod-sticker-4 countdown" data-date="29 Jan 2017, 14:30:00"></p>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="prodlist-i">--}}
{{--    <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="http://placehold.it/300x480" alt="Facilis illum"><!-- NO SPACE --></a>--}}
{{--    <div class="prodlist-i-cont">--}}
{{--        <h3><a href="product.html">Facilis illum</a></h3>--}}
{{--        <div class="prodlist-i-txt">--}}
{{--            Quis temporibus hic reprehenderit explicabo odio earum maxime cupiditate mollitia					</div>--}}
{{--        <div class="prodlist-i-skuwrap">--}}
{{--            <div class="prodlist-i-skuitem">--}}
{{--                <p class="prodlist-i-skuttl">Color</p>--}}
{{--                <ul class="prodlist-i-skucolor">--}}
{{--                    <li class="active"><img src="img/color/blue.jpg" alt=""></li>--}}
{{--                    <li><img src="img/color/red.jpg" alt=""></li>--}}
{{--                    <!--<li><img src="img/color/yellow.jpg" alt=""></li>-->--}}
{{--                    <!--<li><img src="img/color/purple.jpg" alt=""></li>-->--}}
{{--                    <li><img src="img/color/green.jpg" alt=""></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="prodlist-i-action">--}}
{{--            <p class="prodlist-i-qnt">--}}
{{--                <input value="1" type="text">--}}
{{--                <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>--}}
{{--                <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>--}}
{{--            </p>--}}
{{--            <p class="prodlist-i-addwrap">--}}
{{--                <a href="#" class="prodlist-i-add">Add to cart</a>--}}
{{--            </p>--}}
{{--            <span class="prodlist-i-price">--}}
{{--							<b>$150</b>--}}
{{--															<del>$180</del>--}}
{{--													</span>--}}
{{--        </div>--}}
{{--        <p class="prodlist-i-info">--}}
{{--            <a href="#" class="prodlist-i-favorites"><i class="fa fa-heart"></i> Add to wishlist</a>--}}
{{--            <a href="#" class="qview-btn prodlist-i-qview"><i class="fa fa-search"></i> Quick view</a>--}}
{{--            <a class="prodlist-i-compare" href="#"><i class="fa fa-bar-chart"></i> Compare</a>--}}
{{--        </p>--}}
{{--    </div>--}}

{{--    <div class="prodlist-i-props-wrap">--}}
{{--        <ul class="prodlist-i-props">--}}
{{--            <li><b>Outerwear Type</b> Down & Parkas</li>--}}
{{--            <li><b>Closure Type</b> Zipper</li>--}}
{{--            <li><b>Filling</b> Cotton</li>--}}
{{--            <li><b>Fabric Type</b> Woven</li>--}}
{{--            <li><b>Clothing Length</b> Regular</li>--}}
{{--            <li><b>Material</b> Polyester</li>--}}
{{--            <li><b>Pattern Type</b> Solid</li>--}}
{{--            <li><b>Decoration</b> Pockets, Zippers</li>--}}
{{--            <li><b>Sleeve Length</b> Full</li>--}}
{{--            <li><b>Hooded</b> Yes</li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="prodlist-i">--}}
{{--    <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="http://placehold.it/358x300" alt="Iusto labore laudantium"><!-- NO SPACE --></a>--}}
{{--    <div class="prodlist-i-cont">--}}
{{--        <h3><a href="product.html">Iusto labore laudantium</a></h3>--}}
{{--        <div class="prodlist-i-txt">--}}
{{--            Veniam, non harum voluptate dicta sit porro iste cumque eligendi					</div>--}}
{{--        <div class="prodlist-i-skuwrap">--}}
{{--            <div class="prodlist-i-skuitem">--}}
{{--                <p class="prodlist-i-skuttl">Color</p>--}}
{{--                <ul class="prodlist-i-skucolor">--}}
{{--                    <li class="active"><img src="img/color/blue.jpg" alt=""></li>--}}
{{--                    <li><img src="img/color/red.jpg" alt=""></li>--}}
{{--                    <!--<li><img src="img/color/yellow.jpg" alt=""></li>-->--}}
{{--                    <!--<li><img src="img/color/purple.jpg" alt=""></li>-->--}}
{{--                    <li><img src="img/color/green.jpg" alt=""></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="prodlist-i-skuitem">--}}
{{--                <p class="prodlist-i-skuttl">Clothes sizes</p>--}}
{{--                <div class="offer-props-select">--}}
{{--                    <p>XS</p>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">S</a></li>--}}
{{--                        <li><a href="#">M</a></li>--}}
{{--                        <li><a href="#">L</a></li>--}}
{{--                        <li class="active"><a href="#">XS</a></li>--}}
{{--                        <li><a href="#">XL</a></li>--}}
{{--                        <li><a href="#">XXL</a></li>--}}
{{--                        <li><a href="#">XXXL</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="prodlist-i-action">--}}
{{--            <p class="prodlist-i-qnt">--}}
{{--                <input value="1" type="text">--}}
{{--                <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>--}}
{{--                <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>--}}
{{--            </p>--}}
{{--            <p class="prodlist-i-addwrap">--}}
{{--                <a href="#" class="prodlist-i-add">Add to cart</a>--}}
{{--            </p>--}}
{{--            <span class="prodlist-i-price">--}}
{{--							<b>$170</b>--}}
{{--													</span>--}}
{{--        </div>--}}
{{--        <p class="prodlist-i-info">--}}
{{--            <a href="#" class="prodlist-i-favorites"><i class="fa fa-heart"></i> Add to wishlist</a>--}}
{{--            <a href="#" class="qview-btn prodlist-i-qview"><i class="fa fa-search"></i> Quick view</a>--}}
{{--            <a class="prodlist-i-compare" href="#"><i class="fa fa-bar-chart"></i> Compare</a>--}}
{{--        </p>--}}
{{--    </div>--}}

{{--    <div class="prodlist-i-props-wrap">--}}
{{--        <ul class="prodlist-i-props">--}}
{{--            <li><b>Handbags Type</b> Shoulder Bags</li>--}}
{{--            <li><b>Exterior</b> Silt Pocket</li>--}}
{{--            <li><b>Material</b> Canvas</li>--}}
{{--            <li><b>Occasion</b> Versatile</li>--}}
{{--            <li><b>Shape</b> Casual Tote</li>--}}
{{--            <li><b>Pattern Type</b> Solid</li>--}}
{{--            <li><b>Style</b> Casual</li>--}}
{{--            <li><b>Hardness</b> Soft</li>--}}
{{--            <li><b>Decoration</b> None</li>--}}
{{--            <li><b>Closure Type</b> Zipper</li>--}}
{{--        </ul>--}}
{{--    </div>--}}

{{--    <div class="prod-sticker">--}}
{{--        <p class="prod-sticker-1">NEW</p>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="prodlist-i">--}}
{{--    <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="http://placehold.it/300x504" alt="Fuga impedit inciduntipsa"><!-- NO SPACE --></a>--}}
{{--    <div class="prodlist-i-cont">--}}
{{--        <h3><a href="product.html">Fuga impedit inciduntipsa</a></h3>--}}
{{--        <div class="prodlist-i-txt">--}}
{{--            Praesentium iure inventore nostrum corporis illum, est asperiores accusamus, ducimus, accusantium natus					</div>--}}
{{--        <div class="prodlist-i-action">--}}
{{--            <p class="prodlist-i-qnt">--}}
{{--                <input value="1" type="text">--}}
{{--                <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>--}}
{{--                <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>--}}
{{--            </p>--}}
{{--            <p class="prodlist-i-addwrap">--}}
{{--                <a href="#" class="prodlist-i-add">Add to cart</a>--}}
{{--            </p>--}}
{{--            <span class="prodlist-i-price">--}}
{{--							<b>$80</b>--}}
{{--													</span>--}}
{{--        </div>--}}
{{--        <p class="prodlist-i-info">--}}
{{--            <a href="#" class="prodlist-i-favorites"><i class="fa fa-heart"></i> Add to wishlist</a>--}}
{{--            <a href="#" class="qview-btn prodlist-i-qview"><i class="fa fa-search"></i> Quick view</a>--}}
{{--            <a class="prodlist-i-compare" href="#"><i class="fa fa-bar-chart"></i> Compare</a>--}}
{{--        </p>--}}
{{--    </div>--}}

{{--    <div class="prodlist-i-props-wrap">--}}
{{--        <ul class="prodlist-i-props">--}}
{{--            <li><b>Gender</b> Women</li>--}}
{{--            <li><b>Silhouette</b> Sheath</li>--}}
{{--            <li><b>Material</b> Polyester</li>--}}
{{--            <li><b>Season</b> Autumn</li>--}}
{{--            <li><b>Style</b> Casual</li>--}}
{{--            <li><b>Waistline</b> Natural</li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}
