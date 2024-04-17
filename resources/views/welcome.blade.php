<x-layout>
        @if (session('message'))
        <div class="alert alert-success">
                {{session('message')}}
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
                <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                </ul>
        </div>
        @endif
        
        <div class="container">
                <div class="row mt-5 text-center">
                        <h2>I nostri ultimi annunci</h2>
                        
                        @foreach ($announcements as $announcement )
                        <div class="col-4 m-5">
                                <div class="lc-block card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg m-5" lc-helper="background" style="background-image: url('https://picsum.photos/500/501'); background-size:cover">
                                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                                <div class="lc-block pt-5 mt-5 mb-4">
                                                        <div editable="rich">
                                                                <h3 class="display-6 lh-1 fw-bold">{{$announcement->title}}</h3>
                                                                <span class="bg-dark text-white">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</span>
                                                        </div>
                                                </div>
                                                
                                                <a href="{{route('announcements.show',compact('announcement'))}}" class="btn btn-danger">Vai al dettaglio</a>
                                                <span class="bg-dark text-white">Vai alla Categoria</span>
                                                <a  class="btn btn-white bg-info" href="{{route('categoryShow',['category'=>$announcement->category])}}">{{$announcement->category->name}}</a>
                                       
                                        </div>
                                        
                                </div>
                        </div>
                        
                        @endforeach
                        
                        
                </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
</x-layout>