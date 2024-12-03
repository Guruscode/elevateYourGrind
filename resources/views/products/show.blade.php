@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <h3>Price: ${{ $product->price }}</h3>
            <p>Stock: {{ $product->stock }}</p>
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" value="1" min="1" max="{{ $product->stock }}">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Add to Cart</button>
            </form>
        </div>
    </div>
</div>
@endsection
