@inject('helpers', 'App\Helper\Helpers')
@php
    $setting=$helpers->get_setting();
        $services=$helpers->get_services();
@endphp
@extends('admin.layout.login_layout')

@section('content')

    <div class="container mt-5">
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header text-center" style="justify-content: center">
                    <a href="/">
                        <img style="width: 50px;" src="{{ asset($setting->site_logo??'/dist/image/newlogo1.jpeg')   }}" alt="Logo" class="w-20 h-20">
                    </a>
                </div>

                <div class="card-body">
                    <!-- Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                        </div>

                        <!-- Email Address -->
                        <div class="form-group mt-3">
                            <label for="email">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        </div>

                        <!-- Password -->
                        <div class="form-group mt-3">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group mt-3">
                            <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="form-group mt-4 d-flex justify-content-between align-items-center">
                            <a class="text-sm text-muted" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection
