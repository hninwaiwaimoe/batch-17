<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        //dd($items);
        return view('Backend.Category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('Backend.Category.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "name" => 'required',
            "photo" => 'required | mimes:jpg,jpeg,png,gif,svgl max:2048'
        ]);
        //if include file.upload file
        $imageName = time().'.'.$request->photo->extension();

        // $request->photo->move(.$imageName);

        $request->photo->move(public_path('backend/categoryimg'),$imageName);

        $path = 'backend/categoryimg/'.$imageName;

        //datainsert

        $category =new Category;
        $category->name = $request->name;
        $category->photo = $path;
        $category->save();

        //redirect
        return redirect()->route('categories.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
                        return view('Backend.Category.edit',compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            "name" => 'required',
            "photo" => 'sometimes',
            "oldphoto" => 'required',
        ]);
        //update file
        if($request->hasFile('photo')){
            //if include file.upload file
        $imageName = time().'.'.$request->photo->extension();

        // $request->photo->move(.$imageName);

        $request->photo->move(public_path('backend/categoryimg'),$imageName);

        $path = 'backend/categoryimg/'.$imageName;

        }else{
            $path=$request->oldphoto;
        }
        //data update
        //no new update
        $category->name = $request->name;
        $category->photo = $path;

        $category->save();

        //redirect
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
