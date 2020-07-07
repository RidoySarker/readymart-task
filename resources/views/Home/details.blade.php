@extends('Home.layouts.app') @section('title' , 'Ridoy Blog') @section('content')
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 page_details_section">
            <h2 class="mt-4">{{ $data->post_title }}</h2>
            <hr />
            <p>Posted on {{ date('d-F-Y h:i A', strtotime( $data->created_at )) }}</p>
            <hr />

            @if($data->post_type == 1)
            <img class="img-fluid rounded" src="{{ asset( $data->post_image ) }} " alt="Image" />
            @endif @if( $data->post_type == 2 )
            <div class="main_image">
                <iframe width="670" height="377" src="https://www.youtube.com/embed/{{$data->post_video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            @endif
            <hr />

            <p>{{ $data->post_content }}</p>
            <hr />

            <div class="row">
                <div class="col-lg-6"><h5 class="mt-1">Share This Post</h5></div>
                <div class="col-lg-6">
                    <ul class="share_now">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr />
        </div>
    </div>
</div>
@stop
