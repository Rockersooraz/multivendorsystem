@extends('multiauth::layouts.app') 
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

@section('content')
<div class="container">
    <div class="row {{-- justify-content-center --}}" style="margin-top:-85px">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit this Role</div>

                <div class="card-body">
                    <form action="{{ route('admin.role.update', $role->id) }}" method="post">
                        @csrf @method('patch')
                        <div class="form-group">
                            <label for="role">Role Name</label>
                            <input type="text" value="{{ $role->name }}" name="name" class="form-control" id="role">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Change</button>
                        <a href="{{ route('admin.roles') }}" class="btn btn-danger btn-sm float-right">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection