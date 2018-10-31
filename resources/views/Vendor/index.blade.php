@extends('admin.layouts.app')

@section('left-panel')

 <!-- Left Panel -->
 <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                                  
                       <li class="active">
                        <a href="#{{-- {{route('vendor.index')}} --}}"> <i class="fas fa-address-card"></i> &ensp; Vendor </a>
                    </li>
                    <br>

                        <li class="active">
                        <a href="#"> <i class="fas fa-chalkboard-teacher"> </i> &ensp; Customer </a>
                    </li>
                    <br>


                        <li class="active">
                        <a href=""> <i class="fas fa-box"></i>&ensp; Products </a>
                    </li> 
                    <br>                  
    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->
@endsection


@section('main-section')

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                     <center><a href="{{route('admin.create')}}" class="btn btn-success">Add New Admin</a> </center>
                    </div>
                </div>
            </div>
           
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Company Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                 
                    <tbody>
                          @foreach ($admin as $a)
                      <tr>
                        <td>{{$a->name}}</td>
                        <td>{{$a->phone}}</td>
                        <td>{{$a->address}}</td>
                        <td>{{$a->email}}</td>
                        <td>{{$a->company_name}}</td>
                       
                        <td>
                            <button class="btn btn-success">Details</button>
                           <a href="{{route('admin.edit',$a->id)}}"> <button class="btn btn-primary">Edit</button></a>
                            <a href="{{route('admin.edit',$a->id)}}"> <button class="btn btn-danger">Delete</button></a>
                        </td>
                      </tr>
                        @endforeach
                    </tbody>

                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

      

    @endsection

   