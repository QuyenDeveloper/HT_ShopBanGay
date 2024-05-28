
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
                    <span>Blog</span>
                </li>
            </ul>
            <h1 class="main-ttl main-ttl-categs"><span>Blog</span></h1>
            <!-- Blog Categories -->
{{--            <ul class="blog-categs">--}}
{{--                <li class="active"><a href="#">tất cả</a></li>--}}
{{--                <li><a href="#">News</a></li>--}}
{{--                <li><a href="#">Reviews</a></li>--}}
{{--                <li><a href="#">Articles</a></li>--}}
{{--            </ul>--}}

            <!-- Blog Posts - start -->
            <div class="posts-list blog-page">
                @foreach($blogs as $blog)
                    <div class="posts-i">
                            <?php $xet = true; ?>
                            @if( $xet && $blog->anh1 != null)
                                    <a class="posts-i-img" href="/trangchu/blog/{{$blog->id}}"><span style="background: url('{{$blog->anh1}}')"></span></a>
                                    <?php $xet = false; ?>
                            @endif
                            @if( $xet && $blog->anh2 != null)
                                    <a class="posts-i-img" href="/trangchu/blog/{{$blog->id}}"><span style="background: url('{{$blog->anh2}}')"></span></a>
                                    <?php $xet = false; ?>
                            @endif
                            @if( $xet && $blog->anh3 != null)
                                    <a class="posts-i-img" href="/trangchu/blog/{{$blog->id}}"><span style="background: url('{{$blog->anh3}}')"></span></a>
                                    <?php $xet = false; ?>
                            @endif
                            @if( $xet && $blog->anh4 != null)
                                    <a class="posts-i-img" href="/trangchu/blog/{{$blog->id}}"><span style="background: url('{{$blog->anh4}}')"></span></a>
                                    <?php $xet = false; ?>
                            @endif
                            @if( $xet && $blog->anh5 != null)
                                    <a class="posts-i-img" href="/trangchu/blog/{{$blog->id}}"><span style="background: url('{{$blog->anh5}}')"></span></a>
                            @endif
                            <?php
                            $tgian = $blog->tgian;
                            $tgianMang = explode("-", $tgian);
                            ?>
                        <time class="posts-i-date" datetime="{{$blog->tgian}}"><span>{{$tgianMang[2]}}</span>Tháng {{$tgianMang[1]}}</time>
                        <div class="posts-i-info">
    {{--                        <a href="#" class="posts-i-ctg">Reviews</a>--}}
                            <h3 class="posts-i-ttl"><a href="/trangchu/blog/{{$blog->id}}">{{$blog->name}}</a></h3>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Blog Posts - end -->

            <!-- Pagination - start -->
            <center>
                <ul class="pagi">
                    {{ $blogs->links() }}
                    <?php
                    $sumTrang = $blogs->lastPage();
                    for ($i = 1; $i <= $sumTrang; $i++){
                    ?>
                    <li><a href="/trangchu/blog?page={{$i}}">{{$i}}</a></li>
                    <?php } ?>
                </ul>
                <div id="TT"></div>
            </center>
            <!-- Pagination - end -->
        </section>
    </main>
    <!-- Main Content - end -->

@endsection
