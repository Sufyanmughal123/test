@inject('helpers', 'App\Helper\Helpers')
@php
    $setting=$helpers->get_setting();
        $services=$helpers->get_services();
@endphp
@extends('admin.layout.login_layout')
@section('content')
    <br/>
    <br/>
    <div class="row mt-5">
        <div class="col-md-2"></div>
        <div class="col-md-5 col-md-offset-5">
            <div class="card">
                <div class="card-header text-center" style="justify-content: center">
                    <h4>Login</h4>
                </div>

                <div class="panel-body">
                    <div class="logo" style="justify-content: center;display: flex">
                        <img style="width: 50px;" src="{{ asset($setting->site_logo??'/dist/image/newlogo1.jpeg')   }}" class="img-responsive">
                    </div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were problems with input:
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="{{ url('login') }}">
                        <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-12 control-label pull-left text-left">Email</label>

                            <div class="col-md-12">
                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       value="{{ old('email') }}">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-12 control-label  pull-left">Password</label>

                            <div class="col-md-12">
                                <input type="password"
                                       class="form-control"
                                       name="password">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 text-left">
                                <label>
                                    <input type="checkbox"
                                           name="remember"> Remember me
                                </label>
                            </div>
                            <div class="col-md-6 text-left">
                                {{--                                <a href="{{ route('auth.password.reset') }}">Forgot your password?</a>--}}
                            </div>


                        </div>


                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit"
                                        class="btn btn-primary"
                                        style="margin-right: 15px;">
                                    Login
                                </button>
                            </div>
                            <div class="col-md-12">
                                <a href="/register">Register </a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
