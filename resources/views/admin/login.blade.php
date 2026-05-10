@extends('layouts.admin')
@section('login_page', true)
@section('content')
<div class="login-page">
    <div class="login-box">
        <div class="logo">soft<span>n</span>solution</div>
        <h2>Admin Panel Login</h2>
        @if($errors->has('email'))
        <div class="alert alert-error">{{ $errors->first('email') }}</div>
        @endif
        <form method="POST" action="/admin/login">
            @csrf
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="admin@softnsolution.com" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="••••••••" required>
            </div>
            <button type="submit" class="btn-login">Login to Admin Panel</button>
        </form>
        <p style="margin-top:16px;text-align:center;font-size:12px;color:#999;">
            <a href="/" style="color:#006d7a;">← Back to Website</a>
        </p>
    </div>
</div>
@endsection
