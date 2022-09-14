@extends('layouts.admin.master')

@section('content')

<h3 class="text-center mb-3">RESET PASSWORD</h3>

        <form action="{{ route('password.email') }}" class="login-form" method="POST">
            @csrf

            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <div class="form-group">
                <input type="email" name="email" class="form-control rounded-left" placeholder="Email" required>
            </div>
        
        <div class="form-group d-md-flex">
        <div class="w-50">
            
                    </div>

        </div>

        <div class="form-group">
        <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Send Password Reset Link</button>
        </div>
        </form>
@endsection
