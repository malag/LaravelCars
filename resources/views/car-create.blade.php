@extends('layout')

@section('content')

    <h1>New Car</h1>
    <br />
    <form method="POST" action="/car" enctype="multipart/form-data">    
        @csrf
        <div>
            <span>
                Name
            </span>
            <input type="text" name="name" value="{{ old("name") }}" />
            @error('name')
                <span style="color: red;">{{$message}}</span>
            @enderror
        </div>
        <br />
        <div>
            <span>
                Brand
            </span>
            <input type="text" name="brand" value="{{ old("brand") }}"/>
            @error('brand')
                <span style="color: red;">{{$message}}</span>
            @enderror        
        </div>
        <br />
        <div>
            <span>
                Year
            </span>
            <input type="text" name="year" value="{{ old("year") }}"/>
            @error('year')
                <span style="color: red;">{{$message}}</span>
            @enderror        
        </div>
        <br />
        <div>
            <span>
                Model
            </span>
            <input type="text" name="model" value="{{ old("model") }}" />
            @error('model')
                <span style="color: red;">{{$message}}</span>
            @enderror        
        </div>
        <br />
        <div>
            <span>
                Price
            </span>
            <input type="text" name="price" value="{{ old("price") }}" />
            @error('price')
                <span style="color: red;">{{$message}}</span>
            @enderror        
        </div>
        <div>
            <span>
               Logo
            </span>
            <input type="file" name="logo"></input>
            @error('logo')
              <span style="color: red;">{{$message}}</span>
            @enderror
         </div>        
        <br />        
        <div>
            <button type="submit">Save</button>
        </div>
    </form>
@endsection