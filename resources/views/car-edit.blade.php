@extends('layout')

@section('content')
    <h1>Edit Car: {{$car->name}}</h1>
    <br />
    <form method="POST" action="/car/{{$car->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <span>
                Name
            </span>
            <input type="text" name="name" value="{{$car->name}}" />
            @error('name')
                <span style="color: red;">{{$message}}</span>
            @enderror
        </div>
        <br />
        <div>
            <span>
                Brand
            </span>
            <input type="text" name="brand" value="{{$car->brand}}" />
            @error('brand')
            <span style="color: red;">{{$message}}</span>
            @enderror
        </div>
        <br />
        <div>
            <span>
                Year
            </span>
            <input type="text" name="year" value="{{$car->year}}" />
            @error('year')
            <span style="color: red;">{{$message}}</span>
        @enderror
        </div>
        <br />
        <div>
            <span>
                Model
            </span>
            <input type="text" name="model" value="{{$car->model}}" />
            @error('model')
            <span style="color: red;">{{$message}}</span>
        @enderror
        </div>
        <br />
        <div>
            <span>
                Price
            </span>
            <input type="text" name="price" value="{{$car->price}}" />
            @error('price')
            <span style="color: red;">{{$message}}</span>
        @enderror
        </div>
        <br />
        <div>
            <span>
                Logo
            </span>
            <input type="file" name="logo">
            <img class="img-thumbnail" src="{{$car->Logo ? asset('storage/' . $car['Logo']) : asset('/images/no-car-image.jpg')}}" />

            @error('logo')
                <span style="color: red;">{{$message}}</span>
            @enderror
        </div>
        <br />
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
@endsection