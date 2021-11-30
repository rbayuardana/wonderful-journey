@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid text-white" style="background-image: url(Images/jumbotron.jpg); background-size: cover">
    <div class="container">
        <br><br>
      <h1 class="display-4">Wonderful Journey</h1>
      <p class="lead">"A Journey is Only as good as it's Destination"</p>
      <br><br><br><br>
    </div>
</div>
<div class="container" style="margin-top: -8%">
    
        @foreach ($articles as $article)    
        <div class="row">

        <div class="card mb-3" style="">
            <div class="row no-gutters">
                <div class="col-md-4" style="padding:1%">
                    <img src="{{$article->image}}" class="card-img" alt="...">
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
<br>    


@endsection
            