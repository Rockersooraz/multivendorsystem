@extends('multiauth::layouts.lte') 

@section('main-section')

   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Registered Merchants</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
              
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Company Name</th>
                 
                 
                </tr>
                </thead>
                     
               @foreach ($merchant as $m)
                <tbody>
                <tr>

                  <td>{{$m->id}}</td>
                  <td>{{$m->name}}</td>
                  <td>{{$m->email}}</td>
                  <td>{{$m->phone}}</td>
                  <td>{{$m->address}}</td>
                  <td>{{$m->company_name}}</td>
                  
                  <tr>
               
                </tfoot>
                 @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

@endsection



