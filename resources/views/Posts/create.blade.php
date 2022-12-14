@extends('layouts.app')
@section('content')

@if(session()->has('failed'))
    <div class="alert  mt-2 alert-success">
        {{ session()->get('failed') }}
    </div>
@endif
@if(session()->has('failure'))
   <div class="alert mt-2 alert-success">
    {{ session()->get('failure') }}
   </div>
  @endif
@if ($errors->any())
    <div class="alert mt-2 alert-danger">
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    </div>
@endif

<form class="mx-5 mt-5 border border-1 p-5" method="post" action="/posts" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3">
      <label for="exampleInputtitle"><h4>Title</h4></label>
      <input type="text" name="title" class="form-control" id="exampleInputtitle"  placeholder="Enter Post Title">
    </div>
    <div class="form-group mb-3">
      <label for="exampleInputdesc"><h4>Description</h4></label>
      <textarea size="3" name="description" class="form-control" id="exampleInputdesc" placeholder="Post Description">
      </textarea>
    </div>
    <div class="mb-3 form-group">
      <label for="formFile" class="form-label"><h4>Post Image</h4></label>
      <input class="form-control" name="image" type="file" id="formFile" >
    </div>
    <div class="form-group mb-3">
        <label for="exampleInputPostcreator">Post Creator</label>
        <select class="form-control" id="exampleInputPostcreator" name="user_id" placeholder="Post Creator">
            @foreach ($allUsers as $user)
            
               <option value="{{Auth::user()->id}}" selected>{{ $user->name }}</option>
            @endforeach
        </select>
      </div>
    <button type="submit" class="btn btn-primary mb-3">Add</button>
  </form>
@endsection

    