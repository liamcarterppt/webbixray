@extends('admin.layouts.app')
@section('title', 'Transactions List')



@section('content')



    <!-- ROW OPEN -->
    <div class="row row-cards">
        <div class="col-lg-12 col-xl-12">

            <div class="card">
                <div class="card-header border-bottom-0">
                    <!--<h2 class="card-title">1 - 30 of 546 users</h2>-->
                    <div class="card-title">

                    </div>
                    <div class="page-options ms-auto">
                        <a href=""></a>
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
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Balance</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

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
