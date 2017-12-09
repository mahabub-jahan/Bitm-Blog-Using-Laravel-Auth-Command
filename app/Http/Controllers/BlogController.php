<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    public function manageBlogInfo(){
        $blogs = Blog::all();
        return view('admin.blog.manage-blog',compact('blogs'));
    }

    public function addBlogInfo()
    {
        $publishedCategories = Category::where('publication_status',1)->get();
        return view('admin.blog.add-blog',['publishedCategories' => $publishedCategories]);
    }


    public function create()
    {
        //
    }


    public function saveBlogInfo(Request $request)
    {
        $this->validate($request,[
           'blog_title' => 'required'
        ]);

        $blogImage = $request->file('blog_image');
        $imageName = substr(md5(time()),'0','10');
        $imageName = $imageName.'.'.$blogImage->getClientOriginalExtension();
        $directory = 'admin/images/';
        $blogImage->move($directory,$imageName);
        $imageUrl = $directory.$imageName;



        $blog = new Blog();
        $blog->blog_title = $request->blog_title;
        $blog->author_name = Auth::user()->name;
        $blog->category_id = $request->category_id;
        $blog->blog_description = $request->blog_description;
        $blog->blog_image = $imageUrl;
        $blog->publication_status = $request->publication_status;
        $blog->save();
        return redirect('/blog/manage-blog')->with('message','Blog info add successfully');

    }


    public function show(Blog $blog)
    {
        //
    }


    public function edit(Blog $blog)
    {
        //
    }


    public function update(Request $request, Blog $blog)
    {
        //
    }


    public function deleteBlogInfo($id)
    {
        $blog = Blog::find($id);
        $blog = $blog->blog_image;
        if(isset($blog)){
            unlink($blog);
        }
        Blog::destroy($id);

        return redirect('/blog/manage-blog')->with('destroy','Blog info Deleted successfully');
    }
}
