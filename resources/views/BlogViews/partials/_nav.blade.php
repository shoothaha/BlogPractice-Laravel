<!-- Default Bootstrap Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#">Blog Practice</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
            <a class="nav-link" href="blog">Blogs <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="about">About</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="contact">Contact</a>
            </li>

        </ul>

        <ul class="navbar-nav">
            @if (Auth::check())
            <li class="nav-item dropdown dropdown-menu-left">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hello {{ Auth::user()->name }}
                </a>

                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('posts.index') }}">My Posts</a></li>

                    <hr>
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Log Out</a></li>
                </ul>
            </li>
            
            @else

                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>

            @endif

        </ul>
    </div>

</nav>