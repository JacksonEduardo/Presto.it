<x-layout>
    
    <x-header>
        <h1 class="p-5 bg-light text-dark">
            BENVENUTO ADMIN
        </h1>
    </x-header>
    
    <div class="container">
        <div class="row">
            <div>

                {{-- VA INSERITO QUI E NON NELL'INDEX PERCHè STIAMO USANDO IL flash NEL COMPONENTE LIVEWIRE(ArticleList)--}}
                @if(session('articleDeleted'))
                  <div class="alert alert-danger">
                    {{session('articleDeleted')}}
                  </div>
                @endif
              
                  <table class="table table-striped border table-hover">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Titolo</th>
                          <th scope="col">Creato il</th>
                          <th scope="col">Aggiornato il</th>
                          <th scope="col">Azioni</th>
                        </tr>
                      </thead>
                      <tbody>

                          <tr>
                            <th scope="row">sdsdsdsds</th>
                            <td>
ciao
                            </td>
                            <td>sdsdsds</td>
                            
                            
                            <td>
                              <a href="{{--route('article.edit', compact('article'))--}}" class="btn btn-warning">AGGIORNA</a href="">
                              <button class="btn btn-danger" wire:click="destroy({{--$article--}})">ELIMINA</button>
              
                            </td>
                          </tr>
                          {{-- @foreach ($articles as $article)
                          <tr>
                            <th scope="row">{{$article->id}}</th>
                            <td>
                              @if($article->title)
                                {{$article->title}}
                              @else
                              //\\
                              @endif
                            </td>
                            <td>{{$article->created_at->format('d/m/Y')}}</td>
                            
                            <td>
                            @if($article->updated_at == $article->created_at)
                              //\\
                            @else
                              {{$article->updated_at}}
                            @endif
                            </td>
                            
                            <td>
                              <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning">AGGIORNA</a href="">
                              <button class="btn btn-danger" wire:click="destroy({{$article}})">ELIMINA</button>
              
                            </td>
                          </tr>
                          @endforeach --}}
                        
                      </tbody>
                    </table>
              </div>
              
            
        </div>
    </div>
    
    
    
    
    
    
    
    
    
</x-layout>