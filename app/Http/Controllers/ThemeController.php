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
        return view('theme.blog');
    }
    public function blog_details()
    {
        return view('theme.blog_details');
    }
   public function login()
    {
        return view('theme.login');
    }
    public function register()
    {
        return view('theme.register');
    }
}
