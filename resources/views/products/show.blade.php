@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 text-center m-auto">
                <img src="{{ $product['thumb'] }}" alt="">
                <h3>{{ $product['title'] }}</h3>
                <p>{{ $product['description'] }}</p>
            </div>
        </div>
    </div>
@endsection
