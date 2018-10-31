@extends('admin.layouts.app');

@section('main-section')

<div class="container">
<div class="row"> 
  <div class="col-lg-12 col-lg-offset-4">

                    <div class="card">
                      <div class="card-header">
                          @include('message.error')
                        <strong>Admin Creation</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="{{route('admin.update',$admin->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                          {{csrf_field()}}
                          @method('PUT')
                          
                          <fieldset>

                          

                          <div class="form-group">
                            <label class=" form-control-label">Phone input</label>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                              <input name="phone" value="{{$admin->phone}}" class="form-control">
                            </div>
                           
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="Full Name" class=" form-control-label">Full Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" value="{{$admin->name}}" placeholder="Text" class="form-control"><small class="help-block form-text">Input full name</small></div>
                          </div>
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email Input</label></div>
                            <div class="col-12 col-md-9"><input type="email"  name="email" value="{{$admin->email}}" placeholder="Enter Email" class="form-control"><small class="help-block form-text">Please enter your email</small></div>
                          </div>



                            <div class="row form-group">
                            <div class="col col-md-3"><label for="address" class=" form-control-label">Address</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="address"  value="{{$admin->address}}" placeholder="Enter Address" class="form-control"><small class="help-block form-text">Please enter your Address</small></div>
                          </div>

                           <div class="row form-group">
                            <div class="col col-md-3"><label for="Company Name" class=" form-control-label">Company Name</label></div>
                            <div class="col-12 col-md-9"><input type="text"  name="company_name" value="{{$admin->company_name}}" placeholder="Company Name" class="form-control"><small class="help-block form-text">Input Company/Shop Name</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="Company address" class=" form-control-label">Company address</label></div>
                            <div class="col-12 col-md-9"><input type="text"  name="company_address" value="{{$admin->company_address}}" placeholder="Company Address" class="form-control"><small class="help-block form-text">Input Company address</small></div>
                      </div>                          
                          	<center><button type="submit" class="btn btn-primary">Submit</button></center>
                              
                              </div>
                            </div>
                          </div>
              </fieldset>            
          </form>
        </div>

       
     </div>
</div>
</div>



@endsection