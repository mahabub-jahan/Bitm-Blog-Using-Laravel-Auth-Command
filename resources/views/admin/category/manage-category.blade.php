@extends('admin.master')
@section('content')

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tables</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                @if($message = Session::get('message'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @endif

                @if($message = Session::get('destroy'))
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @endif


                <div class="panel panel-default">
                    <div class="panel-heading">
                        DataTables Advanced Tables
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Category ID</th>
                                <th>Category Name</th>
                                <th>Category Description</th>
                                <th>Category Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i = 1;
                            @endphp
                            @foreach($categories as $category)
                            <tr class="odd gradeX">

                                <td>{{ $i++ }}</td>
                                <td>{{ $category->cateogry_name }}</td>
                                <td>{{ $category->category_description }}</td>
                                <td>
                                    {{ $category->publication_status == 1 ? 'Publish' : 'Unpublished'}}</td>
                                <td>
                                    @if($category->publication_status == 1)
                                    <a href="{{ url('/category/unpublished-category/' . $category->id) }}" class="btn btn-info btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                    @else
                                        <a href="{{ url('/category/published-category/' . $category->id) }}" class="btn btn-warning btn-xs" title="Published">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>

                                    @endif
                                    <a href="{{ url('/category/edit-category/' . $category->id) }}" class="btn btn-primary btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{url('/category/delete-category/' . $category->id)}}" onclick="return confirm('Are you sure to delete this !!')" class="btn btn-danger btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>

                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <!-- /.table-responsive -->

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->



@endsection
