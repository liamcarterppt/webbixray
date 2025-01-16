@extends('admin.layouts.app')

@section('content')
    <!-- ROW-1 -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <h2>Your Referral Link</h2>
                    <input class="form-control" type="text" value="{{ $referralLink }}" readonly>
                    <br>
                    <button class="btn  btn-primary" onclick="copyToClipboard()">Copy Link</button>

                    <script>
                        function copyToClipboard() {
                            const input = document.querySelector('input');
                            input.select();
                            document.execCommand('copy');
                            alert('Referral link copied!');
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
