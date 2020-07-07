@extends('Home.layouts.app') @section('title' , 'Ridoy Blog') @section('content')

<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Section One -->
        <div class="col-lg-8 section-1">
            <div class="row">
                <div class="col-lg-7 section-1-lg">
                    @foreach( $section1_data as $key => $value ) @if( $loop->first ) @php $section1_first_data = $section1_data->first(); @endphp

                    <div class="main_image">
                        <a href="/postdetails/{{ $section1_first_data['post_id'] }}">
                            <img class="img-fluid rounded" src="{{ asset($section1_first_data['post_image']) }}" alt="Image" />
                        </a>

                        @if( $section1_first_data['post_type'] == 2 )
                        <div class="overlay_image">
                            <a href="https://www.youtube.com/watch?v={{ $value['post_video'] }}" target="_blank">
                                <img src="{{ asset('home_assets/images/playbutton.png') }}" alt="Image" />
                            </a>
                        </div>
                        @endif
                        <a href="/postdetails/{{ $section1_first_data['post_id'] }}">
                            <h4>{{ substr($section1_first_data['post_title'], 0, 45).'...' }}</h4>
                        </a>
                        <p>{{ substr($section1_first_data['post_content'], 0, 45).'...' }}</p>
                    </div>
                    @endif @endforeach
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        @foreach($section1_data as $key => $value) @if ($loop->first) @continue @endif
                        <div class="col-lg-6 section-1-sm">
                            <div class="main_image">
                                <a href="/postdetails/{{ $value['post_id'] }}">
                                    <img class="img-fluid rounded" src="{{ asset($value['post_image']) }}" alt="Image" />
                                </a>
                                @if( $value['post_type'] == 2 )
                                <div class="overlay_image">
                                    <a href="https://www.youtube.com/watch?v={{ $value['post_video'] }}" target="_blank">
                                        <img src="{{ asset('home_assets/images/playbutton.png') }}" alt="Image" />
                                    </a>
                                </div>
                                @endif
                                <a href="/postdetails/{{ $value['post_id'] }}">
                                    <p>{{ substr($value['post_title'], 0, 35).'...' }}</p>
                                </a>
                                <p>{{ substr($value['post_content'], 0, 30).'...' }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Two -->
        <div class="col-lg-4 section-2">
            <div class="row">
                <div class="col-lg-12 section-2-lg">
                    @foreach( $section2_data as $key => $value ) @if( $loop->first ) @php $section2_first_data = $section2_data->first(); @endphp

                    <div class="main_image">
                        <a href="/postdetails/{{ $section2_first_data['post_id'] }}">
                            <img class="img-fluid rounded" src="{{ asset($section2_first_data['post_image']) }} " alt="Image" />
                        </a>

                        @if( $section2_first_data['post_type'] == 2 )
                        <div class="overlay_image">
                            <a href="https://www.youtube.com/watch?v={{ $value['post_video'] }}" target="_blank">
                                <img src="{{ asset('home_assets/images/playbutton.png') }}" alt="Image" />
                            </a>
                        </div>
                        @endif
                        <a href="/postdetails/{{ $section2_first_data['post_id'] }}">
                            <h4>{{ substr($section2_first_data['post_title'], 0, 50).'...' }}</h4>
                        </a>
                        <p>{{ substr($section2_first_data['post_content'], 0, 45).'...' }}</p>
                    </div>
                    @endif @endforeach
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($section2_data as $key => $value) @if ($loop->first) @continue @endif
                        <div class="col-lg-6 section-2-sm">
                            <div class="main_image">
                                <a href="/postdetails/{{ $value['post_id'] }}">
                                    <img class="img-fluid rounded" src="{{ $value['post_image'] }}" alt="Image" />
                                </a>
                                @if( $value['post_type'] == 2 )
                                <div class="overlay_image">
                                    <a href="https://www.youtube.com/watch?v={{ $value['post_video'] }}" target="_blank">
                                        <img src="{{ asset('home_assets/images/playbutton.png') }}" alt="Image" />
                                    </a>
                                </div>
                                @endif
                                <a href="/postdetails/{{ $value['post_id'] }}">
                                    <h6>{{ substr($value['post_title'], 0, 40).'...' }}</h6>
                                </a>
                                <p>{{ substr($value['post_content'], 0, 40).'...' }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop