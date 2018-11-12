@extends('layout.app')

@section('main-section')

<div class="container">
<div class="row">



<div class="col-lg-6 col-lg-offset-2">
	<br>
	
		@include('includes.message')
    <h1>Create Category</h1>
<form action="{{ route('category.store')}}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
  <fieldset>
  
    <div class="form-group">
      <label for="Inputcategory">Category</label>
      <input type="text" class="form-control" name="title"  placeholder="Enter category"><br>
    
   
 <button type="submit" class="btn btn-primary">Submit</button>
 

  </fieldset>
</form>
</div>
</div>
</div>

@endsection