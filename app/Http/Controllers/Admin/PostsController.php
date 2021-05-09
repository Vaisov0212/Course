<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManagerStatic;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{

    public function index()
    {
        $posts=Post::latest()->paginate(15);
        $links=$posts->links();
        return view('admin/posts/index',compact('posts','links'));
    }

    public function create()
    {
        return view('admin/posts/create');
    }


    public function store(Request $request)
    {
           $this->validate($request,[
               'name'=>'required',
               'subject'=>'required',
               'title'=>'required',
                'select_file'=>'required|file|mimes:jpeg,jpg,png'

           ]);
          //  image upload
           $new_name="images".microtime().".jpg";
           $img=Image::make($request->file('select_file'));

          //  images watermake
            $watermark = Image::make('logo.png');

            $img->insert($watermark, 'bottom-right');
            $img->save('upload/posts/'.$new_name);

            //image resize
          $img->fit(360, 280, function($constraint){
            $constraint->aspectRatio();
        })->save('upload/thumb/'.$new_name);

        $post=new Post([
             'name'=>$request->post('name'),
             'subject'=>$request->post('subject'),
             'title'=>$request->post('title'),
             'img'=>$new_name,
             'views'=>0
        ]);
      $post->save();
      return redirect()->route('admin.posts.create')->with('success','Muofaqiyatli qo`shildi...');
    }

    public function edit($id){
          $post=Post::FindOrFail($id);
        return view('admin.posts.edit',compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post= Post::findOrFail($id);
               $this->validate($request,[
                  'name'=>'required',
                  'subject'=>'required',
                  'title'=>'required'
               ]);

               if($request->file('select_file')){
                Storage::disk('public')->delete('/upload/posts'.$post->img);
                Storage::disk('public')->delete('/upload/thumb'.$post->img);

                  //  image upload
           $new_name="images".microtime().".jpg";
           $img=Image::make($request->file('select_file'));

          //  images watermake
            $watermark = Image::make('logo.png');

            $img->insert($watermark, 'bottom-right');
            $img->save('upload/posts/'.$new_name);

            //image resize
          $img->fit(360, 280, function($constraint){
            $constraint->aspectRatio();
        })->save('upload/thumb/'.$new_name);

        }
        else{
             $new_name=$post->img;
            }

            $views=$post->views;
            $post->update([
                    'name'=>$request->post('name'),
                    'subject'=>$request->post('subject'),
                    'title'=>$request->post('title'),
                    'img'=>$new_name,
                    'views'=>$views
            ]);
            return redirect()->route('admin.posts.index')->with('success','Maqola muofaqiyatli yangilandi');
    }

    public function destroy($id)
    {
        $model=Post::findOrFail($id);
        $model->delete();
        return redirect()->back()->with('delete','O`chirildi...');
    }


    public function views()
    {

       return view('admin/posts/views');
    }





}
