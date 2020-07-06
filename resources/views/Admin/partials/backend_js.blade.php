    <!-- Must needed plugins to the run this Template -->
    <script src="{{asset('backend_asstes/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend_asstes/js/popper.min.js')}}"></script>
    <script src="{{asset('backend_asstes/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend_asstes/js/bundle.js')}}"></script>
    <script src="{{asset('backend_asstes/js/default-assets/setting.js')}}"></script>
    <script src="{{asset('backend_asstes/js/default-assets/fullscreen.js')}}"></script>

    <!-- Active JS -->
    <script src="{{asset('backend_asstes/js/default-assets/active.js')}}"></script>

    <!-- These plugins only need for the run this page -->
    <script src="{{asset('backend_asstes/js/default-assets/apexchart.min.js')}}"></script>
    <script src="{{asset('backend_asstes/js/default-assets/dashboard-active.js')}}"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    @yield('script')