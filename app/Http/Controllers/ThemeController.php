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

    if (auth()->check()) {
        return view('theme.blog', compact('blogs'));

    } else {
        return view('Auth.login');
    }
}

    public function blog_details()
    {
        if (auth()->check()) {

            return view(view: 'theme.blog_details');

        }
        else {
            return view('Auth.login');
        }
    }
}
