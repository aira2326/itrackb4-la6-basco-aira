@extends('layouts.app')

@section('title', 'Products')

@section('content')

<div class="card">
    <div class="card-body">
        <h2 class="mb-4">Product List</h2>

```
    @forelse ($products as $id => $product)
        <div class="mb-3">
            <h5>{{ $product['name'] }}</h5>
            <p>Price: ₱{{ $product['price'] }}</p>
            <a href="{{ url('/products/' . $id) }}" class="btn btn-primary">
                View Product
            </a>
        </div>
    @empty
        <p>No products available.</p>
    @endforelse

</div>
```

</div>

@endsection
