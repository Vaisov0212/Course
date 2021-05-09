<?php
$title="Testlar";
?>
@include('layouts/header')
    <!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
            <div class="banner_content text-center">
                <h2>Bepul testlar</h2>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->
<!--================ Start Feature Area =================-->
<section class="feature_area section_gap_top title-bg" style="background-color: rgb(223, 218, 196)"  >
    <div class="container"  >
      <div class="row justify-content-center">
        <div class="col-lg-5" >
          <div class="main_title">
            <h3 >Matematika fanidan bepul testlar</h3>
            <p>
              bepul testlarda qatnashing va o'z bilimimggizni sinab ko'ring
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6" >
          <div class="single_feature" style="background-color: rgba(223, 218, 196, 0.685)">
            <div class="icon"><span class="flaticon-student"> </span></div>
            <div class="desc">
              <h4 class="mt-3 mb-2">Global Certification</h4>
              <p>
                One make creepeth, man bearing theira firmament won't great
                heaven
              </p>
            </div>
            <hr>
          <div>
            <img style="margin-left:50px" width="30%" height="30%" src="free-logo.png" >
          </div>
       </div>
    </div>
    <div class="col-lg-4 col-md-6" >
      <div class="single_feature" style="background-color: rgb(223, 218, 196)">
        <div class="icon"><span class="flaticon-book"> </span></div>
          <div class="desc">
            <h4 class="mt-3 mb-2">Global Certification</h4>
            <p>
             One make creepeth, man bearing theira firmament won't great
             heaven
            </p>
          </div>
              <hr>
              <div>
              <img style="margin-left:50px" width="30%" height="30%" src="free-logo.png" >
              </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6" >
      <div class="single_feature" style="background-color: rgb(223, 218, 196)">
        <div class="icon"><span class="flaticon-earth"> </span></div>
          <div class="desc">
            <h4 class="mt-3 mb-2">Global Certification</h4>
            <p>
                One make creepeth, man bearing theira firmament won't great
                heaven
            </p>
        </div>
            <hr>
        <div>
            <img style="margin-left:50px" width="30%" height="30%" src="free-logo.png" >
        </div>
      </div>
    </div>
    </div>
        <form enctype="multipart/form-data" method="post" action="{{route('test-show')}}">
        @csrf
    <div class="input-group-icon mt-10">
            <div class="icon"><i class="ti-location-pin" aria-hidden="true"></i></div>
                <input type="text" name="name" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'"
                    required class="single-input">
            </div>
            <div class="input-group-icon mt-10">
                <div class="icon"><i class="ti-location-arrow" aria-hidden="true"></i></div>
                    <div class="form-select" id="default-select">
                    <select name="id_cat">
                    @foreach ($category as $item )
                    <option  value="{{$item->id}}">{{$item->name}}</option>

                    @endforeach
                    </select>
                </div>
            </div>
            <div class="input-group-icon mt-10">
                <div class="icon"><i class="ti-map" aria-hidden="true"></i></div>
                    <div class="form-select" id="default-select2">
                    <select name="issue">
                    <option value="10">10 ta lik</option>
                    <option value="25">25 ta lik</option>
                    <option value="36">36 ta lik</option>
                    </select>
                </div>
            </div>
            <div style="padding: 10px; text-align:right">
            <button type="submit" class="genric-btn warning-border circle arrow">Testni boshlash<span class="ti-arrow-right"></span></button>
            </div>
        </div>
    </form>
 </section>
  <!--================ End Feature Area =================-->

@include('layouts/footer')
