<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Order Details</title>
</head>
<body>
<div class="container mt-5">
    <h1>Order #{{ $order->id }}</h1>
    <p><strong>Customer Name:</strong> {{ $order->customer_name }}</p>
    <p><strong>Total Amount:</strong> ${{ number_format($order->total_amount, 2) }}</p>
    <p><strong>Status:</strong> {{ $order->status }}</p>
    <p><strong>Order Date:</strong> {{ $order->created_at->format('d M Y') }}</p>

    <h3>Order Items</h3>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($order->orderItems as $item)
            <tr>
                <td>{{ $item->product->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>${{ number_format($item->price, 2) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back to Orders</a>
</div>
</body>
</html>
