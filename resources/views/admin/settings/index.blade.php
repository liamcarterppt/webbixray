@extends('admin.layouts.app')
@section('title', 'Settings')



@section('content')
    <!-- Row -->
    <div class="row ">
        <div class="col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="list-group list-group-transparent mb-0 file-manager file-manager-border">
                        <h4>General Settings</h4>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-9">
            <div class="row row-sm">
                <div class="col-xl-12 col-xxl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-2 col-sm-2 col-md-12">
                                    <div class="mt-3 mb-5">
                                        <span class="settings-icon bg-primary-transparent text-primary"><i class="fe fe-settings"></i></span>
                                    </div>
                                </div>
                                <div class="col-xl-10 col-sm-10 col-md-12">
                                    <div class="d-flex justify-content-between">
                                        <form action="{{ route('admin.settings.store') }}" method="POST">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="site_name" class="form-label">Site Name</label>
                                                <input type="text" class="form-control" id="site_name" name="site_name" value="{{ $settings['site_name'] ?? '' }}" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="site_email" class="form-label">Site Email</label>
                                                <input type="email" class="form-control" id="site_email" name="site_email" value="{{ $settings['site_email'] ?? '' }}" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="maintenance_mode" class="form-label">Maintenance Mode</label>
                                                <select class="form-control" id="maintenance_mode" name="maintenance_mode">
                                                    <option value="0" {{ isset($settings['maintenance_mode']) && $settings['maintenance_mode'] == '0' ? 'selected' : '' }}>Disabled</option>
                                                    <option value="1" {{ isset($settings['maintenance_mode']) && $settings['maintenance_mode'] == '1' ? 'selected' : '' }}>Enabled</option>
                                                </select>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Save Settings</button>
                                        </form>
                                    </div>







                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- /Row -->
@endsection
