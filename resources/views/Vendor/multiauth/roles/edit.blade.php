@extends('multiauth::layouts.lte') 

@section('main-section')
<div class="container" style="margin-left: 20px;">
    <div class="row" >
        <div class="col-md-8">
            <div class="card">
                <br><br>

                <div class="card-header" style="font-size: larger;"><strong>Edit this Role</strong></div>

                <div class="card-body">
                    <br>
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