@extends('layout')

@section('content')

<h1>Register</h1>
<br />
<form method="POST" action="/users">
    @csrf
    <div>
        <span>
            Name
        </span>
        <input type="text" name="name" value="{{old('name')}}" />
        @error('name')
        <span style="color: red;">{{$message}}</span>
        @enderror
    </div>
    <br />
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
        <span>
            Confirm Password
        </span>
        <input type="password" name="password_confirmation" value="{{old('password2')}}" />
        @error('password_confirmation')
        <span style="color: red;">{{$message}}</span>
        @enderror
    </div>

    <br />
    <div>
        <button type="submit">Register</button>
    </div>
</form>

@endsection