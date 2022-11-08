<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
class ContactController extends Controller
{
    public function contact() {
        return view('practice.contact');
    }
    public function confirm() {

        // $sql = 'SELECT * FROM contents';
        // $results = $contents->toarray();
        // $results = App\Content::all();

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
        $show_contents = Content::find($contents->id);
        $results = $show_contents->toarray();
        return view('practice.confirm', compact('results'));
        // return view('practice.confirm', compact('show_contents'));
    }
}
