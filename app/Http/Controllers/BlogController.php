<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index(){

        return view('dashboard.blogs');
    }
    public function data(){
        $blogs = Blog::get();
        $data = [];
        foreach($blogs as $blog){
            $data [] =
             [
                'id'=>$blog->id,
                'title'=>$blog->title,
                'description'=> $blog->description,
                'summary'=> $blog->summary,
                'keyword'=> $blog->keyword,
                'created_at' =>$blog->created_at->format('Y-m-d'),
                'slug' => $blog->slug
            ];
        }

        return $data;
    }
}
