@extends('layout/layout_user')
@section('login')
@if(session()->has('user'))
    <div class="account" id="account_login">
        <p><a href="/user/profile">Chào {{session()->get('user')['name']}}</a></p>
        <a href="/logout">Đăng xuất</a>
    </div>
@else
    <div class="account">
        <div class="login-box"><a href="/user/login" id="login" class="login">login</a></div>
        <div class="register-box"><a href="">register</a></div>
    </div>
@endif
@endsection