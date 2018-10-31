@extends('Admin.layouts.app')

@section('main-section')

<div class="container">
<div class="row"> 
  <div class="col-lg-12 col-lg-offset-4">

                    <div class="card">
                      <div class="card-header">
                        <strong>Vendor Creation</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                          <div class="form-group">
                            <label class=" form-control-label">Phone input</label>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                              <input name="phone" class="form-control">
                            </div>
                           
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="Full Name" class=" form-control-label">Full Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="name" placeholder="Text" class="form-control"><small class="form-text text-muted">Input full name</small></div>
                          </div>
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email Input</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control"><small class="help-block form-text">Please enter your email</small></div>
                          </div>



                            <div class="row form-group">
                            <div class="col col-md-3"><label for="product number" class=" form-control-label">Number of product</label></div>
                            <div class="col-12 col-md-9"><input type="number"  name="product_numb" placeholder="Enter product number" class="form-control"><small class="help-block form-text">Enter number of products</small></div>
                          </div>

                            <div class="row form-group">
                            <div class="col col-md-3"><label for="address" class=" form-control-label">Address</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="address" placeholder="Enter Address" class="form-control"><small class="help-block form-text">Please enter your Address</small></div>
                          </div>

                           <div class="row form-group">
                            <div class="col col-md-3"><label for="Company Name" class=" form-control-label">Company/Shop Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="companyname" placeholder="Text" class="form-control"><small class="form-text text-muted">Input Company/Shop Name</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="Company address" class=" form-control-label">Company/Shop address</label></div>
                            <div class="col-12 col-md-9"><input type="text"  name="companyaddress" placeholder="Text" class="form-control"><small class="form-text text-muted">Input Company address</small></div>
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                            <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="9" placeholder="Description..." class="form-control"></textarea></div>
                          </div>

                           <div class="row form-group">
                            <div class="col col-md-3"><label for="product_img" class=" form-control-label">Multiple File input</label></div>
                            <div class="col-12 col-md-9"><input type="file"  name="product_img" multiple="" class="form-control-file"></div>
                          </div>
                          
                            <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Payment Method</label></div>
                            <div class="col col-md-9">
                              <div class="form-check">
                                <div class="checkbox">
                                  <label for="checkbox1" class="form-check-label ">
                                    <input type="checkbox" id="checkbox1" name="cash_on_deli" value="option1" class="form-check-input">Cash on delivery
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkbox2" class="form-check-label ">
                                    <input type="checkbox" id="checkbox2" name="paypal" value="option2" class="form-check-input"> Paypal
                                  </label>
                                </div>
                              
                              </div>
                            </div>
                          </div>
                          
          </form>
        </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-primary btn-sm">
           Submit
         </button>
         <button type="reset" class="btn btn-danger btn-sm">
           Reset
         </button>
       </div>
     </div>
</div>
</div>



  @endsection