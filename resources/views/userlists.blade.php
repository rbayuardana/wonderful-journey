@extends('layouts.app')

@section('content')
<br>
<div class="container">
  <div class="h1">
              
    User List
</div>
  
    <div class="card">
      <div class="card-body">
        
            <table class="table">
              <thead class="thead-dark">
                  <tr>
                      <th scope="col">No</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($users as $user) 
                      <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td>
                              {{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>
                              @if ($user->role != 'admin')
                                  
                                <form method="POST" action="userdelete/{{$user->id}}" enctype="multipart/form-data">
                                    @method('delete')
                                    @csrf
                                        <button  class="btn btn-danger" >Delete</button>
                                </form>
                              @endif
                          </td>
                      </tr>
                      
                  @endforeach 
              </tbody>
          </table>
          
      </div>
  </div>
  

@endsection
