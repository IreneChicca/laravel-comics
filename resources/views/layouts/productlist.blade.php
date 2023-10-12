@extends('layouts.app')



@section('main-content')
<div class="text-center p-4">
    <h1>Products</h1>
</div>
    

    <div class="d-flex flex-wrap">
@foreach ($comics as $comic)
    <div class="card col-3 m-2 p-3 text-center">
        <img src="{{ $comic['thumb']  }}" alt="">
        <h5>{{ $comic['series']  }}</h5>
        <h6>{{ $comic['title']  }}</h6>
        <p>{{ $comic['sale_date']  }}</p>
        <p>{{ $comic['price']  }}</p>
    </div>

    
@endforeach
    </div>
@endsection