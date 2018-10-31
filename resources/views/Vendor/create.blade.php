@extends('Admin.layouts.app')

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

<div class="container">
<div class="row"> 
  <div class="col-lg-12 col-lg-offset-4">

                    <div class="card">
                      <div class="card-header">
                        @include('message.error')
                        <strong>Vendor Creation</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="{{route('vendor.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                          {{csrf_field()}}
                          <fieldset>

                          <div class="form-group">
                            <label class=" form-control-label">Phone input</label>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                              <input name="phone" class="form-control">
                            </div>
                           
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="Full Name" class=" form-control-label">Full Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Text" class="form-control"><small class="form-text text-muted">Input full name</small></div>
                          </div>
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email Input</label></div>
                            <div class="col-12 col-md-9"><input type="email"  name="email" placeholder="Enter Email" class="form-control"><small class="help-block form-text">Please enter your email</small></div>
                          </div>



                            <div class="row form-group">
                            <div class="col col-md-3"><label for="address" class=" form-control-label">Address</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="address" placeholder="Enter Address" class="form-control"><small class="help-block form-text">Please enter your Address</small></div>
                          </div>

                           <div class="row form-group">
                            <div class="col col-md-3"><label for="Company Name" class=" form-control-label">Company/Shop Name</label></div>
                            <div class="col-12 col-md-9"><input type="text"  name="company_name" placeholder="Text" class="form-control"><small class="form-text text-muted">Input Company/Shop Name</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="Company address" class=" form-control-label">Company/Shop address</label></div>
                            <div class="col-12 col-md-9"><input type="text"  name="company_address" placeholder="Text" class="form-control"><small class="form-text text-muted">Input Company address</small></div>
                          </div>


                            <div class="row form-group">
                            <div class="col col-md-3"><label for="product number" class=" form-control-label">Product Price</label></div>
                            <div class="col-12 col-md-9"><input type="number" name="price" placeholder="Enter product price" class="form-control"><small class="help-block form-text">Enter product price</small></div>
                          </div>



                            <div class="row form-group">
                            <div class="col col-md-3"><label for="product number" class=" form-control-label">Product Number</label></div>
                            <div class="col-12 col-md-9"><input type="number" id="email-input" name="product_numb" placeholder="Enter number of products" class="form-control"><small class="help-block form-text">Enter number of products</small></div>
                          </div>

                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                            <div class="col-12 col-md-9"><textarea name="description"  rows="9" placeholder="Description..." class="form-control"></textarea></div>
                          </div>

                           <div class="row form-group">
                            <div class="col col-md-3"><label for="product_img" class=" form-control-label">Multiple File input</label></div>
                            <div class="col-12 col-md-9"><input type="file"  name="file[]" multiple class="form-control-file"></div>
                          </div>
                          
                            <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Payment Method</label></div>
                            <div class="col col-md-9">
                              <div class="form-check">
                                <div class="checkbox">
                                  <label for="checkbox1" class="form-check-label ">
                                    <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Cash on delivery
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkbox2" class="form-check-label ">
                                    <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input"> Paypal
                                  </label>
                                </div>
                                 <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
         <button type="reset" class="btn btn-danger btn-sm">
           Reset
         </button>
       </div>
                              
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