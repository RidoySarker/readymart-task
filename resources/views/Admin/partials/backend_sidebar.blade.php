<div class="ecaps-sidemenu-area">
    <!-- Desktop Logo -->
    <div class="ecaps-logo">
        <a href="{{url('admin')}}"><img class="desktop-logo" src="{{asset('backend_asstes/img/core-img/logo.pn')}}g" alt="Desktop Logo"> <img class="small-logo" src="{{asset('backend_asstes/img/core-img/small-logo.png')}}" alt="Mobile Logo"></a>
    </div>

    <!-- Side Nav -->
    <div class="ecaps-sidenav" id="ecapsSideNav">
        <!-- Side Menu Area -->
        <div class="side-menu-area">
            <!-- Sidebar Menu -->
            <nav>
                <ul class="sidebar-menu" data-widget="tree">
                <li><a href="{{url('/')}}"><i class='bx bx-home-heart'></i><span>Visit Site</span></a></li>
                <li class="{{ (request()->is('admin')) ? 'active' : '' }}"><a href="{{url('admin')}}"><i class='bx bx-home-heart'></i><span>Dashboard</span></a></li>
                    <li class="treeview {{ (request()->is('post')) ? 'active' : '' }}">
                        <a href="javascript:void(0)"><i class='fa fa-plus'></i> <span>Posts</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('post')}}">All Posts</a></li>
                            <li><a href="{{url('post/create')}}">Add New</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>