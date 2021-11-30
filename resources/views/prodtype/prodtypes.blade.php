@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
               
            @foreach ($prodtypes as $prodtype)   
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('storage/' . $prodtype->img)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$prodtype-> nama}}</h5>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endforeach
                
            
        </div>
    </div>
</div>
@endsection
