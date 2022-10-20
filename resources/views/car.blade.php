@extends('layout')
@section('content')
    <a href="/car/{{$car->id}}/edit">Edit car</a>
    <form method="POST" action="/car/{{$car->id}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>    
    <hr>
    <h1>{{$car['name']}}</h1>
    <h3>
        Brand: {{$car['brand']}}
    </h3>
    <h3>
        Model: {{$car['model']}}
    </h3>
    <h3>
        Year: {{$car['year']}}
    </h3>
    <h3>
        Price: {{$car['price']}}
    </h3>
    <br>
    <img class="img-thumbnail" src="{{$car->Logo ? asset('storage/' . $car['Logo']) : asset('/images/no-car-image.jpg')}}" />
@endsection