<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - MyShop</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <div class="logo">MyShop</div>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/products') }}">Products</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                @guest
                    <li><a href="{{ url('/register') }}">Register</a></li>
                    <li><a href="{{ url('/login') }}">Login</a></li>
                @else
                    <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </ul>
        </nav>
    </header>
    <main>
        <section class="products">
            <h1>Our Products</h1>
            <a href="{{ route('products.create') }}">Add New Product</a>
            @if(session('success'))
                <p style="color: green;">{{ session('success') }}</p>
            @endif
            <div class="product-list">
                @foreach($products as $product)
                    <div class="product">
                        <img src="{{ $product->photo ? asset('storage/' . $product->photo) : 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=400&h=300&fit=crop' }}" alt="{{ $product->name }}">
                        <h3>{{ $product->name }}</h3>
                        <p>${{ $product->price }}</p>
                        <p>{{ $product->description }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        @if(request()->is('products/create'))
        <section class="add-product">
            <h2>Add New Product</h2>
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="price">Price:</label>
                    <input type="number" id="price" name="price" step="0.01" required>
                </div>
                <div>
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" required></textarea>
                </div>
                <div>
                    <label for="photo">Photo:</label>
                    <input type="file" id="photo" name="photo" accept="image/*">
                </div>
                <button type="submit">Add Product</button>
            </form>
        </section>
        @endif
    </main>
    <footer>
        <p>&copy; 2023 MyShop. All rights reserved.</p>
    </footer>
</body>
</html>
