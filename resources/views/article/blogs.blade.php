@extends('layouts.app')

@section('content')
<br>
<div class="container">
  <div class="h1"> 
    My Blog Lists
  </div>
  <div class="mt-3 mb-3">

    <a class="btn btn-dark" href="/myblog/newblog">Create Blog</a>
  </div>
  
    <div class="card">
      <div class="card-body">
        
            <table class="table">
              <thead class="thead-dark">
                  <tr>
                      <th scope="col">No</th>
                      <th scope="col">Title</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($articles as $article) 
                      <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td>{{$article->title}}</td>
                          <td>
                            <form method="POST" action="/blogdelete/{{$article->id}}" enctype="multipart/form-data">
                                @method('delete')
                                @csrf
                                   <button  class="btn btn-danger">Delete</button>
                            </form>
                          </td>
                      </tr>
                  @endforeach 
              </tbody>
          </table>
          
      </div>
  </div>
</div>
@endsection
