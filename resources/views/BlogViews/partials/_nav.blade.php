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

            <li class="nav-item">
            <a class="nav-link" href="about">About</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="contact">Contact</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.index') }}">All Posts</a>
            </li>
        </ul>

        <ul class="navbar-nav navbar-right">
            <li class="nav-item dropdown dropdown-menu-right">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                My Account
                </a>

                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <hr>
                    <li><a class="dropdown-item" href="#"> Log Out</a></li>
                </ul>
            </li>
        </ul>
    </div>

</nav>