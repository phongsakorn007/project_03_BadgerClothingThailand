@extends('layouts.admin.master')

@section('content')

<h3 class="text-center mb-3">RESET PASSWORD</h3>

        <form action="{{ route('password.update') }}" class="login-form" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group">
                <input type="email" name="email" value="{{ $email ?? old('email') }}" class="form-control rounded-left" placeholder="Email" required>
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

        </div>

        <div class="form-group">
        <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Reset Password</button>
        </div>
        </form>
@endsection
