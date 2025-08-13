<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request)
    {

        $data = $request->validated();
    Comment::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'blog_id' => $data['blog_id'],
        'message' => $data['message'],
    ]);
    return back()->with("CommentCreateStatus", "Blog Comment Added Successfully");

    }
}