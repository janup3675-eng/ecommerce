<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Home</title>
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
    <section class="hero">
        <h1>Welcome to MyShop</h1>
        <p>Your one-stop shop for amazing products</p>
    </section>
    <section class="products">
        <h2>Featured Products</h2>
        <div class="product-list">
            <div class="product">
                <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=400&h=300&fit=crop" alt="Laptop">
                <h3>Laptop</h3>
                <p>$999.00</p>
            </div>
            <div class="product">
                <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=400&h=300&fit=crop" alt="Smartphone">
                <h3>Smartphone</h3>
                <p>$599.00</p>
            </div>
            <div class="product">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400&h=300&fit=crop" alt="Headphones">
                <h3>Headphones</h3>
                <p>$149.00</p>
            </div>
            <div class="product">
                <img src="https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?w=400&h=300&fit=crop" alt="Tablet">
                <h3>Tablet</h3>
                <p>$399.00</p>
            </div>
            <div class="product">
                <img src="https://images.unsplash.com/photo-1502920917128-1aa500764cbd?w=400&h=300&fit=crop" alt="Camera">
                <h3>Camera</h3>
                <p>$799.00</p>
            </div>
            <div class="product">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400&h=300&fit=crop" alt="Watch">
                <h3>Watch</h3>
                <p>$299.00</p>
            </div>
            <div class="product">
                <img src="https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=400&h=300&fit=crop" alt="Keyboard">
                <h3>Keyboard</h3>
                <p>$79.00</p>
            </div>
            <div class="product">
                <img src="https://images.unsplash.com/photo-1527814050087-3793815479db?w=400&h=300&fit=crop" alt="Mouse">
                <h3>Mouse</h3>
                <p>$49.00</p>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2023 MyShop. All rights reserved.</p>
    </footer>
</body>
</html>
