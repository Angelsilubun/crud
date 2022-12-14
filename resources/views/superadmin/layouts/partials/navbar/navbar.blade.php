<nav class="navbar navbar-toggleable-md">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav">
        <span>
            <i class="fa fa-code-fork"></i>
        </span>
    </button>

    <button class="navbar-toggler navbar-toggler-left" type="button" id="toggle-sidebar">
        <span>
            <i class="fa fa-align-justify"></i>
        </span>
    </button>

    <a class="navbar-brand logo text-center" href="#">
        <h3 class="text-white pt-1">
            Titipsini.com
        </h3>
    </a>

    <div class="collapse navbar-collapse" id="navbarNav">
        <button class="sidebar-toggle btn btn-flat" id="toggle-sidebar-desktop">
            <span>
                <i class="fa fa-align-justify"></i>
            </span>
        </button>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle nav-icon" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell-o"></i>
                    <span class="hidden-lg-up position-right">Notifications</span>
                    <span class="badge bg-danger-4">8</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right width-300 list-notifications">
                    <ul class="list-unstyled">
                        <li class="media notif-unread">
                            You have 3 unread notifications!
                        </li>
                        <li class="media">
                            <div class="notif-icon bg-primary-4">
                                <i class="fa fa-bell-o"></i>
                            </div>
                            <div class="media-body notif-text">
                                You may want to check this!
                            </div>
                        </li>
                        <li class="media mr-2">
                            <div class="notif-icon bg-danger-4">
                                <i class="fa fa-exclamation"></i>
                            </div>
                            <div class="media-body notif-text text-danger-4">
                                Server Banshee is not responding.
                            </div>
                        </li>
                        <li class="media">
                            <div class="notif-icon bg-success-4">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="media-body notif-text text-success-4">
                                Backup completed successfully.
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown-has-after" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <img src="{{ url('/dist') }}/assets/img/default-user.jpg" alt="" class="user-img"> {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">
                    <i class="fa fa-user"></i> <span>Profile</span></a>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-cog"></i> <span>Settings</span></a>
                </a>
                <a class="dropdown-item" href="{{ url('/logout') }}">
                    <i class="fa fa-sign-out"></i> <span>Logout</span></a>
                </a>
            </div>
        </li>
    </ul>
</div>
</nav>
