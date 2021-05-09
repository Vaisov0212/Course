
<?php
$title="Bog`lanish";
?>
@include('layouts/header')

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div >
                                <img  width="100%" height="100%" src="../upload/posts/{{$new->img}}" width="50%" height="100px" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a >Food,</a>
                                    <a class="active">Technology,</a>
                                    <a >Politics,</a>
                                    <a >Lifestyle</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a >{{$new->name}}<i class="ti-user"></i></a></li>
                                    <li><a >{{$new->created_at->format('Y/m/d')}}<i class="ti-calendar"></i></a></li>
                                    <li><a >Ko'rishlar {{$new->views}}<i class="ti-eye"></i></a></li>
                                    <li><a >Muxokamalar <i class="ti-comment"></i></a></li>
                                </ul>
                                <ul class="social-links">
                                    <li><a ><i class="ti-facebook"></i></a></li>
                                    <li><a ><i class="ti-twitter"></i></a></li>
                                    <li><a ><i class="ti-github"></i></a></li>
                                    <li><a ><i class="ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2>{{$new->subject}}</h2>
                            <p class="excert">
                                {{substr($new->title,0,600)}} </p>
                        </div>
                        <div class="col-lg-12">
                          <div class="row">
                            <div class="col-lg-12 mt-25">
                                <p>{{substr($new->title,600)}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="arrow">
                                    <a href="#"><i class="text-white ti-arrow-left"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ---nav-- --}}
    @include('layouts/naws')
    <!--================Blog Area =================-->
@include('layouts/footer')
