<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public $categoryModel;
    public function __construct(Category $category)
    {

        $this->categoryModel = $category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $categories = $this->categoryModel->get();
        return view('admin.categories.index',compact('categories'));

    }
 public function userIndex()
    {
        $categories = $this->categoryModel->get();
        return view('user.categories.index',compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $request->validate([
                'file_path' => 'mimes:jpeg,bmp,png'
            ]);

        $imageFileName = null;
        if ($request->hasFile('file_path')){
            $addImageFile = $request->file('file_path');
            $imageFileName = 'add_'.time() . '.' . $addImageFile->getClientOriginalExtension();
            if (!file_exists('uploads/categoryFiles')){
                mkdir('uploads/categoryFiles', 0777, true);
            }
            $addImageFile->move('uploads/categoryFiles', $imageFileName);
        }
//       dd($imageFileName);

            $value = $this->categoryModel->create([
                'title' => $request->title,
                'description' => $request->description,
                'file_path' => $imageFileName,
            ]);
            if ($value) {
                return redirect()->route('categories.index');
            } else {
                return redirect()->route('categories.create');

            }
        }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
public function newCategory(){
    $categories = $this->categoryModel->get();
    return view('user.categories.index',compact('categories'));
        }

}
