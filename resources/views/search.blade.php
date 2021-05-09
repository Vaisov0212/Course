<?php
$title="qidiruv";
?>

@include('layouts.header')
<br>
<br>
<br>
<br>
    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>blog</h3>
                        <p><a href="index.html">Home /</a> Qidiruv</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->


    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <div>
                            <form method="POST" action="{{route('searchPost')}}">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input placeholder="Qidiruv..." value="{{ request()->get('key') }}" type="text" class="form-control" name="key" />
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @if(count($results)==null)
                            <div class="alert alert-primary">
                                Sizning " {{request()->get('key')}}" so'rovingiz bo'yicha hech nima topilmadi.
                            </div>
                         @endif
                         @foreach ($results as $new)


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
                                                <nav class="blog-pagination justify-content-center d-flex">
                            {{ $links }}
                        </nav>
                    </div>
                </div>

    {{-- </section> --}}

    @include('layouts/naws')

@include('layouts.footer')
