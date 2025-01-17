@extends('admin.layouts.app')
@section('title', 'Roles Edit')



@section('content')
<div class="row row-cards">
    <div class="col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-header border-bottom-1">
                <a href="{{route('roles.index')}}" class="btn btn-primary">Back</a>
            </div>
            <div class="card-body">
            <form method="Post" action="{{route('roles.update',$role->id)}}">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <div class="mb-3">
                                <label class="form-label"> Name</label>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                                <label class="form-label">Guard</label>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Web" value="web" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary"> Update </button>
                            </div>
    \
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>


@endsection