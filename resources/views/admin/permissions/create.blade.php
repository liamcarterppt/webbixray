@extends('admin.layouts.app')
@section('title', 'Permission Create')



@section('content')
<div class="row row-cards">
    <div class="col-lg-12 col-xl-12">

        <div class="card">
            <div class="card-header border-bottom-1">
                <a href="{{route('permissions.index')}}" class="btn btn-primary">Back</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('permissions.store')}}">
                    @csrf
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label">Permission Name</label>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Permission Name" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label">Guard Name</label>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Guard Name" value="web" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary"> Create </button>
                        </div>
\
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
