<style>
    /* .nav-item:hover .nav-link{
        background-color: red !important;
    } */
    /* .nav-item>.nav-link>.nav-icon{
        color: red !important;
    }
    .nav-item>.nav-link:active .nav-icon{
        color: rgb(255, 255, 255) !important;
    } */
</style>
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('admin.index') }}"
                class="nav-link  {{ request()->is('admin') || request()->is('admin/') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-header">Domain Parameters</li>
        <li class="nav-item">
            <a href="{{ route('admin.slider.index') }}"
                class="nav-link {{ request()->is('admin/slider*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                    Sliders List
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.about.index') }}"
                class="nav-link {{ request()->is('admin/about*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                    About List
                </p>
            </a>
        </li>
        <li class="nav-header">Blogs</li>
        <li class="nav-item">
            <a href="{{ route('admin.blog.index') }}"
                class="nav-link {{ request()->is('admin/blog*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                    All Blogs
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.blog.create') }}"
                class="nav-link {{ request()->is('admin/blog/create') ? 'active' : '' }}">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                    Add Blog
                </p>
            </a>
        </li>
        <li class="nav-header">Contact</li>
        <li class="nav-item">
            <a href="{{ route('admin.contact.index') }}"
                class="nav-link {{ request()->is('admin/contact*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                    All Contacts
                </p>
            </a>
        </li>
        <li class="nav-header">Our Information</li>
        <li class="nav-item">
            <a href="{{ route('admin.our_information.index') }}"
                class="nav-link {{ request()->is('admin/information*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                    All Informations
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.our_information.update') }}"
                class="nav-link {{ request()->is('admin/information/create') ? 'active' : '' }}">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                    Add Information
                </p>
            </a>
        </li>
        <li class="nav-header">Project</li>
        <li class="nav-item">
            <a href="{{ route('admin.project.index') }}"
                class="nav-link {{ request()->is('admin/project*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                    All Projects
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.project.create') }}"
                class="nav-link {{ request()->is('admin/project/create') ? 'active' : '' }}">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                    Add Project
                </p>
            </a>
        </li>
        <li class="nav-header">Project Images</li>
        <li class="nav-item">
            <a href="{{ route('admin.project_image.index') }}"
                class="nav-link {{ request()->is('admin/project/image*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                    All Projects Images
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.project_image.create') }}"
                class="nav-link {{ request()->is('admin/project/image/create') ? 'active' : '' }}">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                    Add Project Images
                </p>
            </a>
        </li>
        <li class="nav-header">Project Images</li>
        <li class="nav-item">
            <a href="{{ route('admin.service.index') }}"
                class="nav-link {{ request()->is('admin/service*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                    All Service
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.service.create') }}"
                class="nav-link {{ request()->is('admin/service/create') ? 'active' : '' }}">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                    Add Service
                </p>
            </a>
        </li>
        <li class="nav-header">Subscriber</li>
        <li class="nav-item">
            <a href="{{ route('admin.subscriber.index') }}"
                class="nav-link {{ request()->is('admin/subscriber*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                    All Subscribers
                </p>
            </a>
        </li>
        <li class="nav-header">Our Team</li>
        <li class="nav-item">
            <a href="{{ route('admin.team.index') }}"
                class="nav-link {{ request()->is('admin/team*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                    All Teams
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.team.create') }}"
                class="nav-link {{ request()->is('admin/team/create') ? 'active' : '' }}">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                    Add Team
                </p>
            </a>
        </li>
        <li class="nav-header">Our Users</li>
        <li class="nav-item">
            <a href="{{ route('admin.user.index') }}"
                class="nav-link {{ request()->is('admin/user*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                    All Users
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.user.create') }}"
                class="nav-link {{ request()->is('admin/user/create') ? 'active' : '' }}">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                    Add User
                </p>
            </a>
        </li>
        <li class="nav-header">Project Category</li>
        <li class="nav-item">
            <a href="{{ route('admin.project_category.index') }}"
                class="nav-link {{ request()->is('admin/project/category*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                    All Projects Category
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.project_category.create') }}"
                class="nav-link {{ request()->is('admin/project/category/create') ? 'active' : '' }}">
                <i class="nav-icon fas fa-photo-video"></i>
                <p>
                    Add Project Category
                </p>
            </a>
        </li>
        {{-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="./index.html" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard v1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard v2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard v3</p>
                    </a>
                </li>
            </ul>
        </li> --}}
        <li class="nav-item">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"
                class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt text-info"></i>
                {{-- <i class="nav-icon fas fa    text-info"></i> --}}
                <p>Logout</p>
            </a>
        </li>
        <br><br>
        <br><br>
    </ul>
</nav>
