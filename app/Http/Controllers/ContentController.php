<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;


class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::all();
        return view('home.home', compact('contents'));
    }
    
    public function content()
    {
        $contents = Content::all();
        return view('content.content', compact('contents'));
    }
}
