@extends('web.sanpham.sanpham')

@section('hienthi')

    <div class="prod-items section-items prod-tb">
        @foreach($products as $product)
{{--        <from method="POST">--}}
        <div class="prodtb-i">
            <div class="prodtb-i-top">
                <button class="prodtb-i-toggle" type="button"></button>
                <h3 class="prodtb-i-ttl"><a href="/trangchu/sanpham/NDsanphan/{{$product->id}}">{{$product->name}}</a></h3>
                <div class="prodtb-i-info" >
                       <span class="prodtb-i-price">
                            <?php $return = true ?>
                            @if($return && $product->money_sale > 0)
                                <p>{{number_format($product->money_sale,0,',','.')}} đ <del><strike style="color: red;">{{number_format($product->money,0,',','.')}} đ</strike></del></p>
                                <?php $return = false ?>
                            @endif
                            @if($return)
                                <p>{{number_format($product->money,0,',','.')}} đ</p>
                            @endif
                        </span>
                    <p class="prodtb-i-qnt">
                        <input  name="SLSP_GH{{$product->id}}" id="SLSP_GH{{$product->id}}" value="1" style="width: 60px;" type="number">
                    </p>
                </div>

                <p class="prodtb-i-action">
                    <a href=""  onclick="themVaoyeuthich2({{--'{{Auth::user()->id}}', --}}'{{$product->id}}')" class="prodtb-i-favorites"><span>Yêu thích</span><i class="fa fa-heart"></i></a>
{{--                    <a class="prodtb-i-compare" href="#"><span>So Sánh</span><i class="fa fa-bar-chart"></i></a>--}}
                    <a href="/trangchu/sanpham/NDsanphan/{{$product->id}}" class="{{--qview-btn--}} prodtb-i-qview"><span>Chi tiết</span><i class="fa fa-search"></i></a>
                    <a href="#" onclick="themVaoGioHang2('{{$product->id}}', 'sizeSP_KHcan{{$product->id}}', 'SLSP_GH{{$product->id}}')" class="prodtb-i-buy"><span>Thêm vào giỏ hàng</span><i class="fa fa-shopping-basket"></i></a>{{--, '{{Auth::user()->id}}'--}}
                </p>
            </div>
            <div class="prodlist-i">
                <a class="list-img-carousel prodlist-i-img" href="/trangchu/sanpham/NDsanphan/{{$product->id}}">
                    <!-- NO SPACE -->
                    @if($product->anh1 !== null)
                        <img src="{{$product->anh1}}" style="height: 100%" alt="Adipisci aperiam commodi">
                    @endif
                    @if($product->anh2 !== null)
                        <img src="{{$product->anh2}}" alt="Adipisci aperiam commodi">
                    @endif
                    @if($product->anh3 !== null)
                        <img src="{{$product->anh3}}" alt="Adipisci aperiam commodi">
                    @endif
                    @if($product->anh4 !== null)
                        <img src="{{$product->anh4}}" alt="Adipisci aperiam commodi">
                    @endif
                    @if($product->anh5 !== null)
                        <img src="{{$product->anh5}}" alt="Adipisci aperiam commodi">
                    @endif
                    @if($product->anh6 !== null)
                        <img src="{{$product->anh6}}" alt="Adipisci aperiam commodi">
                    @endif
                    @if($product->anh7 !== null)
                        <img src="{{$product->anh7}}" alt="Adipisci aperiam commodi">
                    @endif
                    @if($product->anh8 !== null)
                        <img src="{{$product->anh8}}" alt="Adipisci aperiam commodi">
                    @endif
                    @if($product->anh9 !== null)
                        <img src="{{$product->anh9}}" alt="Adipisci aperiam commodi">
                    @endif
                    @if($product->anh10 !== null)
                        <img src="{{$product->anh10}}" alt="Adipisci aperiam commodi">
                    @endif
                    <!-- NO SPACE -->
                </a>
                <div class="prodlist-i-cont">
{{--                    <div class="prodlist-i-txt">--}}
{{--                        Quisquam totam quas veritatis dolor voluptates, laudantium repellendus. Cupiditate repellat tempora consequatur sequi, neque --}}
{{--                    </div>--}}
                    <div class="prodlist-i-skuwrap">
{{--                        <div class="prodlist-i-skuitem">--}}
{{--                            <p class="prodlist-i-skuttl">Color</p>--}}
{{--                            <ul class="prodlist-i-skucolor">--}}
{{--                                <li class="active"><img src="img/color/blue.jpg" alt=""></li>--}}
{{--                                <li><img src="img/color/red.jpg" alt=""></li>--}}
{{--                                <li><img src="img/color/green.jpg" alt=""></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        <div class="prodlist-i-skuitem ">

                            <p class="prodlist-i-skuttl">Sizes</p>
                                <select class="form-control "  name="sizeSP_KHcan{{$product->id}}" id="sizeSP_KHcan{{$product->id}}">
                                    <option value="-1" style=" color: red;">Size</option>
                                    @if($product -> size1 != null)
                                        <option value="{{$product -> size1}}">{{$product -> size1}}</option>
                                    @endif
                                    @if($product -> size2 != null)
                                        <option value="{{$product -> size2}}">{{$product -> size2}}</option>
                                    @endif
                                    @if($product -> size3 != null)
                                        <option value="{{$product -> size3}}">{{$product -> size3}}</option>
                                    @endif
                                    @if($product -> size4 != null)
                                        <option value="{{$product -> size4}}">{{$product -> size4}}</option>
                                    @endif
                                    @if($product -> size5 != null)
                                        <option value="{{$product -> size5}}">{{$product -> size5}}</option>
                                    @endif
                                    @if($product -> size6 != null)
                                        <option value="{{$product -> size6}}">{{$product -> size6}}</option>
                                    @endif
                                </select>
                            <br>

{{--                                <p class="prodlist-i-addwrap ">--}}
{{--                                    <input type="hidden" name="idKH_GH" id="idKH_GH" value="{{Auth::user()->id}}">--}}
{{--                                    <input type="hidden" name="idSP_GH" id="idSP_GH" value="{{$product->id}}">--}}
{{--                                    <a href="#" onclick="themVaoGioHang()" class="prodlist-i-add">Thêm vào giỏ hàng</a>--}}
{{--                                </p>--}}

                        </div>
                    </div>
                </div>

                <ul class="prodlist-i-props2">
                    {{$product->dattrung}}
                </ul>
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
            </div>
        </div>
        @endforeach
    </div>

@endsection
