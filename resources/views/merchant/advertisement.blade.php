<html lang="en">
<head>
  <title> Upload Product Details</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<!-- sufee admin panel -->
<!--  <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
   <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
   <link rel="stylesheet" href="{{asset('css/flag-icon.min.css')}}">
   <link rel="stylesheet" href="{{asset('css/cs-skin-elastic.css')}}">
   <link rel="stylesheet" href="assets/css/bootstrap-select.less">
   <link rel="stylesheet" href="{{asset('scss/style.css')}}">
   <link rel="stylesheet" href="{{asset('css/lib/chosen/chosen.min.css')}}">

   <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
-->

</head>
<body>
  <div class="container">
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

        @if(session('success'))
        <div class="alert alert-success">
         <!--  {{ session('success') }} -->
         <strong>Successfully uploaded</strong> 
  
        </div> 
        @endif

    <h3 class="jumbotron">Upload your Product details</h3>
<form method="post" action="{{route('merchant.store')}}" enctype="multipart/form-data">
  {{csrf_field()}}

    <!-- <div class="col-12 col-md-8 col-lg-6 pb-5"> -->
      <div class="col-lg-12">


                    <!--Form with header-->

                        
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control"  name="title" placeholder="Product Title" required>
                                    </div>
                                </div>
                                <!-- multiple file upload -->
                                <div class="input-group control-group increment" >
                                  <input type="file" name="filename[]" class="form-control">
                                  <div class="input-group-btn"> 
                                    <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                  </div>
                                </div>

                                <div class="clone hide">
                                  <div class="control-group input-group" style="margin-top:10px">
                                    <input type="file" name="filename[]" class="form-control">
                                    <div class="input-group-btn"> 
                                      <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                    </div>
                                  </div>
                                </div>
                                <!-- end of multiple fileupload -->
                                <br>

                                  <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="far fa-money-bill-alt"></i></div>
                                        </div>
                                        <input type="number"  class="form-control"  name="price" placeholder="Price per item" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fab fa-audible"></i></div>
                                    </div>
                                    <input type="number" class="form-control"  name="number" placeholder="Number of items" required>
                                  </div>
                                </div>

                            

                               


                      

                                <!-- <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required>
                                    </div>
                                </div> -->

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" name="description" placeholder="Product Description" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="submit" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
              
                    <!--Form with header-->


                </div>
  </div>

       

       <!--  <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button> -->

  </form>        
  </div>


<!--     <script src="((asset('js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="((asset('js/popper.min.js')}}"></script>
    <script src="((asset('js/plugins.js')}}"></script>
    <script src="((asset('js/main.js')}}"></script>
    <script src="((asset('js/lib/chosen/chosen.jquery.min.js')}}"></script>
 -->

<script type="text/javascript">


    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>
</body>
</html>