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

                <form name="editCategoryForm" action="{{ url('/category/update-category/'.$category->id)}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input name="category_name" value="{{ $category->category_name }}" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Category Description</label>
                        <textarea name="category_description" class="form-control" rows="3">{{ $category->category_description }}</textarea>
                    </div>

                    <div class="form-group">
                        <select name="publication_status" class="form-control">
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="btn" class="btn btn-success">Update</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
    <script>
        document.forms['editCategoryForm'].elements['publication_status'].value = '{{ $category->publication_status }}';
    </script>


@endsection