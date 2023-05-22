@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="row">

                <main>
                    <div class="jumbotron">
                        <img class="" src="../../public/images/dc-logo.png" alt="">

                    </div>
                    <div class="container position-relative ">
                        <div class="current text-uppercase fw-bolder bg-primary position-absolute ">
                            Current Series
                        </div>
                        <div class="row pt-4">
                            @foreach ($products as $product)
                                <div class="col-3">
                                    <div class="card">
                                        <img src="{{ $product['thumb'] }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <li>{{ $product['title'] }}</a>
                                            </h5>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk
                                                of the card's
                                                content.</p>
                                            <a href="{{ route('products.show', ['id' => $loop->index]) }}"
                                                class="btn btn-primary">Go
                                                somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="text-center p-3">
                        <button type="button" class="bg-primary text-white small px-5 py-1">
                            LOAD MORE
                        </button>

                    </div>
                </main>

            </div>
        </div>
    </main>
@endsection
