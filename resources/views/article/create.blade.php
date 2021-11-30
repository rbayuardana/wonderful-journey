@extends('layouts.app')

@section('content')
<br>

<div class="container">
  <div class="h1">
    
    Create Blog
  </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
        </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/myblog/newblog/submit" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="title">Input Title</label>
                    <input type="text" class="form-control  text-md-right
                    @error('title') is-invalid @enderror" id="title"  placeholder="Title" name="title" value="">
                        @error('title')
                          <div class="invalid-feedback">
                              {{$message}}
                          </div>  
                        @enderror
                    </div>
    
                    <div class="form-group">
                      <label for="description">Input Blog Desc</label>
                    <textarea class="form-control  text-md-right
                    @error('description') is-invalid @enderror" id="description"  placeholder="Blog Desc" name="description" value="What is your blog about?"></textarea>
                        @error('description')
                          <div class="invalid-feedback">
                              {{$message}}
                          </div>  
                        @enderror
                    </div>
    
                    <div class="form-group">
                        <label for="category_id" class="my-1 mr-2">Title Category</label><br>
                      <select class="custom-select  form-control 
                      @error('category_id') is-invalid @enderror" id="category_id" name="category_id" >
                        <option selected>Choose...</option>
                        @foreach ($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                      </select>
                          @error('category_id')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>  
                          @enderror
                    </div>
                    
                    <div class="form-group">
                      <label for="image">Input Blog Picture</label>
                      <input type="file" class="col-md-4 col-form-label text-md-right
                      @error('image') is-invalid @enderror" id="image" name="image" value="{{old('image')}}">
                        @error('image')
                          <div class="invalid-feedback">
                              {{$message}}
                          </div>  
                        @enderror
                    </div>
        
                    <button type="submit" class="btn btn-dark">Add</button>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
