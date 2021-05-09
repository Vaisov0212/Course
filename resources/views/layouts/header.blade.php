<!DOCTYPE html>
<html lang="uz">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>{{$title}}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/nice-select/css/nice-select.css')}}" />
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
      <div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="POST" action="{{route('searchPost')}}">
                @csrf
              <input name="key" type="text" class="form-control" id="search_input" placeholder="Qidruv..." />
              <button type="submit" class="btn"></button>
              <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.html">
                <img src="img/logo.png" alt=""/>
            </a>
            <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li @if($title=="Bosh sahifa") class="nav-item active" @else class="nav-item" @endif >
                  <a class="nav-link" href="{{route('home')}}">Bosh sahifa</a>
                </li>
                <li  @if($title=="Biz haqimizda") class="nav-item active" @else class="nav-item" @endif>
                  <a class="nav-link" href="{{route('about_us')}}">Biz hqimizda</a>
                </li>
                <li  @if($title=="Yangiliklar") class="nav-item active" @else class="nav-item" @endif>
                    <a class="nav-link" href="{{route('news')}}">Yangiliklar</a>
                  </li>
                <li  @if($title=="Testlar") class="nav-item active" @else class="nav-item" @endif>
                    <a class="nav-link" href="{{route('freeTests')}}">Testlar</a>
                  </li>
                <li @if($title=="Bog`lanish") class="nav-item active" @else class="nav-item" @endif>
                  <a class="nav-link" href="{{route('contact')}}">Bog'lanish </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Menu Area =================-->
