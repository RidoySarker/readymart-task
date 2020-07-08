
    <script src="{{asset('backend_asstes/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend_asstes/js/popper.min.js')}}"></script>
    <script src="{{asset('backend_asstes/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend_asstes/js/bundle.js')}}"></script>
    <script src="{{asset('backend_asstes/js/default-assets/setting.js')}}"></script>
    <script src="{{asset('backend_asstes/js/default-assets/fullscreen.js')}}"></script>
    <script src="{{asset('backend_asstes/js/default-assets/active.js')}}"></script>
    <script src="{{asset('backend_asstes/js/default-assets/apexchart.min.js')}}"></script>
    <script src="{{asset('backend_asstes/js/default-assets/dashboard-active.js')}}"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @yield('script')
    <script src="{{asset('backend_asstes/js/default-assets/jquery.datatables.min.js')}}"></script>
    <script src="{{asset('backend_asstes/js/default-assets/datatables.bootstrap4.js')}}"></script>
    <script src="{{asset('backend_asstes/js/default-assets/demo.datatable-init.js')}}"></script>
    {!! Toastr::message() !!}
