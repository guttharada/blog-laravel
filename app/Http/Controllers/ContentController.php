<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Http\Requests\ContentRequest;


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
    
    public function store(ContentRequest $request)
    {
        $content = new Content();
        $content->topic = $request->input('topic');
        $content->description = $request->input('description');
        $content->tags = $request->input('tags');
        $content->user_id = 1;
        $content->save();

        return redirect()->back()->with('success', 'Content created successfully.');
    }
}
