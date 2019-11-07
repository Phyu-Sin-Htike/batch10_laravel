@extends('template')
@section('content')

  <!-- Main Content -->
  <div class="container " style="margin-top: 100px">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h1 class="mt-4">Post Create gorm</h1>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
       
        <form method="post" action="{{route('category.store')}}" >
          @csrf
          <div class="form-group">
            <label>Name: </label>
              <input type="text" name="name" class="form-control">
              </div>
        
        
           <div class="form-group">
              <input type="submit" name="submit" class="btn btn-primary " value="Save">
            </div>

        </form>
       
      </div>
    </div>
  </div>
  @endsection
 
