@extends('layouts.app')

@section('content')
<div class="container">
  <div class="h1">
              
    Add Stationary Types
  </div>
  
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <table class="table">
              <thead class="thead-dark">
                  <tr>
                      <th scope="col">No</th>
                      <th scope="col">Stationary Type</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($prodtypes as $pt) 
                      <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td>{{$pt->nama}}</td>
                      </tr>
                  @endforeach 
              </tbody>
          </table>
          </div>
          <div class="col">
            <form method="POST" action="/prodtypes" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="typename">Input Tipe</label>
              <input type="text" class="form-control col-md-4 col-form-label text-md-right
              @error('typename') is-invalid @enderror" id="typename"  placeholder="Input Tipe" name="typename" value="{{old('typename')}}">
                  @error('typename')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>  
                  @enderror
              </div>

              <div class="form-group d-flex flex-column">
                <label for="typeimg">Input Gambar Tipe</label>
                <input type="file" class="col-md-4 col-form-label text-md-right
                @error('typeimg') is-invalid @enderror" id="typeimg"  placeholder="Input Tipe" name="typeimg" value="{{old('typeimg')}}">
                  @error('typeimg')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>  
                  @enderror
                </div>
  
              <button type="submit" class="btn btn-dark">Submit</button>
          </form>
          </div>
        </div>


        

          
      </div>
  </div>
</div>
@endsection
