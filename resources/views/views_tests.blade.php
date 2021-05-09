<?php
$title="Testlar";
?>
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

    <!--================ End Header Menu Area =================-->



<br>
<style>
body {
    background-color: #eee
}

label.radio {
    cursor: pointer
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio span {
    padding: 4px 0px;
    border: 1px solid red;
    display: inline-block;
    color: red;
    width: 100px;
    text-align: center;
    border-radius: 3px;
    margin-top: 7px;
    text-transform: uppercase
}

label.radio input:checked+span {
    border-color: red;
    background-color: red;
    color: #fff
}

.ans {
    margin-left: 36px !important
}

.btn:focus {
    outline: 0 !important;
    box-shadow: none !important
}

.btn:active {
    outline: 0 !important;
    box-shadow: none !important
}
.card-body{
    padding:50px;
    margin: 5px;
    text-align: center;
    background-color: rgba(120, 195, 230, 0.336);
}
</style>
<?php
$i=0;
// $items=$tests;
?>

<div class="card-body">
    <h5 class="card-title">Matematika</h5>
    <p class="card-text"></p>

    <form name="form_main">
        <div>
          <span id="hour">00</span>:<span id="minute">00</span>:<span id="second">00</span>
        </div>

        <br />

        <button type="button" name="start">start</button>
        <button type="button" name="pause">pause</button>
        <button type="button" name="reset">reset</button>
      </form>


  </div>
<form method="POST" action="{{route('ansver')}}">
  @csrf
@foreach($tests as $test)
<?php
$a= array(1,2,3,4);
shuffle($a);
?>


    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10 col-lg-10">
                <div class="border">
                    <div class="question bg-white p-3 border-bottom">
                        <div class="d-flex flex-row justify-content-between align-items-center mcq">
                            <h4>EduQuiz</h4><span>({{$i+1}} of {{$issue}})</span>
                        </div>
                    </div>
                    <div class="question bg-white p-3 border-bottom">
                        @if(is_null($test->quiz_img)===true)
                        <div><img width="100%" height="50%" src="{{asset('img/banner/banner.jpg')}}"></div>
                        @endif
                        <div class="d-flex flex-row align-items-center question-title">

                            <h3 class="text-danger">S. </h3>
                            <p class="mt-1 ml-2">{{$test->query}}<p>
                        </div>
                        <div class="ans ml-2">

                            <label ><input type="radio" name="savol{{$i}}" value="{{$a[0]}}" > A. <span>{{$test['ansver_'.$a[0]]}}</span>
                            </label>
                        </div>
                        <div class="ans ml-2">
                            <label > <input type="radio" name="savol{{$i}}" value="{{$a[1]}}"> B. <span>{{$test['ansver_'.$a[1]]}}</span>
                            </label>
                        </div>
                        <div class="ans ml-2">
                            <label > <input type="radio" name="savol{{$i}}" value="{{$a[2]}}"> C. <span>{{$test['ansver_'.$a[2]]}}</span>
                            </label>
                        </div>
                        <div class="ans ml-2">
                            <label > <input type="radio"  name="savol{{$i}}" value="{{$a[3]}}"> D. <span>{{$test['ansver_'.$a[3]]}}</span>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white"></div>
                </div>
            </div>
        </div>
    </div>
    <?php $i++;?>
@endforeach



<div class="card-body">
    <h5 class="card-title">{{$issue}} talik test</h5>
    <p class="card-text">barchasini yakunlab javoblarni olish</p>
    <div > <button class="genric-btn primary" placeholder="yuborish" type="submit"> yuborish</button></div>
  </div>
  <br>
</form>
<script>
    let hour = 0;
let minute = 0;
let second = 0;
let millisecond = 0;

let cron;

document.form_main.start.onclick = () => start();
document.form_main.pause.onclick = () => pause();
document.form_main.reset.onclick = () => reset();
function start() {
  pause();
  cron = setInterval(() => { timer(); }, 10);
}

function pause() {
  clearInterval(cron);
}

function reset() {
  hour = 0;
  minute = 0;
  second = 0;
  millisecond = 0;
  document.getElementById('hour').innerText = '00';
  document.getElementById('minute').innerText = '00';
  document.getElementById('second').innerText = '00';
  document.getElementById('millisecond').innerText = '000';
}
function timer() {
  if ((millisecond += 10) == 1000) {
    millisecond = 0;
    second++;
  }
  if (second == 60) {
    second = 0;
    minute++;
  }
  if (minute == 60) {
    minute = 0;
    hour++;
  }
  document.getElementById('hour').innerText = returnData(hour);
  document.getElementById('minute').innerText = returnData(minute);
  document.getElementById('second').innerText = returnData(second);
  document.getElementById('millisecond').innerText = returnData(millisecond);
}

function returnData(input) {
  return input > 10 ? input : `0${input}`
}


</script>

<script src="{{asset('math/es5/tex-mml-chtml.js')}}"></script>
      <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
      <script src="{{asset('js/popper.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}" ></script>
      <script src="{{asset('vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
      <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
      <script src="{{asset('js/owl-carousel-thumb.min.js')}}"></script>
      <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
      <script src="{{asset('js/mail-script.js')}}"></script>
      <!--gmaps Js-->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
      <script src="{{asset('js/gmaps.min.js')}}"></script>
      <script src="{{asset('js/theme.js')}}"></script>
    </body>
  </html>


