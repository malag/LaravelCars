@extends('layout')

@section('content')

<h1>Login</h1>
<br />
<form method="POST" action="/users/authenticate">
    @csrf
    <div>
        <span>
            Email
        </span>
        <input type="text" name="email" value="{{old('email')}}" />
        @error('email')
        <span style="color: red;">{{$message}}</span>
        @enderror
    </div>
    <br />
    <div>
        <span>
            Password
        </span>
        <input type="password" name="password" value="{{old('password')}}" />
        @error('password')
        <span style="color: red;">{{$message}}</span>
        @enderror
    </div>
    <br />
    <div>
        <button type="submit">Login</button>
    </div>
</form>

@endsection