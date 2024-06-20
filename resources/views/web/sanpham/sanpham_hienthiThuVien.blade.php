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
                    </p>
                    <p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

                    <div class="prod-i-properties">
                        <dl>Mô tả</dl>
                        <dd>{!! \App\Helpers\Helper::truncateText($product->content,200) !!}</dd>
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
                        <center><p>{{number_format($product->money_sale,0,',','.')}}đ - <strike style="color: red;">{{number_format($product->money,0,',','.')}}đ</strike></p></center>
                <?php $return = false ?>
                @endif
                @if($return)
                    <center><p>{{number_format($product->money,0,',','.')}}đ</p></center>
                    @endif
                    </p>
            </div>
        @endforeach

    </div>
@endsection
