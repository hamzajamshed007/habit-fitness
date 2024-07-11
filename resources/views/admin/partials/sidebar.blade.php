<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">
                <img alt="image" src="{{ asset('assets/images/logo.png') }}" class="header-logo mb-5" />
            </a>
        </div>
        <ul class="sidebar-menu">
            {{-- <li class="menu-header">Main</li> --}}
            <li class="dropdown active">
                <a href="#" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li>
                <a href="{{ route('admin.users.index') }}" class="nav-link"><i
                    data-feather="users"></i><span> Users</span></a>
            </li>
            <li>
                <a href="{{ route('admin.categories.index') }}" class="nav-link"><i
                    data-feather="layers"></i><span> Course Categories</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="book"></i><span>Courses</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.courses.index') }}">All Courses</a></li>
                    <li><a class="nav-link" href="{{ route('admin.courses.create') }}">Add Courses</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="target"></i><span>Trainers</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.trainers.index') }}">All Trainers</a></li>
                    <li><a class="nav-link" href="{{ route('admin.trainers.create') }}">Add Trainer</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="trending-up"></i><span>Featured Workouts</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.featuredWorkouts.index') }}">All Featured Workouts</a></li>
                    <li><a class="nav-link" href="{{ route('admin.featuredWorkouts.create') }}">Add Featured Workout</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="message-circle"></i><span>Testimonials</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.testimonials.index') }}">All Testimonials</a></li>
                    <li><a class="nav-link" href="{{ route('admin.testimonials.create') }}">Add Testimonial</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="dollar-sign"></i><span>Subscriptions</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">All Subscriptions</a></li>
                    <li><a class="nav-link" href="#">Subscription Content</a></li>
                </ul>
            </li>


        </ul>
    </aside>
</div>
