<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Quiz;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManagerStatic;
// use Image;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Mockery\Undefined;

class FreeTestsController extends Controller
{
    public function index(Request $request)
    {
        $cat=$request->get('category');
        if(is_null($cat)){
            $cat=1;
        }
        $model=Category::findOrFail($cat);
        $category=Category::all();
        $lists=$model->quizs()->paginate(10);
        // dd($lists);
        $links=$lists->links();

        return view('admin.free_tests.index',compact('lists','category','links','model'));
    }

    public function show($id){
        $test=Quiz::findOrFail($id);
        $category=$test->category;
        return view('admin.free_tests.show', compact('test','category'));

    }

    public function create()
    {

        $category=Category::all();
        // dd($category->id);
        return view('admin.free_tests.create', compact('category'));
    }

    public function store(Request $request){

           $this->validate($request,[
                 'id_cat'=>'required',
                 'query'=>'required',
                 'ansver_1'=>'required',
                 'ansver_2'=>'required',
                 'ansver_3'=>'required',
                 'ansver_4'=>'required'

           ]);

           if(is_null($request->file('quiz_img'))){
               $new_name=" ";
           }
           else{
                //  image upload
           $new_name="images".microtime().".jpg";
           $img=Image::make($request->file('quiz_img'));

          //  images watermake
            $watermark = Image::make('logo.png');

            $img->insert($watermark, 'bottom-right');
            $img->save('upload/tests/'.$new_name);
           }

           $quizs=new Quiz([
            'id_cat'=>$request->post('id_cat'),
            'query'=>$request->post('query'),
            'ansver_1'=>$request->post('ansver_1'),
            'ansver_2'=>$request->post('ansver_2'),
            'ansver_3'=>$request->post('ansver_3'),
            'ansver_4'=>$request->post('ansver_4'),
            'quiz_img'=>$new_name,
           ]);
           $quizs->save();

            return redirect()->route('admin.free-tests.create')->with('success','muvofaqiyatli qo`shildi');
    }


    public function edit($id){
       $quiz=Quiz::findOrFail($id);
       $category=Category::all();

       return view('admin.free_tests.edit', compact('quiz','category'));

    }

    public function update(Request $request,$id){
        $quiz=Quiz::findOrFail($id);
        $this->validate($request,[
              'query'=>'required',
              'ansver_1'=>'required',
              'ansver_2'=>'required',
              'ansver_3'=>'required',
              'ansver_4'=>'required'
        ]);

        if($request->file('quiz_img')){

            if(Storage::delete('/storage/app/public/upload/tests'.$quiz->quiz_img)){
                dd($quiz->quiz_img);
            }


        $new_name="images".microtime().".jpg";
        $img=Image::make($request->file('quiz_img'));
        $watermark=Image::make('logo.png');
        $img->insert($watermark, 'bottom-right');
        $img->save('upload/tests/'.$new_name,90);
        }
        else{
            $new_name=$quiz->quiz_img;
        }
        $quiz->update([
            'query'=>$request->post('query'),
            'ansver_1'=>$request->post('ansver_1'),
            'ansver_2'=>$request->post('ansver_2'),
            'ansver_3'=>$request->post('ansver_3'),
            'ansver_4'=>$request->post('ansver_4'),
            'quiz_img'=>$new_name,
            'id_cat'=>$request->post('id_cat')
        ]);

        return redirect()->route('admin.free-tests.index')->with('success','muofaqiyatli yangilandi.!');

    }

    public function destroy($id){
        $quiz=Quiz::findOrFail($id);
        $quiz->delete();
        return redirect()->back()->with('delete','muofaqiyatli o`chirildi.!');
    }

     public function add(){
         return view('admin.free_tests.views');
     }



}

