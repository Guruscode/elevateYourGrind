@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Shopping Cart</h1>
    @if(session('cart'))
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session('cart') as $id => $details)
                    <tr>
                        <td>
                            <img src="{{ asset('images/' . $details['image']) }}" alt="{{ $details['name'] }}" width="50">
                            {{ $details['name'] }}
                        </td>
                        <td>{{ $details['quantity'] }}</td>
                        <td>${{ $details['price'] }}</td>
                        <td>${{ $details['quantity'] * $details['price'] }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <a href="{{ route('checkout.index') }}" class="btn btn-success">Proceed to Checkout</a>
        </div>
    @else
        <p>Your cart is empty.</p>
    @endif
</div>
@endsection
            