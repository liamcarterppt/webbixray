@extends('admin.layouts.app')
@section('title', 'Users List')



@section('content')
    <!-- ROW OPEN -->
    <div class="row row-cards">
        <div class="col-lg-12 col-xl-12">
            <form method="GET" action="">
            <div class="input-group mb-5">
                <input type="text" name="search" class="form-control"
                placeholder="Search by name or email" value="">

                <div class="input-group-text btn btn-primary">
                    <button type="submit" class="fa fa-search"></button>
                </div>
            </div>
            </form>
            <div class="card">
                <div class="card-header border-bottom-0">
                    <!--<h2 class="card-title">1 - 30 of 546 users</h2>-->
                    <div class="card-title">
                        <a href="{{route('permissions.create')}}" class="btn btn-primary">Create Permission</a>
                    </div>
                    <div class="page-options ms-auto">
                        <select class="form-control select2 w-100">
                            <option value="asc">Latest</option>
                            <option value="desc">Oldest</option>
                        </select>
                    </div>
                </div>
                <div class="e-table px-5 pb-5">
                    <div class="table-responsive table-lg">
                        <table class="table border-top table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center"></th>
                                    <th>Name</th>
                                    <th>Guard</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)
                                <tr>
                                    <td class="align-middle text-center">
                                        <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
                                            <input class="custom-control-input" id="item-1" type="checkbox"> <label class="custom-control-label" for="item-1"></label>
                                        </div>
                                    </td>

                                    <td class="text-nowrap align-middle">{{$permission->name}}</td>
                                    <td class="text-nowrap align-middle"><span>{{$permission->guard_name}}</span></td>
                                    <td class="text-center align-middle">
                                        <div class="btn-group align-top">
                                            <a class="btn btn-sm btn-primary badge"  href="{{ route('permissions.edit',$permission->id) }}">Edit</a>
                                            <form action="{{route('permissions.destroy',$permission->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-primary badge" type="submit"><i class="fa fa-trash"></i></button>

                                            </form>

                                        </div>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <ul class="pagination float-end">

                    <!--
                    <li class="page-item page-prev disabled"><a class="page-link" href="javascript:void(0)" tabindex="-1">Prev</a></li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                    <li class="page-item page-next">
                        <a class="page-link" href="javascript:void(0)">Next</a>
                    </li>-->
                </ul>
            </div>
        </div>
        <!-- COL-END -->
    </div>
    <!-- ROW CLOSED -->
@endsection
