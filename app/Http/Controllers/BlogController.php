<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost; // Import the BlogPost model

class BlogController extends Controller
{
    /**
     * Display the blog page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = BlogPost::all(); // Fetch all blog posts
        return view('blog', compact('posts'));
    }

    /**
     * Display a specific blog post.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $post = BlogPost::findOrFail($id); // Fetch the blog post by ID or fail
        return view('blog.show', compact('post'));
    }
}
