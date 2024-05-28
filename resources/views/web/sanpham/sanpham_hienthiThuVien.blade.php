@extends('web.sanpham.sanpham')

@section('hienthi')


    <div class="prod-items section-items">
        @foreach($products as $product)
            <div class="prod-i">
                <div class="prod-i-top">
                    <a href="/trangchu/sanpham/NDsanphan/{{$product->id}}" class="prod-i-img"><!-- NO SPACE --><img src="{{$product->anh1}}" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                    <p class="prod-i-info">
                        <a href="#" onclick="themVaoyeuthich2({{--'{{Auth::user()->id}}', --}}'{{$product->id}}')" class="prod-i-favorites"><span>Yêu Thích</span><i class="fa fa-heart"></i></a>
                        <a href="/trangchu/sanpham/NDsanphan/{{$product->id}}" class="{{--qview-btn--}} prod-i-qview"><span>Chi Tiết</span><i class="fa fa-search"></i></a>
{{--                        <a class="prod-i-compare" href="#"><span>So Sánh</span><i class="fa fa-bar-chart"></i></a>--}}
                    </p>
{{--                    <from method="POST" >--}}
{{--                        <input type="hidden" name="idKH_GH" id="idKH_GH" value="{{Auth::user()->id}}">--}}
{{--                        <input type="hidden" name="idSP_GH" id="idSP_GH" value="{{$product->id}}">--}}
{{--                        <input type="hidden" name="sizeSP_KHcan" id="sizeSP_KHcan" onclick="prompt('Nhập vào Size của bạn: Sản phẩm gòm có các size ', )">;--}}
{{--                        <input type="hidden" name="SLSP_GH" id="SLSP_GH" value="1">--}}

{{--                        <a href="#" onclick="TSP_themVaoGioHang()" class="prod-i-buy">Thêm Vào Giỏ hàng</a>--}}

{{--                        <select class="form-control"  name="sizeSP_KHcan" id="sizeSP_KHcan">--}}
{{--                            <option value="-1" style=" color: red;">Chọn Size</option>--}}
{{--                            @if($product -> size1 != null)--}}
{{--                                <option value="{{$product -> size1}}">{{$product -> size1}}</option>--}}
{{--                            @endif--}}
{{--                            @if($product -> size2 != null)--}}
{{--                                <option value="{{$product -> size2}}">{{$product -> size2}}</option>--}}
{{--                            @endif--}}
{{--                            @if($product -> size3 != null)--}}
{{--                                <option value="{{$product -> size3}}">{{$product -> size3}}</option>--}}
{{--                            @endif--}}
{{--                            @if($product -> size4 != null)--}}
{{--                                <option value="{{$product -> size4}}">{{$product -> size4}}</option>--}}
{{--                            @endif--}}
{{--                            @if($product -> size5 != null)--}}
{{--                                <option value="{{$product -> size5}}">{{$product -> size5}}</option>--}}
{{--                            @endif--}}
{{--                            @if($product -> size6 != null)--}}
{{--                                <option value="{{$product -> size6}}">{{$product -> size6}}</option>--}}
{{--                            @endif--}}
{{--                        </select>--}}
{{--                    </from>--}}
                    <p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

                    <div class="prod-i-properties">
                        <dl>mô tả</dl>
                        <dd>{{$product->dattrung}}</dd>
                    </div>
                    <?php
                    $KQ=0;
                    $giaGiam = $product->money_sale;
                    $giaGoc  = $product->money;

                    $a = ($giaGiam * 100)/$giaGoc;
                    $b = 100-$a;
                    $KQ = number_format($b ,2);
                    ?>
                    @if($KQ != 100)
                        <div class="prod-sticker">
                            <p class="prod-sticker-3">{{$KQ}} %</p>
                        </div>
                    @endif
                </div>
                <h3>
                    <a href="/trangchu/sanpham/NDsanphan/{{$product->id}}">{{$product->name}}</a>
                </h3>
                <p class="prod-i-price">
                    <?php $return = true ?>
                    @if($return && $product->money_sale > 0)
                        <center><p>{{number_format($product->money_sale)}} đ - <strike style="color: red;">{{number_format($product->money)}} đ</strike></p></center>
                <?php $return = false ?>
                @endif
                @if($return)
                    <center><p>{{number_format($product->money)}} đ</p></center>
                    @endif
                    </p>
            </div>
        @endforeach

    </div>
