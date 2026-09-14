@extends('layouts.app')

@section('title', 'Featured Product')

@section('content')

    <h2 class="mb-4">Featured Product</h2>

    <div class="card shadow-sm border-primary">

        <div class="card-header bg-primary text-white">
            Featured Product
        </div>

        <div class="card-body">

            <h3 class="card-title">
                {{ $product['name'] }}
            </h3>

            <p class="card-text">
                <strong>Price:</strong>
                ₱{{ number_format($product['price'], 2) }}
            </p>

            <p class="card-text">
                <strong>Category:</strong>
                {{ $product['category'] }}
            </p>

            <p class="card-text">
                <strong>Quantity:</strong>
                {{ $product['quantity'] }}
            </p>

            <a href="{{ route('products.show', $product['id']) }}"
               class="btn btn-primary">
                View Product Details
            </a>

        </div>

    </div>

@endsection
