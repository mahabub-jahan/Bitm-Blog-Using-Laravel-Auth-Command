@extends('admin.master')
@section('content')
    <div class="row">
        <br>
        <div class="col-sm-12">
            <div class="well">

                @if($message = Session::get('message'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @endif

                <form action="{{ url('/blog/new-blog')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Blog Title</label>
                        <input name="blog_title" type="text" class="form-control" id="exampleInputEmail1">
                        <small id="emailHelp" class="form-text text-danger">{{ $errors->has('blog_title') ? $errors->first('blog_title') : '' }}</small>
                    </div>



                    <div class="form-group">
                        <label for="categoryName">Category Name</label>
                        <select name="category_id" class="form-control">
                            <option value="">--Select Category Name--</option>

                            @foreach($publishedCategories as $publishedCategory)
                                <option value="{{ $publishedCategory->id }}">{{ $publishedCategory->category_name }}</option>
                            @endforeach

                        </select>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">Blog Description</label>
                        <textarea name="blog_description" class="form-control" rows="6"></textarea>
                    </div>


                    <div class="form-group">
                        <label for="image">Blog Image</label>
                        <input name="blog_image" type="file" accept="image/*" class="form-control" id="image">
                    </div>


                    <div class="form-group">
                        <select name="publication_status" class="form-control">
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="btn" class="btn btn-success">Submit</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection