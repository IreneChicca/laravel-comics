@extends('layouts.app')



@section('main-content')
<div class="p-4">
    <h1>Products</h1>
</div>
    

    <div class="d-flex flex-wrap justify-content-center pb-5">
@foreach ($comics as $comic)
    <div class="card col-3 m-2 p-4 text-center">
        
        <img src="{{ $comic['thumb']  }}" alt="" class="mb-5">
    
        <h5>{{ $comic['series']  }}</h5>
        <h6>{{ $comic['title']  }}</h6>
        <p>{{ $comic['sale_date']  }}</p>
        <p>{{ $comic['price']  }}</p>
    </div>

    
@endforeach
    </div>
@endsection