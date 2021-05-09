@include('admin.app.admin_header')


<div class="row" style="margin: 10px">
	<div class="col-lg-12">
		<div class="panel panel-default">
            <div class="panel panel-default">
				<div class="panel-heading">{{$feedback->name}}</div>
					<div class="panel-body">
                        <div style="displey: flex;">
                      <div> <b>{{$feedback->subject}}</b></div>
                      <br>
                      <div style="padding-left: 50px; padding-right:50px"> {{$feedback->message}} </div>
                      <hr>
                      <div style="text-align: right; padding-right:50px"> {{$feedback->created_at->format("Y/m/d H:m")}}</div>

                    </div>

                    </div>
            </div>
        </div>
    </div>
</div>
<div style="text-align: right; padding-right:50px; margin:20px;">
    <a href="{{route('admin.feedback.index')}}" class="btn btn-sm btn-primary">qaytish</a>
</div>
@include('admin.app.admin_footer')
