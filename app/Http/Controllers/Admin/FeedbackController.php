<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Contact;
use Illuminate\Http\Request;
class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks=Contact::latest()->paginate(20);
        $links=$feedbacks->links();
        return view('admin/feedback/index', compact('feedbacks','links'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feedback=Contact::findOrFail($id);
        $feedback->update([
            'report'=>true
        ]);
        return view('admin.feedback.show', compact('feedback'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback=Contact::findOrFail($id);
        $feedback->delete();
        return redirect()->back()->with('delete','O`chirildi...');
    }
}
