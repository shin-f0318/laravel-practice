<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;

class ContentsapiController extends Controller
{
    public function index () {
        $contents=Content::all();
        return $contents;
    }
}
