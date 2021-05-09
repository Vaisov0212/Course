<?php
$title="Biz haqimizda"
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
                <h2>Contact Us</h2>
                <div class="page_link">
                  <a href="index.html">Home</a>
                  <a href="contact.html">Contact</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->
    <br>
    <div class="row">
        <div class="col-lg-12">
            @if(count($errors) > 0 )
            <div class="alert bg-warning" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>
                <ul>
                     @foreach($errors->all() as $error )
                     <li>{{$error }} </li>
                     @endforeach

               </ul>
              </div>

            @endif
            @if(\Session::has('success'))
                <div style="padding: 10px; text-align:center;">
                    <div class="alert alert-primary" role="alert"><i class=""></i>
                    {{\Session::get('success')}}
                    </div>
                </div>
            @endif
        </div>
    </div><!--/.row-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
      <div class="container">

        <div class="row">
          <div class="col-lg-3">
            <div class="contact_info">
              <div class="info_item">
                <i class="ti-home"></i>
                <h6>California, United States</h6>
                <p>Santa monica bullevard</p>
              </div>
              <div class="info_item">
                <i class="ti-headphone"></i>
                <h6><a href="#">00 (440) 9865 562</a></h6>
                <p>Mon to Fri 9am to 6 pm</p>
              </div>
              <div class="info_item">
                <i class="ti-email"></i>
                <h6><a href="#">support@colorlib.com</a></h6>
                <p>Send us your query anytime!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <form class="row contact_form" action="{{route('contact_us')}}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="col-md-6">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Ism, Familya"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'isminggizni kiriting'"
                    required=""
                  />
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="elektron pochta"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'elektron pochtanggizni kiriting'"
                    required=""
                  />
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="subject"
                    name="subject"
                    placeholder="Mavzu"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'murojat mavzusi'"
                    required=""
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea
                    class="form-control"
                    name="message"
                    id="message"
                    rows="1"
                    placeholder="Xabaringgizni kiriting"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Xabar'"
                    required=""
                  ></textarea>
                </div>
              </div>
              <div class="col-md-12 text-right">
                <button type="submit" value="submit" class="btn primary-btn">
                  Jo'natish
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--================Contact Area =================-->
@include('layouts/footer')
