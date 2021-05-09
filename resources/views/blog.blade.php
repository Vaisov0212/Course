<?php
$title="Yangiliklar";
?>

@include('layouts/header')



    <!--================Blog Area =================-->
    <section class="blog_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">




                        @foreach ($news as $new)


                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a >Food,</a>
                                        <a class="active" >Technology,</a>
                                        <a >Politics,</a>
                                        <a >Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a >{{$new->name}}<i class="ti-user"></i></a></li>
                                        <li><a > {{$new->created_at->format("Y/d/m")}}<i class="ti-calendar"></i></a></li>
                                        <li><a >{{$new->views}}<i class="ti-eye"></i></a></li>
                                        <li><a >1<i class="ti-comment"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="upload/posts/{{$new->img}}" >
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2> {{$new->subject}} </h2>
                                        </a>
                                        <p> {{substr($new->title,0,400)}}... </p>
                                        <a href="{{route('news-more',$new->id)}}" class="blog_btn">Batafsil...</a>
                                    </div>
                                </div>
                            </div>
                        </article>

                           @endforeach

                                   {{-- ----pagenate--- --}}
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">

                              {{$links}}

                            </ul>
                        </nav>
                    </div>
                </div>

                {{-- ---Nav--- --}}
               @include('layouts/naws')
    <!--================Blog Area =================-->

    @include('layouts/footer')
