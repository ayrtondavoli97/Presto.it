<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 bg info">Benvenuto nel tuo profilo  {{ Auth::user()->name }}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{route('profile.delete')}}">
                    @csrf
                    @method('DELETE')
    
                    <button type="submit" class="btn btn-danger">Cancella account</button>
                </form>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            @forelse ($announcements as $announcement)
            
            <div class="col-12 col-md-4 my-2">
            <div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titolo: {{$announcement->title}}</h5>
                    <p class="card-text">Prezzo: {{$announcement->price}}$</p>
                    <p class="card-text">Descrzione: {{$announcement->description}}</p>
                    <p class="card-text">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                    <p class="card-text">Pubblicato da:{{$announcement->user->name}}</p>
                    <a href="{{route('announcements.show',compact('announcement'))}}" class="btn btn-danger">Vai al dettaglio</a>
                </div>
            </div>
        </div>
        @empty
        <p>Non hai ancora pubblicato niente </p>
        @endforelse
    </div>
</div>



</x-layout>