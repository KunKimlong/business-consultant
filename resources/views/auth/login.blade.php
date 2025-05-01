@extends('auth.master_auth')
@section('title')
Login
@endsection
@section('content')
<div class="col-8 d-flex p-3" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); border-radius: 20px; box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);">
    <div class="col-6 d-flex align-items-center">
        <img src="{{ asset('assets/image/logins.png') }}" class="w-100" style="border-radius: 15px;">
    </div>
    <div class="col-6 p-4" style="background: rgba(255,255,255,0.85); border-radius: 15px;">
        <h4 class="text-center mb-4" style="color: #6a11cb; font-weight: bold;">User Login</h4>
        <form action="" method="post" class="row">
            @csrf
            <div class="col-12 my-2">
                <label for="email" style="color: #6a11cb;">Email:</label>
                <input type="text" id="email" name="email" placeholder="Email" class="form-control" required>
            </div>
            <div class="col-12 my-2">
                <label for="password" style="color: #6a11cb;">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password" class="form-control" required>
            </div>
            <div class="col-12 my-2 d-flex justify-content-end">
                <button class="btn px-4" style="background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%); color: #fff; font-weight: bold; border: none;">Login</button>
            </div>
        </form>
        <div class="mt-2 text-end">
            <a href="{{ route('register') }}" style="color: #2575fc; text-decoration: underline;">Don't have an account? Register</a>
        </div>
    </div>
</div>
@endsection