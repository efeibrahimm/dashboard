<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function index()
    {

        return view('dashboard.blogs');
    }
    public function data()
    {
        $blogs = Blog::get();
        $data = [];
        foreach ($blogs as $blog) {
            $data[] =
                [
                    'id' => $blog->id,
                    'title' => $blog->title,
                    'description' => $blog->description,
                    'summary' => $blog->summary,
                    'keyword' => $blog->keyword,
                    'created_at' => $blog->created_at->format('Y-m-d'),
                    'slug' => $blog->slug
                ];
        }

        return $data;
    }
    public function createBlog(Request $request)
    {

        if ($request->id) {
            $blog = Blog::find($request->id)->first();
        } else {
            $blog  = new Blog;
        }


        $blog->title = $request->title;
        $blog->description = isset($request->description) ? $request->description : '';
        $blog->summary = $request->summary;
        $blog->keyword = isset($request->keyword) ? $request->keyword : '';
        $blog->slug = Str::slug($request->title);
        $blog->image = $request->file('image')->store('images');

        $blog->save();
    }

    public function deleteBlog($id){

        $blog = Blog::find($id);

        $blog->delete();
    }
}
