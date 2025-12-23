<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - MyShop</title>
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
                <li><a href="{{ url('/register') }}">Register</a></li>
                <li><a href="{{ url('/login') }}">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="register">
            <h1>Register</h1>
            @if($errors->any())
                <div style="color: red;">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('success'))
                <p style="color: green;">{{ session('success') }}</p>
            @endif
            <form action="{{ url('/register') }}" method="post">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
                <button type="submit">Register</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 MyShop. All rights reserved.</p>
    </footer>
</body>
</html>
