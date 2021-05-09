
@include('admin.app.admin_header')

<style>
body {
    /* background-color: rgba(160, 189, 180, 0.836) */
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

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading"><p> turi: {{$category->name}} lar uchun test</p></div>
      <div class="panel-body">
        <div class="col-md-12">
          <div  class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-10 col-lg-10">
                    <div class="border">
                        <div class="question bg-white p-3 border-bottom">
                            <div class="d-flex flex-row justify-content-between align-items-center mcq">
                                <h4 class="text-danger">EduQuiz</h4><span></span>
                            </div>
                        </div>
                        <div class="question bg-white p-3 border-bottom">
                                    @if($test->quiz_img!=" ")
                            <div><img width="100%" height="50%" src="{{asset('/upload/tests/'.$test->quiz_img)}}"></div>
                                @endif
                            <div class="d-flex flex-row align-items-center question-title" >
                                <h5 class="text-danger">Savaol:  {{$test->query}} </h5>
                            </div>
                            <br>
                            <div class="mt-1 ml-2">
                               <p>1. {{$test->ansver_1}}</p>
                            </div>
                            <div class="mt-1 ml-2">
                                <p>2. {{$test->ansver_2}}</p>
                             </div>
                             <div class="mt-1 ml-2">
                                <p>3. {{$test->ansver_3}}</p>
                             </div>
                             <div class="mt-1 ml-2">
                                <p>4. {{$test->ansver_4}}</p>
                             </div>
                        </div>
                        <br>
                        <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white"></div>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </div>
   </div>
</div>
</div>


    @include('admin.app.admin_footer')
