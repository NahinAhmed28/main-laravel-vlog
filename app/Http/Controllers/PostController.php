<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public $postModel;
    public $categoryModel;
    public function __construct(Post $post,Category $category )
    {

        $this->postModel = $post;
        $this->categoryModel = $category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'posts' =>$this->postModel->get(),
            'categories' =>  $this->categoryModel->get()
        ];
        return view('admin.posts.index', $data) ;


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'categories' =>  $this->categoryModel->get(['id','title']),
        ];
        return view('admin.posts.create', $data );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'image' => 'mimes:jpeg,bmp,png'
        ]);

        $value = $this->postModel->create([
            'title' => $request->title,
            'description' => $request->description,
            'file_path' => $request->title,
            'category_id' => $request->category_id,
        ]);
        if ($value) {
            return redirect()->route('posts.index');
        } else {
            return redirect()->route('posts.create');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function newPost(){
        $data = [
            'posts' =>$this->postModel->get(),
            'categories' =>  $this->categoryModel->get()
        ];
        return view('user.posts.index', $data) ;
    }
}
