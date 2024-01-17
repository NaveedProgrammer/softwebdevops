<ul class="navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('index') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('about') }}">about</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('services') }}">Services</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
    </li>
    {{-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            blog
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="blog.html">blog</a>
            <a class="dropdown-item" href="single-blog.html">Single blog</a>
        </div>
    </li> --}}
    {{-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            pages
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="project.html">Project</a>
            <a class="dropdown-item" href="apartment.html">Apartment</a>
            <a class="dropdown-item" href="elements.html">Elements</a>
        </div>
    </li> --}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
    </li>
</ul>
