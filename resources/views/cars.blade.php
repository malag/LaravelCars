@extends('layout')
@section('content')
    @if(session()->has('message'))
        <label>{{session('message')}}</label>
    @endif
    <h1>{{$title}}</h1>
        <x-search />
    <br />
    <a href="/car/create">Create new car</a>
    <br />
        {{$cars->links("pagination::bootstrap-4")}}
    <br />
    <div class="card-columns">
        @foreach($cars as $car)
            <x-car-card :car="$car" />
        @endforeach
    </div>
@endsection