@extends('layouts.admin.master')

@section('content')

<h3 class="text-center mb-3">LOGIN</h3>

        <form action="#" class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="username" class="form-control rounded-left" placeholder="Username" required>
            </div>
        <div class="form-group d-flex">
        <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
        </div>
        <div class="form-group d-md-flex">
        <div class="w-50">
            <label class="checkbox-wrap checkbox-primary">Remember Me
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="w-50 text-md-right">
                        <a href="{{ route('password.request') }}">Forgot Password</a>
                    </div>

        </div>

        <div class="w-100 text-center">
            <a href="{{ url('/') }}">Go to home</a>
        </div>
        <div class="w-100 text-center">
            <a href="{{ route('register') }}">Go to register</a>
        </div>

        <div class="form-group">
        <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Login</button>
        </div>
        </form>
@endsection
