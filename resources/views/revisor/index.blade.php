<x-layout>
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>
                        {{$announcement_to_check ? 'Ecco l\'a revisionare' : 'Non ci sono annunci da revisionare'}}
                        
                    </h1>
                </div>
            </div>
        </div>
        
    </div>
    @if ($announcement_to_check)
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/200/200" class="img-fluid p-3 randed" alt="">
                        </div>
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/200/200" class="img-fluid p-3 randed" alt="">
                        </div>
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/200/200" class="img-fluid p-3 randed" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="submit" data-bs-target="#showCarousel" data-bs-slide="prev">.
                        <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
                        <span class="visually-hidden">Previous </span>
                    </button>
                    <button class="carousel-control-next" type="submit" data-bs-target="#showCarousel" data-bs-slide="next">.
                        <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
                        <span class="visually-hidden">Previous </span>
                    </button>
                    <h5 class="text-dark">Titolo:{{$announcement_to_check->title}}</h5>
                    <p class="card-text text-dark">Titolo:{{$announcement_to_check->description}}</p>
                    <p class="text-dark">Titolo:{{$announcement_to_check->created_at->format('d/m/Y')}}</p>
                </div>
                
            </div>
            <div class="col-12 col-md-6">
                <form action="{{route ('announcement.accept', ['announcement'=>$announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success shadow">Accetta</button>
                    
                </form>
            </div>
            <div class="col-12 col-md-6">
                <form action="{{route('announcement.reject' , ['announcement'=>$announcement_to_check])}}"   method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success shadow">Rifiuta</button>
                    
                </form>
            </div>
            
        </div>
    </div>
    @endif
</x-layout>