@extends('admin.layouts.app')

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

   