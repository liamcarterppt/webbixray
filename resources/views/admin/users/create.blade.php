@extends('admin.layouts.app')
@section('title', 'Users Create')



@section('content')

<div class="row row-cards">
    <div class="col-lg-12 col-xl-12"> 
        <div class="card">
            <div class="card-header border-bottom-1">
                    <a href="{{route('users.index')}}" class="btn btn-primary">Back</a>
            </div>
            <div class="card-body">
            <form method="POST" action="{{route('users.store')}}">
            @csrf
            @method('POST')
                <div class="form-group">
                    <div class="mb-3">
                        <label class="form-label">User Name</label>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="User Name" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label class="form-label">User email</label>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="User email" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label class="form-label">User password</label>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="User password" value="">
                    </div>
                </div>
                <div class="form-group">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary"> Create </button>
                        </div>
                    </div>
                </form>
                             
            </div>
        </div>
    </div>
</div>
    

@endsection