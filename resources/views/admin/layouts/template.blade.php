<main class="py-4" >
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark border-right" id="sidebar-wrapper"  >
            <div class="sidebar-heading text-white" style="background: linear-gradient(135deg, orange 60%, cyan);">Menu </div>
            <div class="list-group list-group-flush" >
                <a href="{{route('admin.home')}}" class="list-group-item list-group-item-action bg-dark text-white">Dashboard</a>
                <a href="{{route('contacts.index')}}" class="list-group-item list-group-item-action bg-dark text-white">Contact Us</a>
                <a href="{{route('categories.index')}}" class="list-group-item list-group-item-action bg-dark text-white">Category</a>
                <a href="{{route('posts.index')}}" class="list-group-item list-group-item-action bg-dark text-white">Post</a>
                <a href="{{route('comments.index')}}" class="list-group-item list-group-item-action bg-dark text-white">Comment</a>
                {{--                    <a href="{{route('members.index')}}" class="list-group-item list-group-item-action bg-dark text-white">All Members Info</a>--}}
                {{--                    <a href="{{route('groups.index')}}" class="list-group-item list-group-item-action bg-dark text-white">Groups</a>--}}
                <a href="{{route('users.index')}}" class="list-group-item list-group-item-action bg-dark text-white">registered Users</a>

            </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom">
                <button class="btn btn-primary" id="menu-toggle">Menu</button>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            {{--                            <a class="nav-link" href="#">Link</a>--}}
                        </li>
                        <li class="nav-item">
                            {{--                        <a class="nav-link" href="#">Link</a> --}}
                        </li>
                        <li class="nav-item dropdown">
                        {{--                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                    Dropdown--}}
                        {{--                </a>--}}
                        <!--                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>-->
                        </li>
                    </ul>
                </div>
            </nav>
