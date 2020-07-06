@extends('Admin.partials.backend_head')
@section('title' , 'All Post')
@section('main_content')
<div class="data-table-area">
    <div class="container-fluid">


        <div class="row">
            <div class="col-12 box-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-2">All Post</h4>

                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Sl </th>
                                    <th>Post Title</th>
                                    <th>Post Type</th>
                                    <th>Post Section</th>
                                    <th>Post Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($post as $key => $post_data)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$post_data->post_title}}</td>
                                    <td>
                                        {{$post_data->post_type =='1' ? "Post" : '' }}
                                        {{$post_data->post_type =='2' ? "Video" : ''}}
                                    
                                    </td>
                                    <td>
                                        {{$post_data->post_section =='1' ? "Section 1" : '' }}
                                        {{$post_data->post_section =='2' ? "Section 2" : '' }}
                                    </td>
                                    <td> <img style="width: 60px;" src="{{$post_data->post_image}}" alt=""> </td>
                                    <td>

                                    <a  href="{{route('post.show',$post_data->post_id)}}" class="btn btn-info"> {{$post_data->post_status =='1' ? "Unpublished" : 'Published' }}</a>


                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>
</div>
@endsection