@endsection
{{--<div class="prod-items section-items prod-items-galimg">--}}
{{--    @foreach($products as $product)--}}
{{--        <div class="prod-i">--}}
{{--            <div class="prod-i-top">--}}
{{--                <a href="product.html" class="prod-i-img"><!-- NO SPACE -->--}}
{{--                    @if($product->anh1 !== null)--}}
{{--                        <img src="{{$product->anh1}}" alt="Adipisci aperiam commodi">--}}
{{--                    @endif--}}
{{--                    @if($product->anh2 !== null)--}}
{{--                        <img src="{{$product->anh2}}" alt="Adipisci aperiam commodi">--}}
{{--                    @endif--}}
{{--                    @if($product->anh3 !== null)--}}
{{--                        <img src="{{$product->anh3}}" alt="Adipisci aperiam commodi">--}}
{{--                    @endif--}}
{{--                    @if($product->anh4 !== null)--}}
{{--                        <img src="{{$product->anh4}}" alt="Adipisci aperiam commodi">--}}
{{--                    @endif--}}
{{--                    @if($product->anh5 !== null)--}}
{{--                        <img src="{{$product->anh5}}" alt="Adipisci aperiam commodi">--}}
{{--                    @endif--}}
{{--                    @if($product->anh6 !== null)--}}
{{--                        <img src="{{$product->anh6}}" alt="Adipisci aperiam commodi">--}}
{{--                    @endif--}}
{{--                    @if($product->anh7 !== null)--}}
{{--                        <img src="{{$product->anh7}}" alt="Adipisci aperiam commodi">--}}
{{--                    @endif--}}
{{--                    @if($product->anh8 !== null)--}}
{{--                        <img src="{{$product->anh8}}" alt="Adipisci aperiam commodi">--}}
{{--                    @endif--}}
{{--                    @if($product->anh9 !== null)--}}
{{--                        <img src="{{$product->anh9}}" alt="Adipisci aperiam commodi">--}}
{{--                    @endif--}}
{{--                    @if($product->anh10 !== null)--}}
{{--                        <img src="{{$product->anh10}}" alt="Adipisci aperiam commodi">--}}
{{--                @endif--}}
{{--                <!-- NO SPACE -->--}}
{{--                </a>--}}

{{--                <div class="prod-i-properties">--}}
{{--                    <dl>--}}
{{--                        {{$product->dattrung}}--}}
{{--                    </dl>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <h3>--}}
{{--                <a href="product.html">{{$product->name}}</a>--}}
{{--            </h3>--}}
{{--            <div class="prod-i-action">--}}
{{--                <p class="prod-i-info">--}}
{{--                    <a href="#" class="prod-i-favorites"><span>Yêu thích</span><i class="fa fa-heart"></i></a>--}}
{{--                    <a class="prod-i-compare" href="#"><span>So sánh</span><i class="fa fa-bar-chart"></i></a>--}}
{{--                    <a href="#" class="prod-i-buy"><span>Thêm vào giỏ hàng</span><i class="fa fa-shopping-basket"></i></a>--}}
{{--                    <a href="#" class="qview-btn prod-i-qview"><span>Chi tiết</span><i class="fa fa-search"></i></a>--}}
{{--                    <a href="#" class="prod-i-properties-label"><span>Đặt trưng</span><i class="fa fa-info"></i></a>--}}
{{--                </p>--}}
{{--                <p class="prod-i-price">--}}
{{--                    <?php $return = true ?>--}}
{{--                    @if($return && $product->money_sale > 0)--}}
{{--                        <b style="font-size: 15px;">{{$product->money_sale}} đ - <strike style="color: red;">{{$product->money}} đ</strike></b>--}}
{{--                        <?php $return = false ?>--}}
{{--                    @endif--}}
{{--                    @if($return)--}}
{{--                        <b style="font-size: 15px;">{{$product->money}} đ</b>--}}
{{--                    @endif--}}
{{--                </p>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    @endforeach--}}
{{--</div>--}}
