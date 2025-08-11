<?php

namespace App\Http\Controllers;

use App\Models\Blog;


class ThemeController extends Controller
{

    public function index()
    {
        return view('theme.index');
    }
    public function courses()
    {
        return view('theme.courses');
    }
    public function about()
    {
        return view('theme.about');
    }
    public function contact()
    {
        return view('theme.contact');
    }
   public function blog()
    {
        $blogs = Blog::paginate(2);
        return view('theme.blog', compact('blogs'));
    }

    public function blogsByCategory($id)
    {
        $blogs = Blog::where('category_id', $id)->paginate(2);
        return view('theme.blog', compact('blogs'));
    }

    public function blog_details($id)
    {
        return view(view: 'theme.blog_details');
    }
}
