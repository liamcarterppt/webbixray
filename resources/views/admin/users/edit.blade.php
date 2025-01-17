@extends('admin.layouts.app')
@section('title', 'Users Edit')



@section('content')

<div class="row row-cards">
    <div class="col-lg-12 col-xl-12"> 
        <div class="card">
            <div class="card-header border-bottom-1">
                    <a href="{{route('users.index')}}" class="btn btn-primary">Back</a>
            </div>
            <div class="card-body">
            <form method="POST" action="{{route('users.update',$user->id)}}">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <div class="mb-3">
                        <label class="form-label">User Name</label>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="User Name" value="{{$user->name}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label class="form-label">User email</label>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="User email" value="{{$user->email}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label class="form-label">User password</label>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="User password" value="{{$user->password}}">
                    </div>
                </div>
                <div class="form-group">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary"> Update </button>
                        </div>
                    </div>
                </form>
                             
            </div>
        </div>
    </div>
</div>
    

@endsection