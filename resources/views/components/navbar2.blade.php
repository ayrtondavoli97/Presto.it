<!-- Navbar -->
<div class="container-fluid container-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="https://mdbgo.com/">
                <img
                src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
                height="16"
                alt="MDB Logo"
                loading="lazy"
                style="margin-top: -1px;"
                />
            </a>
            
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                
                <i id="menu-button" class="fa-solid fa-bars-staggered"></i>
            </button>
            
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('announcements.index')}}">i nostri annunci</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('create')}}">crea un annuncio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('profile.profile')}}">vai al tuo profilo</a>
                    </li>
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link" href="#">benvenuto ospite</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-custom" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Le nostre Categorie
                        </a>
                        <ul class="dropdown-menu text-custom" aria-labelledby="navbarDropdown">
                            @foreach($categories as $category)
                            
                            <li><a class="dropdown-item text-custom" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    
                </ul>
                <!-- Left links -->
                
                <div class="d-flex align-items-center">
                    
                    <a href="{{ route('login') }}"><button type="submit" class="btn btn-info">Login</button></a>
                    
                    
                    <a href="{{ route('register') }}"><button type="submit" class="btn btn-info mx-3">Registrati</button></a>
                    
                    @auth
                    <li class="nav-item">
                        <p class="nav-link">Benvenuto {{ Auth::user()->name }}</p>
                    </li>
                    {{-- Form di logout con method post --}}
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="nav-item">
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </li>
                    </form>
                    @endauth
                    <a
                    
                    data-mdb-ripple-init
                    class="btn btn-dark px-3"
                    href="https://github.com/mdbootstrap/mdb-ui-kit"
                    role="button"><i class="fab fa-github">
                    </i>
                </a>
            </div>
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
</div>