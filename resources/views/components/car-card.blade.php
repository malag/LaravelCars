@props(['car'])
<div class="card" style="width:400px">
    <img class="card-img-top rounded img-thumbnail" src="{{$car->Logo ? asset('storage/' . $car['Logo']) : asset('/images/no-car-image.jpg')}}" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">{{$car['name']}}</h4>
      <p>
        Year: <a href="/cars?year={{$car['year']}}"> {{$car['year']}} </a>
      </p>
      <p>
        Brand: <a href="/cars?brand={{$car['brand']}}"> {{$car['brand']}} </a>
      </p>
      <p>
        Model: <a href="/cars?model={{$car['model']}}"> {{$car['model']}} </a>
      </p>
      <a href="/car/{{$car['id']}}" class="btn btn-primary">Details</a>
    </div>
</div>