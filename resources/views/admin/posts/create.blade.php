
		@include('admin.app.admin_header')



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

                            <div class="alert bg-success" role="alert">
                            {{\Session::get('success')}}
                            </div>
                            @endif
                        </div>
                    </div><!--/.row-->

				<div class="panel panel-default">
					<div class="panel-heading">Yangiliklarni shu yerda qoshing</div>
					<div class="panel-body">

							<form enctype="multipart/form-data" method="POST" action="{{route('admin.posts.store')}}" >
                                @csrf
								<div class="form-group">
									<label>Muallif</label>
									<input type="text" class="form-control" placeholder="ism,familya" name="name" required=''>
								</div>
                                <div class="form-group">
									<label>Mavzu</label>
									<input class="form-control" placeholder="yangilik mavzusi" name="subject" required=''>
								</div>


								<div class="form-group">
									<label>To'la matni</label>
									<textarea class="form-control" name="title" rows="3" required=''></textarea>
								</div>
                                <div class="form-group">
									<label>rasm yuklash</label>
									<input class="btn btn-sm btn-default" type="file" name="select_file" required=''>
									<p class="help-block">joriy rasm xajimi 2mb dan oshmasliki zarur</p>
								</div>

								<div class="col-md-6">
									<button  type="submit" class="btn btn-primary" >saqlash</button>
								</div>

							</form>

					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->

            @include('admin.app.admin_footer')

