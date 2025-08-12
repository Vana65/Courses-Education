<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\UpdateBlogRequest;
use App\Http\Requests\StoreBlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('theme.blogs.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $data=  $request->validated();
        $image = $request->image;
        $newImageName = time() . '-' . $image->getClientOriginalName();
        $path = $request->file('image')->storeAs('blogs', $newImageName, 'public');
        $data['image'] = $newImageName;
        $data['user_id'] = Auth::user()->id;
        Blog::create($data);
        return back()->with("blogCreateStatus", "Blog Added Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        if ($blog->user_id == Auth::user()->id) {
            $categories = Category::get();
        return view('theme.blogs.edit', compact('categories', 'blog'));
        }
        else{
            abort(403);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        if ($blog->user_id == Auth::user()->id) {
            $data = $request->validated();
            if ($request->hasFile('image')) {
                Storage::delete("public/blogs/ $blog->image");

                $image = $request->image;
                $newImageName = time() . '-' . $image->getClientOriginalName();
                $path = $request->file('image')->storeAs('blogs', $newImageName, 'public');
                $data['image'] = $newImageName;
            }
            $blog->update($data);
            return back()->with("blogUpdateStatus", "Blog Updated Successfully");
        }
        else{
            abort(403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if ($blog->user_id == Auth::user()->id) {

            Storage::delete("public/blogs/ $blog->image");
            $blog->delete();
            return back()->with("blogDeleteStatus", "Blog Deleted Successfully");
        }
        else{
            abort(403);
        }
    }
     public function myBlogs()

    {
        $blogs = Blog::where('user_id', Auth::user()->id)->paginate(10);
        return view('theme.blogs.my_blogs', compact('blogs'));
    }
}