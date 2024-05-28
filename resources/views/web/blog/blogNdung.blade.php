
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
                    <a href="/trangchu/blog">
                        <span>Blog</span>
                    </a>
                </li>
                @if(isset($idblogs->name))
                    <li>
                        <span>{{$idblogs->name}}</span>
                    </li>
                @endif
            </ul>
            <h1 class="main-ttl main-ttl-categs"><span>{{$idblogs->name}}</span></h1>
            <!-- Blog Post - start -->
            <div class="post-wrap stylization">
{{--                <img class="post-img" src="http://placehold.it/1140x580" alt="">--}}
                <!-- Slider -->
                <div class="flexslider post-slider" id="post-slider-car">
                    <ul class="slides">
                        @if($idblogs->anh1 != null)
                            <li>
                                <a data-fancybox-group="fancy-img" class="fancy-img" href="{{$idblogs->anh1}}"><center><img style="width: auto;height: 500px;" src="{{$idblogs->anh1}}" alt=""></center></a>
                            </li>
                        @endif
                        @if($idblogs->anh2 != null)
                            <li>
                                <a data-fancybox-group="fancy-img" class="fancy-img" href="{{$idblogs->anh2}}"><center><img style="width: auto;height: 500px;" src="{{$idblogs->anh2}}" alt=""></center></a>
                            </li>
                        @endif
                        @if($idblogs->anh3 != null)
                            <li>
                                <a data-fancybox-group="fancy-img" class="fancy-img" href="{{$idblogs->anh3}}"><center><img style="width: auto;height: 500px;" src="{{$idblogs->anh3}}" alt=""></center></a>
                            </li>
                        @endif
                        @if($idblogs->anh4 != null)
                            <li>
                                <a data-fancybox-group="fancy-img" class="fancy-img" href="{{$idblogs->anh4}}"><center><img style="width: auto;height: 500px;" src="{{$idblogs->anh4}}" alt=""></center></a>
                            </li>
                        @endif
                        @if($idblogs->anh5 != null)
                            <li>
                                <a data-fancybox-group="fancy-img" class="fancy-img" href="{{$idblogs->anh5}}"><center><img style="width: auto;height: 500px;" src="{{$idblogs->anh5}}" alt=""></center></a>
                            </li>
                        @endif

                    </ul>
                </div>
                <p>{{$idblogs->content}}</p>

                <!-- Share Links -->
                <div class="post-share-wrap">
                    <ul class="post-share">
                        <li>
                            <a onclick="window.open('https://www.facebook.com/sharer.php?s=100&amp;p[url]=http://allstore-html.real-web.pro','sharer', 'toolbar=0,status=0,width=620,height=280');" data-toggle="tooltip" title="Share on Facebook" href="javascript:">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a onclick="popUp=window.open('http://twitter.com/home?status=Post with Shortcodes http://allstore-html.real-web.pro','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" data-toggle="tooltip" title="Share on Twitter" href="javascript:;">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a onclick="popUp=window.open('http://vk.com/share.php?url=http://allstore-html.real-web.pro','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" data-toggle="tooltip" title="Share on VK" href="javascript:;">
                                <i class="fa fa-vk"></i>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tooltip" title="Share on Pinterest" onclick="popUp=window.open('http://pinterest.com/pin/create/button/?url=http://allstore-html.real-web.pro&amp;description=AllStore HTML Template&amp;media=http://discover.real-web.pro/wp-content/uploads/2016/09/insect-1130497_1920.jpg','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tooltip" title="Share on Google +1" href="javascript:;" onclick="popUp=window.open('https://plus.google.com/share?url=http://allstore-html.real-web.pro','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tooltip" title="Share on Linkedin" onclick="popUp=window.open('http://linkedin.com/shareArticle?mini=true&amp;url=http://allstore-html.real-web.pro&amp;title=AllStore HTML Template','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tooltip" title="Share on Tumblr" onclick="popUp=window.open('http://www.tumblr.com/share/link?url=http://allstore-html.real-web.pro&amp;name=AllStore HTML Template&amp;description=Aliquam%2C+consequuntur+laboriosam+minima+neque+nesciunt+quod+repudiandae+rerum+sint.+Accusantium+adipisci+aliquid+architecto+blanditiis+dolorum+excepturi+harum+ipsa%2C+ipsam%2C...','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">
                                <i class="fa fa-tumblr"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="post-info">
                        <li><time datetime="2016-11-09 22:00:32">{{$idblogs->tgian}}</time></li>
                        <li>Bình luận: <a href="#"> 0 </a></li>
                    </ul>
                </div>

                <!-- Related Posts -->
                <div class="flexslider post-rel-wrap" id="post-rel-car">
                    <ul class="slides">
                        @foreach($blogs as $blog)
                            <li class="posts-i">
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
                                    <h3 class="posts-i-ttl"><a href="/trangchu/blog/{{$blog->id}}">{{$blog->name}}</a></h3>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
            <!-- Blog Post - end -->

            <!-- Related Products - start -->
            <div class="prod-related">
                <h2><span>-- Sản phẩm --</span></h2>
                <div class="prod-related-car" id="prod-related-car">
                    <ul class="slides">
                        <li class="prod-rel-wrap">
                            @foreach($SPTTs as $SPTT)
                                <div class="prod-rel">
                                    <a href="/trangchu/sanpham/NDsanphan/{{$SPTT->id}}" class="prod-rel-img">
                                        <img src="{{$SPTT->anh1}}" alt="Maxime molestias necessitatibus nobis" draggable="false">
                                    </a>
                                    <div class="prod-rel-cont">
                                        <h3><a href="/trangchu/sanpham/NDsanphan/{{$SPTT->id}}">{{$SPTT->name}}</a></h3>
                                        <p class="prod-rel-price">
                                            <?php $return = true ?>
                                            @if($return && $SPTT->money_sale > 0)
                                                <b  class="item_current_price">{{$SPTT->money_sale}} đ</b>
                                                <?php $return = false ?>
                                            @endif
                                            @if($return)
                                                <b class="item_current_price">{{$SPTT->money}} đ</b>
                                            @endif
                                        </p>
                                        <div class="prod-rel-actions">
                                            {{--                                            <a title="Yêu thích" id="themVaoyeuthich1" href="#" onclick="themVaoyeuthich('{{Auth::user()->id}}', '{{$SPs->id}}')" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>--}}
                                            {{--                                            <?php $s = 1; ?>--}}
                                            {{--                                            @if($yeuthichs == null && $s == 1)--}}
                                            {{--                                                <a title="Yêu thích" id="themVaoyeuthich1" href="#" onclick="themVaoyeuthich3('{{Auth::user()->id}}', '{{$SPs->id}}')" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>--}}
                                            {{--                                            @endif--}}
                                            {{--                                            @if($yeuthichs != null && $yeuthichs->ID_SP == $SPTT->id)--}}
                                            {{--                                                <a title="Yêu thích" id="themVaoyeuthich2" href="#" onclick="xoayeuthich3('{{Auth::user()->id}}', '{{$SPs->id}}')" class="prod-rel-favorites"><i style="color: black" class="fa fa-heart"></i></a>--}}
                                            {{--                                            @endif--}}
                                            {{--                                            <a title="So sánh" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>--}}
                                            {{--                                            <p class="prod-i-addwrap">--}}
                                            {{--                                                <a title="thêm vào giỏ hàng" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>--}}
                                            {{--                                            </p>--}}
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- Related Products - end -->

            <!-- Comments - start -->
            <ul class="reviews-list">
                @foreach($cmts as $cmt)
                    @foreach($uses as $use)
                        @if($use->id == $cmt->idKH)
                            <li class="reviews-i existimg">
                                <div class="reviews-i-img">
                                    <img src="@if($use->avt != null) {{$use->avt}} @endif  @if($use->avt == null) /web/imgs/pixlr-bg-result.png @endif" alt="Jeni Margie">
                                    <div class="reviews-i-rating">
                                        @if($cmt->danhgia ==1.0)
                                            <i class="fa fa-star"></i>
                                        @endif
                                        @if($cmt->danhgia ==2.0)
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        @endif
                                        @if($cmt->danhgia ==3.0)
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        @endif
                                        @if($cmt->danhgia ==4.0)
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        @endif
                                        @if($cmt->danhgia ==5.0)
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        @endif

                                    </div>
                                    <time datetime="{{$cmt->created_at}}" class="reviews-i-date">{{$cmt->created_at}}</time>
                                </div>
                                <div class="reviews-i-cont">
                                    <p>{{$cmt->cmt}}</p>
                                    <span class="reviews-i-margin"></span>
                                    <h3 class="reviews-i-ttl">{{$use->name}}</h3>
                                </div>
                            </li>
                        @endif
                    @endforeach
                @endforeach
            </ul>
            <!-- Comments - end -->

            <!-- Comment Form - start -->
            <div class="prod-comment-form post-form">
                <h3>Thêm nhận xét của bạn</h3>
                <form method="POST" action="#">
                    <input type="text" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" readonly>
                    <input type="text" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" readonly>
                    <textarea placeholder="Nhận xét của bạn"></textarea>
                    <div class="prod-comment-submit">
                        <input type="submit" value="Nhận xét">
                        <div class="prod-rating">
                            <i class="fa fa-star-o" title="5"></i><i class="fa fa-star-o" title="4"></i><i class="fa fa-star-o" title="3"></i><i class="fa fa-star-o" title="2"></i><i class="fa fa-star-o" title="1"></i>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Comment Form - end -->
        </section>
    </main>
    <!-- Main Content - end -->

@endsection
