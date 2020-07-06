<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Title -->
        <title>@yield('title') | Ridoy Blog</title>

        <!-- Favicon -->
        <link rel="icon" href="{{asset('backend_asstes/img/core-img/favicon.png')}}" />
        @include('Admin.partials.backend_css')
    </head>

    <body>
        <!-- Preloader -->
        <div id="preloader"></div>

        <div class="ecaps-page-wrapper">
            <!-- Sidemenu Area -->
            @include('Admin.partials.backend_sidebar')

            <!-- Page Content -->
            <div class="ecaps-page-content">
                <!-- Top Header Area -->
                @include('Admin.partials.backend_nav')

                <!-- Main Content Area -->
                <div class="main-content">
                    @yield('main_content')

                    <!-- Footer Area -->
                    @include('Admin.partials.backend_footer')
                </div>
            </div>
        </div>

        @include('Admin.partials.backend_js')
    </body>
</html>
