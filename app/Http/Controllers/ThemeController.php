<?php

namespace App\Http\Controllers;


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
        if (auth()->check()) {
            return view('theme.blog');
        }
        else {
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