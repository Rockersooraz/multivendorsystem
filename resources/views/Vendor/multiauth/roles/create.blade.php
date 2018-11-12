@extends('multiauth::layouts.lte') 



@section('main-section')
<div class="container">
    <div class="row" style="margin-left: 20px">
        <div class="col-md-8">
            <div class="card">
                <br><br>
               <strong> <div class="card-header bg-info text-white" style="font-size: larger;">Add New Role</div></strong>

                <div class="card-body">
    @include('multiauth::message')
    <br><br>
                    <form action="{{ route('admin.role.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="role">Role Name</label>
                            <input type="text" placeholder="Give an awesome name for role" name="name" class="form-control" id="role" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Store</button>
                        <a href="{{ route('admin.roles') }}" class="btn btn-sm btn-danger float-right">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection