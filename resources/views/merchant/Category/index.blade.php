@extends('layout.app')

@section('main-section')

<br>
<center> 
  <a class="btn btn-primary btn-lg" href="category/create" role="button">Add Categories</a><br><br>
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table of category </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

    
    <tr>
      <th scope="col">id</th>
      <th scope="col">Category Name</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach ($category as $cat)
       
      <th scope="row">{{$cat->id}}</th>
      <td>{{$cat->title}}</td>
      <td><a href="{{route('category.edit',$cat->id)}}"><i class="fas fa-edit"></i></a></td>
      
 
 <td>
<form id="delete-form-{{$cat->id}}" method="post" action="{{route('category.destroy',$cat->id)}}" style="display: none;">
                      {{csrf_field()}}
                      {{method_field('Delete')}}
                    </form>

                    <a onclick="
                    if(confirm('You are about to delete'))
                      {
                        event.preventDefault(); document.getElementById('delete-form-{{$cat->id}}').submit();
                      }
                      else
                        {
                          event.preventDefault();
                        }">
                       <i class="fas fa-trash-alt"></i></a>
                
</td>

    </tr>
  </tbody>
    @endforeach
</table>
{{$category->render()}}
</div>
</center>



@endsection