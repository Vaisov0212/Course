
		@include('admin.app.admin_header')



    <div class="panel panel-default">
        <div class="panel-heading">Yangiliklarni shu yerda qoshing</div>
        <div class="panel-body">

                <form enctype="multipart/form-data" method="POST" action="{{route('admin.posts.update', $post->id)}}" >
                    @method('PUT')
                     @csrf
                    <div class="form-group">
                        <label>Muallif</label>
                        <input type="text" class="form-control" placeholder="ism,familya" name="name" value="{{$post->name}}">
                    </div>
                    <div class="form-group">
                        <label>Mavzu</label>
                        <input class="form-control" placeholder="yangilik mavzusi" name="subject" value="{{$post->subject}}">
                    </div>


                    <div class="form-group">
                        <label>To'la matni</label>
                        <textarea class="form-control" name="title" rows="3" >{{$post->title}}</textarea>
                    </div>
                    <div class="form-group">
                            <label>rasm yuklash</label>
                        <input class="btn btn-sm btn-default" type="file" name="select_file"  value="{{$post->subject}}" >
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

