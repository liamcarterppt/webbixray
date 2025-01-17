@extends('errors.minimal')

@section('title', __('Not Found'))
@section('code', '404')


@section('content')
    <div class="error-page">
        <h2 class="headline text-warning">404</h2>

        <div class="error-content">
            <h3><i class="fas fa-exclamation-triangle text-warning"></i> {{ __('Oops! Page not found.') }}</h3>

            <p>
                {{ __('We could not find the page you were looking for.') }}
                {{ __('Meanwhile, you may') }} <a href="{{ route('admin.dashboard') }}">{{ __('return to dashboard') }}</a> {{ __('or try using the search form.') }}
            </p>

            <form class="search-form" action="" method="get">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="{{ __('Search') }}">

                    <div class="input-group-append">
                        <button type="submit" name="search" id="search-btn" class="btn btn-warning"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <!-- /.input-group -->
            </form>
        </div>
        <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
@section('message', __('Not Found'))
