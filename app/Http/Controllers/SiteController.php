<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Post;
use App\Quiz;
use App\Category;
use App\Contact;
class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::orderBy('id','desc')->limit('4')->get();
        return view('index', compact('posts'));
    }

    public function about()
    {
       return view('about');
    }
    public function news()
    {
        $news=Post::latest()->paginate(5);
        $links=$news->links();
        return view('blog', compact('news','links'));
    }

    public function newsMore($id)
    {
        $new=Post::findOrFail($id);
        $new->increment('views');
        return view('news_more',compact('new'));
    }
    public function contact(){

        return view('contact_us');
    }

    public function contact_us(Request $request){
        $this->validate($request,[
                'name'=>'required',
                'email'=>'required',
                'subject'=>'required',
                'message'=>'required'
        ]);

        $contact=new Contact([
            'name'=>$request->post('name'),
            'email'=>$request->post('email'),
            'subject'=>$request->post('subject'),
            'message'=>$request->post('message'),
            'report'=>false
        ]);
        $contact->save();
        return redirect()->back()->with('success','Xabar muofaqiyatli jo`natildi');
    }

    public function tests(){
        $category=Category::all();
        return view('free_tests', compact('category'));
    }

    public function search(Request $request){
        // $key=$request->get('key');
        // $key='%'.trim($key).'%';
        // $results=Post::where('name','LIKE',$key)
        //             ->orWhere('subject','LIKE',$key)
        //             ->orWhere('title','LIKE',$key)
        //             ->paginate(10);
        //         $links=$results->links();
                // dd($results);
                $key = $request->get('key');
        $key = '%'.trim($key).'%';
        $results = Post::where('name', 'LIKE', $key)
                       ->orWhere('subject', 'LIKE', $key)
                       ->orWhere('title', 'LIKE', $key)
                       ->paginate(10);
        // dd($results->toSql()
        $links = $results->links();
       return view('search', compact('results','links'));
    }

    public function testsShow(Request $request){

           $id_cat=$request->post('id_cat');
           $issue=$request->post('issue');
           $model= Category::findOrFail($id_cat);
           $tests=$model->quizs;
            return view('views_tests', compact('tests','issue'));
    }
    public function ansver(Request $request){

         $a=0;
        for($i=1; $i<=4; $i++){
            if($b=$request->get('savol'.$i)==3){
               $a=$a+1;}
        }
              dd($a);
    }

}
