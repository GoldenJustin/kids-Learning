<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <style>
        /* login.css */
body {
    background-color: #f8fafc;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
}

form {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

form .block {
    margin-bottom: 1rem;
}

form label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
}

form input[type="email"],
form input[type="password"] {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #d1d5db;
    border-radius: 4px;
    margin-top: 0.5rem;
}

form .mt-4 {
    margin-top: 1rem;
}

form .flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

form .ms-3 {
    margin-left: 0.75rem;
}

form .text-gray-600 {
    color: #4b5563;
}

form .text-gray-600:hover {
    color: #1f2937;
}

form .text-indigo-600 {
    color: #4f46e5;
}

form .rounded-md {
    border-radius: 0.375rem;
}

form .focus\:ring-indigo-500:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
    box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.5);
}

form button {
    background-color: #4f46e5;
    color: white;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

form button:hover {
    background-color: #4338ca;
}

    </style>
    <div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="block">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                @error('email')
                    <div class="mt-2 text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="block mt-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
                @error('password')
                    <div class="mt-2 text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="block mt-4 form-check">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                <label for="remember_me" class="inline-flex items-center ms-2 text-sm text-gray-600">Remember me</label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif

                <button type="submit" class="btn btn-primary ms-3">
                    Log in
                </button>
            </div>
        </form>
    </div>
</body>
</html>
