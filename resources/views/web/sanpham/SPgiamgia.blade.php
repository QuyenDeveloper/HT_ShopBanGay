
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
                    <a href="/trangchu/sanpham/giam_gia">
                        {{$title}}
                    </a>
                </li>

            </ul>
            <h1 class="main-ttl"><span>{{$title}}@if(isset($ten1)) / {{$ten1}}@endif</span></h1>
            <!-- Catalog Sidebar - start -->

            <!-- Catalog Items | Gallery V1 - start -->
            <div style="width: 100%;" class="section-cont">
                <div style="width: 100%;" class="prod-items section-items">
                    @foreach($giamgias as $giamgia)
                        <div class="prod-i" >
                            <div class="prod-i-top">
                                <a href="/trangchu/sanpham/NDsanphan/{{$giamgia->id}}" class="prod-i-img"><!-- NO SPACE --><img src="{{$giamgia->anh1}}" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Yêu Thích</span><i class="fa fa-heart"></i></a>
                                    <a href="/trangchu/sanpham/NDsanphan/{{$giamgia->id}}" class="{{--qview-btn--}} prod-i-qview"><span>Chi Tiết</span><i class="fa fa-search"></i></a>
{{--                                    <a class="prod-i-compare" href="#"><span>So Sánh</span><i class="fa fa-bar-chart"></i></a>--}}
                                </p>
{{--                                <a href="#" class="prod-i-buy">Thêm Vào Giỏ hàng</a>--}}
                                <p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

                                <div class="prod-i-properties">
                                    <dl>
                                        mô tả
                                        {{$giamgia->dattrung}}
                                    </dl>
                                </div>
                                <?php
                                $KQ=0;
                                $giaGiam = $giamgia->money_sale;
                                $giaGoc  = $giamgia->money;

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
                                <a href="/trangchu/sanpham/NDsanphan/{{$giamgia->id}}">{{$giamgia->name}}</a>
                            </h3>
                            <p class="prod-i-price">
                                <?php $return = true ?>
                                @if($return && $giamgia->money_sale > 0)
                                    <center><p>{{$giamgia->money_sale}} đ - <strike style="color: red;">{{$giamgia->money}} đ</strike></p></center>
                            <?php $return = false ?>
                            @endif
                            @if($return)
                                <center><p>{{$giamgia->money}} đ</p></center>
                                @endif
                                </p>
                        </div>
                    @endforeach

                </div>


                <!-- Pagination - start -->
                <center>
                    <ul class="pagi">
                        {{ $giamgias->links() }}
                        <?php
                        $sumTrang = $giamgias->lastPage();
                        for ($i = 1; $i <= $sumTrang; $i++){
                        ?>
                        <li><a href="/trangchu/sanpham/giam_gia?page={{$i}}">{{$i}}</a></li>
                        <?php } ?>

                    </ul>
                </center>
                <!-- Pagination - end -->
            </div>
            <!-- Catalog Items | Gallery V1 - end -->

        </section>
    </main>
    <!-- Main Content - end -->

@endsection
