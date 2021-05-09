

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
        <div class="panel-heading">Testlarni qo'shish</div>
        <div class="panel-body">

                <form enctype="multipart/form-data" method="POST" action="{{route('admin.free-tests.store')}}" >
                    @csrf

                    <div class="form-group">
                        <label>rasm yuklash</label>
                        <input class="btn btn-sm btn-default" type="file" name="quiz_img">
                        <p class="help-block">joriy rasm xajimi 2mb dan oshmasliki zarur</p>
                    </div>
                    <div class="form-group">
                        <label>Savol matni</label>
                    <select name="id_cat" class="form-control" >

                       @foreach($category as $item)
                        <option  value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                      </select>
                    </div>


                    <div class="form-group">
                        <label>Savol matni</label>
                        <textarea class="form-control" name="query" rows="3" required=''></textarea>
                    </div>

                    <div class="form-group">
                        <label>to'g'ri javob</label>
                        <input type="text" class="form-control" placeholder="to`g`iri javob" name="ansver_1" required=''>
                    </div>
                    <div class="form-group">
                        <label>1-varyantlr</label>
                        <input class="form-control" placeholder="1-varyant" name="ansver_2" required=''>
                    </div>

                    <div class="form-group">
                        <label>2-varyantlar</label>
                        <input type="text" class="form-control" placeholder="2-varyant" name="ansver_3" required=''>
                    </div>
                    <div class="form-group">
                        <label>3-varyant</label>
                        <input class="form-control" placeholder="3-varyant" name="ansver_4" required=''>
                    </div>

                    <div class="col-md-6">
                        <button  type="submit" class="btn btn-primary" >saqlash</button>
                    </div>

                </form>

        </div>
    </div><!-- /.panel-->
</div><!-- /.col-->

@include('admin.app.admin_footer')

