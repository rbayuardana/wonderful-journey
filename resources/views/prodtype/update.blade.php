@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
               
            
        @foreach ($prodtypes as $prodtype) 
            <form method="POST" action="/update/{{$prodtype->id}}" enctype="multipart/form-data">
                @method('patch')
                @csrf

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Stationary Type Name</th>
                            <th scope="col">Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$prodtype->nama}}</td>
                                <td>
                                    <div class="form-group">
                                        <label for="typename">Input Tipe</label>
                                      <input type="text" class="form-control 
                                      @error('typename') is-invalid @enderror" id="typename"  placeholder="Input Tipe" name="typename">
                                          @error('typename')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>  
                                          @enderror
                                      </div>
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                    
                                    <form method="POST" action="/update/{{$prodtype->id}}" enctype="multipart/form-data">
                                     @method('delete')
                                     @csrf
                                        <button  class="btn btn-danger">Delete</button>
                                    </form>
                                    
                                </td>
                            </tr>
                        
                    </tbody>
                </table>

                {{-- <div class="form-group">
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
    
                <button type="submit" class="btn btn-primary">Submit</button> --}}
            </form>
            @endforeach 
             
        </div>
    </div>
</div>
@endsection
