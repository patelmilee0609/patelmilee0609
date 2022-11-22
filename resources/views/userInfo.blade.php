@extends('layouts.main')
@push('title')
     <title>userinfo</title>
@endpush     
@section('main-section')
User Info<br>
<form action="/user-info" method="POST">
    @csrf
   Name: <input type="text" name="name" placeholder="name" value="{{old('name')}}"><br><br>
    @error('name')
    {{$message}}<br>
    @enderror
   E-mail: <input type="text" name="email" placeholder="email" value="{{old('email')}}"><br><br>
    @error('email')
    {{$message}}<br>
    @enderror
    Password:<input type="password" name="password" placeholder="password"><br><br>
    @error('password')
    {{$message}}<br>
    @enderror
   Confirm password: <input type="password" name="confirm_password" placeholder="confirm_password"><br><br>
    @error('confirm_password')
    {{$message}}<br>
    @enderror
    <input type="submit" value="Submit">
@endsection
