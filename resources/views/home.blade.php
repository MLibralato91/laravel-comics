@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ $product['thumb'] }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <li>{{ $product['title'] }}</a>
                                </h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
