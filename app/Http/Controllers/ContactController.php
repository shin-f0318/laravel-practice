<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use Illuminate\Support\Facades\Auth;


class ContactController extends Controller {
    
    // public function __construct(){
    //     $this->middleware('auth')->except('practice.contact');
        
    // }

    public function index() {
        // $contents = Auth::user()->contents;
 
        //  return view('practice.index', compact('contents'));
        $contents = Content::get();
        return view('practice.index', compact('contents'));
    }

    public function contact() {
        return view('practice.contact');
    }
    public function confirm() {
        return view('practice.confirm');
    }

    public function store(Request $request) {
        $contents = new Content();
        $contents->name = $request->input('name');
        $contents->hurigana = $request->input('hurigana');
        $contents->email = $request->input('email');
        $contents->tel = $request->input('tel');
        $contents->message = $request->input('message');
        $contents->contact = $request->input('contact');
        // $contents->user_id = Auth::id();
        $contents->save();
        $show_content = Content::find($contents->id);
        return view('practice.confirm', compact('show_content'));
    }
    // 更新ページ
    public function edit(Content $content) {
        return view('practice.edit', compact('content'));
    }

    public function update(Request $request, Content $content) {
        
        $content->name = $request->input('name');
        $content->hurigana = $request->input('hurigana');
        $content->email = $request->input('email');
        $content->tel = $request->input('tel');
        $content->message = $request->input('message');
        $content->contact = $request->input('contact');
        $content->user_id = Auth::id();
        $content->save();
        // $contents = Content::get();
        // return view('practice.index', compact('contents'));
        // return redirect()->route('practice.index');
        return redirect('/practice/index');
    }

    public function destroy(Request $request, Content $content) {
        // dd($content);
        $content->delete();
        return redirect('/practice/index');
    }

}
