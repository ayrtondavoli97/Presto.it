<div>
    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
    <div style="height: 60px"></div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form wire:submit='store' enctype="multipart/form-data">
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input wire:model.blur='title' type="text"
                        class="form-control @error('title') is-invalid @enderror" id="title">
                        @error('title')
                        <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input wire:model.blur='price' type="number"
                        class="form-control @error('price') is-invalid @enderror" id="price">
                        @error('price')
                        <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione dell'articolo</label>
                        <textarea wire:model.blur='description' class="form-control @error('description') is-invalid @enderror" id="description" cols="30"
                        rows="10"></textarea>
                        @error('description')
                        <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category">Categoria</label>
                        <select wire:model.defer="category" id="category" class="form-control">
                            <option value="">scegli la categoria</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            
                            
                            
                        </select>
                        
                        
                        
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
            
        </div>
    </div>
</div>
