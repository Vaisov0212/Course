

@include('admin.app.admin_header')
{{-- <link rel="stylesheet" href="{{asset('css/style.css')}}" /> --}}
<style>
    .nav-link {
                 padding: 2px;
                 margin: 2px;

    }
    .salom:hover {
        background-color: red;
        color:WHITE;
    }

</style>
<div class="row">
	<div class="col-lg-12">
        @if(session()->has('success'))
        <div class="alert bg-success" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>
                {{session()->get('success')}}
               </div>

        @endif
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-lg-12">
        @if(session()->has('delete'))
        <div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>
                {{session()->get('delete')}}
        </div>
        @endif
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
            <div class="panel panel-default">
				<div class="panel-body">
                    <div style="padding: 10px margin:10px; display:flex">
                        <form  method="GET" action="{{route('admin.free-tests.index')}}">
                            @csrf
                            <select name="category" class="btn btn-sm btn-default" style="padding: 10px; " >
                               @foreach($category as $item)
                                <option  @if($item->id==$model->id)) selected  @endif value="{{$item->id}}"> {{$item->name}} </option>
                                @endforeach
                              </select>
                            <button type="submit" class="btn btn-sm btn-success" style="padding: 10px; margin-left:5px">Ok</button>
                         </form>
                         <a style="margin-left:30px" href="{{route('admin.free-tests.create')}}" class="btn btn-sm btn-primary" ><i style="padding: 5px;" class="fa fa-pencil"></i>qo'shsish</a>
                    </div>
                </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <th width="100px">Rasm</th>
                    <th>Savol</th>
                    <th>to'g'ri javob</th>
                    <th>1-varyant</th>
                    <th>2-varyant</th>
                    <th>3-varyant</th>
                    <th width="40px">qo'shilgan vaqti</th>
                    <th width="120px" >Amallar</th>
                </thead>
                    <tbody>
                    @foreach($lists as $list)
                    <tr>
                        <td>
                            <img class="img img-thumbnail" width="80px" src="../upload/tests/{{$list->quiz_img }}" alt="Rasm topilmadi!">
                        </td>
                        <td>{{$list->query}}</td>
                        <td>{{$list->ansver_1}}</td>
                        <td>{{$list->ansver_2}}</td>
                        <td>{{$list->ansver_3}}</td>
                        <td>{{$list->ansver_4}}</td>
                        <td>{{$list->created_at->format("Y/m/d H:i")}}</td>
                        <td>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default" style="display: flex; ">
                                        <a style="margin-right: 5px; " class="btn btn-sm btn-success"  href="{{route('admin.free-tests.show', $list->id)}}" ><i class="fa fa-bars"></i></a>
                                        <a style="margin-right: 5px;" class="btn btn-sm btn-warning" href="{{route('admin.free-tests.edit', $list->id)}}"><i class="fa fa-edit"></i></a>
                                        <form  method="POST" action="{{route('admin.free-tests.destroy',$list->id)}}" >
                                            @csrf
                                            @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" id="onDelete" name="button-1" aria-required="false"><i class="fa fa-trash"></i></button>
                                           </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$links}}
        </div>
    </div><!-- /.panel-->
</div><!-- /.col-->

<script src="{{asset('math/es5/tex-mml-chtml.js')}}"></script>

@include('admin.app.admin_footer')

