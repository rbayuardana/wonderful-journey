@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="row"style="margin: 5%">
            
            
            <div class="card mb-3">
                <img class="card-img-top" src="\{{$article->image}}" alt="Card image cap">
                <div class="card-body">
                  <h1 class="card-title">{{$article->title}}</h1>
                  <p class="card-text"><small class="text-muted">Published by : {{$article->User->name}}</small></p>
                  <h5>Blog Category : {{$article->Category->name}}</h5>
                  <p class="card-text">{{$article->description}}</p>

                  @if($article->created_at == '')
                    <p class="card-text"><small class="text-muted">Published at : 2020-08-22 23:59:00 </small></p>
                  @else
                    <p class="card-text"><small class="text-muted">Published at : {{$article->created_at}}</small></p>
                  @endif
                </div>
            </div>

            
        </div>
    </div>
</div>
@endsection
