
<!-- effetto sticky navbar -->
<div class="container-fluid container-navbar">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-xl bg-navbar" aria-label="My Navbar">
        <div class="container-fluid">
            
            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                
                <i id="menu-button" class="fa-solid fa-bars-staggered"></i>
            </button> --}}
            
            
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('announcements.index')}}">i nostri annunci</a>
                    </li>
                    
                    
                    @auth
                    
                  
                        
                        
                        
                        
                    <li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('create')}}">crea un annuncio</a>
                        </li>
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('profile.profile')}}">Vai al tuo profilo</a>
                        </li>
                        
                        
                        @else
                        
                        <li class="nav-item">
                            <p class="nav-link">Benvenuto ospite </p>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">login</a>
                        </li>
                        
                        
                        @endauth
                        @guest
                        <li class="nav-item" >
                            <a class="nav-link" href="{{route('register')}}">registrati</a>
                        </li>
                        
                        @endguest
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
                        
                    </div>
                </div>
            </nav>
        </div>
        
        
        
        
        