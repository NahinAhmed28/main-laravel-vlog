<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
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
public function userPost()
    {
        $data = [
            'posts' =>$this->postModel->get(),
            'categories' =>  $this->categoryModel->get()
        ];
        return view('user.posts.index', $data) ;

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
public function userCreate()
    {
        $data = [
            'categories' =>  $this->categoryModel->get(['id','title']),
        ];
        return view('user.posts.create', $data );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $request->validate([
            'file_path' => 'mimes:jpeg,bmp,png'
        ]);

        $imageFileName = null;
        if ($request->hasFile('file_path')){
            $addImageFile = $request->file('file_path');

            $imageFileName = 'add_'.time() . '.' . $addImageFile->getClientOriginalExtension();
            if (!file_exists('uploads/postFiles')){
                mkdir('uploads/postFiles', 0777, true);
            }
            $addImageFile->move('uploads/postFiles', $imageFileName);
        }

        $value = $this->postModel->create([
            'title' => $request->title,
            'description' => $request->description,
            'file_path' => $imageFileName,
            'category_id' => $request->category_id,
        ]);
        if ($value) {
            alert()->success('Post Creat','Post is created Successfully.');
            return redirect()->route('posts.index');
        } else {
            alert()->error('ErrorAlert','Post is failed to create');
            return redirect()->route('posts.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'posts' => $this->postModel->find($id),
            'categories' =>  $this->categoryModel->get(['id','title']),
        ];
        return view('admin.posts.show', $data );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = [
           'posts' => $this->postModel->find($id),
            'categories' =>  $this->categoryModel->get(['id','title']),
        ];
        return view('admin.posts.edit', $data );

    }
//    public function userEdit(Post $post)
//    {
//        $data = [
//            'posts' => $this->postModel->first(),
//            'categories' =>  $this->categoryModel->get(['id','title']),
//        ];
//        return view('user.posts.edit', $data );
//
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $post= $this->postModel->findOrFail($id);


        //upload advertise image
        $imageFileName = $post->file_path;
        if ($request->hasFile('file_path')) {
            $addImageFile = $request->file('file_path');
            $imageFileName = 'add_' . time() . '.' . $addImageFile->getClientOriginalExtension();
            if (!file_exists('uploads/postFiles')) {
                mkdir('uploads/postFiles', 0777, true);
            }
//            //delete old image if exist
            if (file_exists('uploads/postFiles/' . $post->file_path)) {
                unlink('uploads/postFiles/' . $post->file_path);
            }
            $addImageFile->move('uploads/postFiles', $imageFileName);
        }



// end update image
        $value = $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'file_path' => $imageFileName,
            'category_id' => $request->category_id,


        ]);
        if ($value){


            return redirect()->route('posts.index');
        }
        else {

          return  redirect()->route('posts.create');
        }

    }
    public function ratingUpdate( Request $request , $id){
        $post =  Post::find($id);
        $post->rating =  $request->rating;
        $post->update();
        return back();
    }

//    public function postUpdate(Request $request, $id)
//
//    {
//        $post= $this->postModel->findOrFail($id);
//
//
//        //upload advertise image
//        $imageFileName = $post->file_path;
//        if ($request->hasFile('file_path')) {
//            $addImageFile = $request->file('file_path');
//            $imageFileName = 'add_' . time() . '.' . $addImageFile->getClientOriginalExtension();
//            if (!file_exists('uploads/postFiles')) {
//                mkdir('uploads/postFiles', 0777, true);
//            }
////            //delete old image if exist
//            if (file_exists('uploads/postFiles/' . $post->file_path)) {
//                unlink('uploads/postFiles/' . $post->file_path);
//            }
//            $addImageFile->move('uploads/postFiles', $imageFileName);
//        }
//
//
//
//// end update image
//        $value = $post->update([
//            'title' => $request->title,
//            'description' => $request->description,
//            'file_path' => $imageFileName,
//            'category_id' => $request->category_id,
//        ]);
//        if ($value){
//
//
//            return redirect()->route('user.post');
//        }
//        else {
//
//            return  redirect()->route('user.postCreate');
//        }
//    }

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
