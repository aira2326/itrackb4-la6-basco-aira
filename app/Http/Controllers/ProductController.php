<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Product data
    private function getProducts()
    {
        return [
            1 => [
                'id' => 1,
                'name' => 'Laptop',
                'price' => 45000,
                'quantity' => 5,
                'category' => 'Electronics'
            ],

            2 => [
                'id' => 2,
                'name' => 'Smartphone',
                'price' => 15000,
                'quantity' => 10,
                'category' => 'Electronics'
            ],

            3 => [
                'id' => 3,
                'name' => 'Keyboard',
                'price' => 1200,
                'quantity' => 15,
                'category' => 'Accessories'
            ],

            4 => [
                'id' => 4,
                'name' => 'Mouse',
                'price' => 800,
                'quantity' => 20,
                'category' => 'Accessories'
            ],

            5 => [
                'id' => 5,
                'name' => 'Headset',
                'price' => 2500,
                'quantity' => 8,
                'category' => 'Accessories'
            ],

            6 => [
                'id' => 6,
                'name' => 'Printer',
                'price' => 8500,
                'quantity' => 4,
                'category' => 'Electronics'
            ],
        ];
    }

    // Part A: List page
    public function index()
    {
        $products = $this->getProducts();

        return view('products.index', [
            'products' => $products
        ]);
    }

    // Part B: Detail page
    public function show($id)
    {
        $products = $this->getProducts();

        if (!isset($products[$id])) {
            abort(404);
        }

        $product = $products[$id];

        return view('products.show', [
            'product' => $product
        ]);
    }

    // Part C: Featured page
    public function featured()
    {
        $products = $this->getProducts();

        $product = $products[1];

        return view('products.featured', [
            'product' => $product
        ]);
    }

    // Part D: Filter page
    public function filter($category = null)
    {
        $products = $this->getProducts();

        if ($category === null) {
            return view('products.filter', [
                'products' => $products,
                'category' => null
            ]);
        }

        $filteredProducts = [];

        foreach ($products as $id => $product) {
            if (strtolower($product['category']) === strtolower($category)) {
                $filteredProducts[$id] = $product;
            }
        }

        return view('products.filter', [
            'products' => $filteredProducts,
            'category' => $category
        ]);
    }
}