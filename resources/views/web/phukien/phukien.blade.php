
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
                    <a href="/trangchu/phukien">
                        Phụ kiện
                    </a>
                </li>

            </ul>
            <h1 class="main-ttl"><span>Phụ kiện @if(isset($ten1)) / {{$ten1}}@endif</span></h1>
            <!-- Catalog Sidebar - start -->

            <!-- Catalog Items | Gallery V1 - start -->
            <div style="width: 100%;"  class="section-cont">


                <!-- Catalog Topbar - end -->
                <div style="width: 100%;" class="prod-items section-items">
                    @foreach($phukiens as $phukien)
                        <div class="prod-i">
                            <div class="prod-i-top">
                                <a href="/trangchu/sanpham/NDsanphan/{{$phukien->id}}" class="prod-i-img"><!-- NO SPACE --><img src="{{$phukien->anh1}}" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Yêu Thích</span><i class="fa fa-heart"></i></a>
                                    <a href="/trangchu/sanpham/NDsanphan/{{$phukien->id}}" class="qview-btn prod-i-qview"><span>Chi Tiết</span><i class="fa fa-search"></i></a>
{{--                                    <a class="prod-i-compare" href="#"><span>So Sánh</span><i class="fa fa-bar-chart"></i></a>--}}
                                </p>
{{--                                <a href="#" class="prod-i-buy">Thêm Vào Giỏ hàng</a>--}}
                                <p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

                                <div class="prod-i-properties">
                                    <dl>
                                        mô tả
                                        {{$phukien->content}}
                                    </dl>
                                </div>
                                <?php
                                $KQ=0;
                                $giaGiam = $phukien->money_sale;
                                $giaGoc  = $phukien->money;

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
                                <a href="/trangchu/sanpham/NDsanphan/{{$phukien->id}}">{!! \App\Helpers\Helper::truncateText($phukien->name,50) !!}</a>
                            </h3>
                            <p class="prod-i-price">
                                <?php $return = true ?>
                                @if($return && $phukien->money_sale > 0)
                                    <center><p>{{number_format($phukien->money_sale,0,',','.')}} đ - <strike style="color: red;">{{number_format($phukien->money,0,',','.')}} đ</strike></p></center>
                            <?php $return = false ?>
                            @endif
                            @if($return)
                                <center><p>{{$phukien->money}} đ</p></center>
                                @endif
                                </p>
                        </div>
                    @endforeach

                </div>



            <!-- Pagination - start -->
                <center>
                    <ul class="pagi">
                        {{ $phukiens->links() }}
                        <?php
                        $sumTrang = $phukiens->lastPage();
                        for ($i = 1; $i <= $sumTrang; $i++){
                        ?>
                        <li><a href="/trangchu/phukien?page={{$i}}">{{$i}}</a></li>
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
