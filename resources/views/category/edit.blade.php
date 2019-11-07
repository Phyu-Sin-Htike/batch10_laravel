@extends('template')
@section('content')

  <!-- Main Content -->
  <div class="container " style="margin-top: 100px">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h1 class="mt-4">Category Edit form</h1>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
             category   <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      
        <form method="post" action="{{route('category.update',$post->id)}}" >
          @csrf
          @METHOD('PUT')
         
          <div class="form-group">
            <label>Category: </label>
              <input type="text" name="name" class="form-control"value="{{$post->name}}">
              <input type="hidden" name="">
              </div>
         
         
           <div class="form-group">
              <input type="submit" name="submit" class="btn btn-primary " value="Save">
            </div>

        </form>
       
      </div>
    </div>
  </div>
  @endsection
 
