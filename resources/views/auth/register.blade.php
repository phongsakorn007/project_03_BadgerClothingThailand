@extends('layouts.admin.master')

@section('content')

<h3 class="text-center mb-3">REGISTER</h3>

        <form action="#" class="login-form" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="name" class="form-control rounded-left" placeholder="Name" required>
            </div>

            <div class="form-group">
                <input type="text" name="address" class="form-control rounded-left" placeholder="Address" required>
            </div>

            <div class="form-group">
                <input type="email" name="email" class="form-control rounded-left" placeholder="Email" required>
            </div>

            <div class="form-group">
                <input type="text" name="phone" class="form-control rounded-left" placeholder="Phone" required>
            </div>

            <div class="form-group">
                <input type="text" name="username" class="form-control rounded-left" placeholder="Username" required>
            </div>

            <div class="form-group d-flex">
            <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
            </div>

            <div class="form-group d-flex">
                <input type="password" name="password_confirmation" class="form-control rounded-left" placeholder="Confirm password" required>
                </div>

        <div class="form-group d-md-flex">
        <div class="w-50">
            
                    </div>
                    <div class="w-50 text-md-right">
                        <a href="{{ route('password.request') }}">Forgot Password</a>
                    </div>

        </div>

        <div class="w-100 text-center">
            <a href="{{ url('/') }}">Go to home</a>
        </div>
        <div class="w-100 text-center">
            <a href="{{ route('login') }}">Go to login</a>
        </div>

        <div class="form-group">
        <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Register</button>
        </div>
        </form>
@endsection
