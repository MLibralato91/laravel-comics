@extends('layouts.app')

@section('content')
    <main>
        @foreach ($products as $product)
            {{-- <li><a href="{{ route('products.show', ['id' => $loop->index]) }}">{{ $product['title'] }}</a></li> --}}
        @endforeach
    </main>
@endsection
