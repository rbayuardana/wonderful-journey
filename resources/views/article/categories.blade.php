@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <br>
    <h1 class="card-title">Category : {{$articles[0]->Category->name}}</h1>
        @foreach ($articles as $article)    
        <div class="row">

        <div class="card mb-3" style="">
            <div class="row no-gutters">
                <div class="col-md-4" style="padding:1%">
                    <img src="\{{$article->image}}" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title">{{$article->title}}</h2>
                        <p class="card-text">{{ Illuminate\Support\Str::of($article->description)->words(40)}}</p>
                        
                        <a href="/articles/{{$article->id}}" class="btn btn-dark">Read Blog</a>
                    </div>
                </div>
            </div>
        </div>     
        
        
            

        </div>
        @endforeach
    
</div>    


@endsection
            