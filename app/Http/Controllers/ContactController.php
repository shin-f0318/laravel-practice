<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
class ContactController extends Controller {
    public function index() {
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
        $contents->save();
        $show_content = Content::find($contents->id);
        return view('practice.confirm', compact('show_content'));
    }
    // 更新ページ
    public function edit(Content $content) {
        return view('practice.edit', compact('content'));
    }
    public function update(Request $request, Content $content) {
        
        $contents->name = $request->input('name');
        $contents->hurigana = $request->input('hurigana');
        $contents->email = $request->input('email');
        $contents->tel = $request->input('tel');
        $contents->message = $request->input('message');
        $contents->contact = $request->input('contact');
        $contents->save();
        
        return redirect('practice.index', $content, compact('contents'));
    }
}
