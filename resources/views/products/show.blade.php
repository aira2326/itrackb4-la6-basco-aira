@extends('layouts.app')

@section('title', 'Product Details')

@section('content')

    <h2 class="mb-4">Product Details</h2>

    <div class="card shadow-sm">

        <div class="card-body">

            <h3 class="card-title">
                {{ $product['name'] }}
            </h3>

            <hr>

            <p>
                <strong>Product ID:</strong>
                {{ $product['id'] }}
            </p>

            <p>
                <strong>Price:</strong>
                ₱{{ number_format($product['price'], 2) }}
            </p>

            <p>
                <strong>Quantity:</strong>
                {{ $product['quantity'] }}
            </p>

            <p>
                <strong>Category:</strong>
                {{ $product['category'] }}
            </p>

            @if ($product['quantity'] > 0)

                <span class="badge bg-success">
                    Available
                </span>

            @else

                <span class="badge bg-danger">
                    Out of Stock
                </span>

            @endif

            <br><br>

            <a href="{{ route('products.index') }}"
               class="btn btn-secondary">
                Back to Products
            </a>

        </div>

    </div>

@endsection
