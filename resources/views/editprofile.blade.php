@extends('layouts.app')

@section('content')
<br>

<div class="container">
  <br>
  <div class="h1">
    
    My Profile
  </div>
  

  <div class="card mb-3">
                
    <div class="card-body">
      <h2 class="card-title">{{auth()->user()->name}}</h2>
      <p class="card-text">Email : {{auth()->user()->email}}</p>
      <p class="card-text">Phone Number : {{auth()->user()->phone}}</p>
    </div>
  </div>

  <br><br>

  <h1>Edit Profile</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
        </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <div class="form-group">
                      <label for="name">Name</label>
                    <input type="name" class="form-control  text-md-right
                    @error('name') is-invalid @enderror" id="name"  placeholder="Name" name="name" value="{{auth()->user()->name}}">
                        @error('name')
                          <div class="invalid-feedback">
                              {{$message}}
                          </div>  
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control  text-md-right
                        @error('email') is-invalid @enderror" id="email"  placeholder="Email" name="email" value="{{auth()->user()->email}}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>  
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="email">Phone Number</label>
                      <input type="phone" class="form-control  text-md-right
                      @error('phone') is-invalid @enderror" id="phone"  placeholder="Phone" name="phone" value="{{auth()->user()->phone}}">
                      @error('phone')
                          <div class="invalid-feedback">
                              {{$message}}
                          </div>  
                      @enderror
                  </div>
    
        
                    <button type="submit" class="btn btn-dark">Update</button>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
