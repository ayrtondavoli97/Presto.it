<x-layout>
    <h2>Annuncio {{$announcement->title}}</h2>
    
    <div class="container mb-5 ">
        <div class="row">
            <div class="col-8">
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/200/301" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/200/302" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3> Titolo: {{$announcement->title}}</h3>
                        <p class="card-text">Prezzo: {{$announcement->price}}$</p>
                        <p class="card-text">Categoria: {{$announcement->category->name}}</p>
                        <p class="card-text">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                        <p class="card-text">Pubblicato da:{{$announcement->user->name}}</p>
                        <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class="btn btn-primary">Vai alla categoria</a>
                        <a href="{{route('announcements.index')}}" class="btn btn-danger">Torna indietro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
<div class="col-12 col-md-4 my-2">
    
</div>