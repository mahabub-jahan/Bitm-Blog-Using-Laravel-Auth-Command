@extends('admin.master')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Blog</h1>
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
                            <th>Blog ID</th>
                            <th>Author Name</th>
                            <th>Blog Description</th>
                            <th>Publication Status</th>
                            <th>Blog Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i = 1;
                        @endphp
                        @foreach($blogs as $blog)
                            <tr class="odd gradeX">

                                <td>{{ $i++ }}</td>
                                <td>{{ $blog->author_name }}</td>
                                <td>{{ $blog->blog_description }}</td>
                                <td>
                                    {{ $blog->publication_status == 1 ? 'Publish' : 'Unpublished'}}
                                </td>

                                <td><img src="{{asset($blog->blog_image)}}" style="height: 150px;width: 130px"></td>

                                <td>
                                    @if($blog->publication_status == 1)
                                        <a href="{{ url('/blog/unpublished-blog/' . $blog->id) }}" class="btn btn-info btn-xs" title="Published">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ url('/blog/published-blog/' . $blog->id) }}" class="btn btn-warning btn-xs" title="Published">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>

                                    @endif
                                    <a href="{{ url('/blog/edit-blog/' . $blog->id) }}" class="btn btn-primary btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{url('/blog/delete-blog/' . $blog->id)}}" onclick="return confirm('Are you sure to delete this !!')" class="btn btn-danger btn-xs" title="Published">
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
