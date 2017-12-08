<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return view('admin.category.add-category');
    }


    public function saveCategoryInfo(Request $request)
    {
        /* $category = new Category();
         $category->category_name = $request->category_name;
         $category->category_description = $request->category_description;
         $category->publication_status = $request->publication_status;
         $category->save();*/

//        Category::create($request->all());


        \DB::table('categories')->insert([
            'category_name' => $request->category_name,
            'category_description'=> $request->category_description,
            'publication_status' => $request->publication_status,
            'created_at' => now(),
            'updated_at' => now()

        ]);

        return redirect('/category/add-category')->with('message','Category info add successfully');
    }









    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
