@extends('admin.layouts.app')

@section('title', 'My Wallet')

@section('content')
    <div class="container">
        <div class="row">
                            <!-- COL END -->
                            <div class="col-md-6  col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Wallet ID : {{ $wallet->wallet_id }}</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="btn btn-primary btn-sm">Deposit</a>
                                            <a href="javascript:void(0)" class="btn btn-secondary btn-sm ms-2">Withdraw</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>User Name</th>
                                                <td>{{ $wallet->user->name }} </td>
                                            </tr>
                                            <tr>
                                                <th>Wallet Balance</th>
                                                <td>{{ $wallet->balance }} {{ $wallet->payment_method}}</td>
                                            </tr>
                                            <tr>
                                                <th>Created At</th>
                                                <td>{{ $wallet->created_at }}</td>
                                            </tr>
                                            <tr>
                                                <th>Updated At</th>
                                                <td>{{ $wallet->updated_at }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-md-6  col-xl-6">

                            </div>
        </div>
        <div class="row">
            <div class="col-md-12  col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Transaction History</h3>
                    </div>
                    <div class="card-body">
                        <div class="e-table px-5 pb-5">
                            <div class="table-responsive table-lg">
                                <table class="table border-top table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>


                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
    </div>

@endsection
