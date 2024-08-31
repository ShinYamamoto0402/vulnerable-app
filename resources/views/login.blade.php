<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container">
        <h1>Login</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                @if ($errors->has('email'))
                <div class="form-error-message">{{ $errors->first('email') }}</div>
                @endif
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                @if ($errors->has('password'))
                <div class="form-error-message">{{ $errors->first('password') }}</div>
                @endif
                <input type="password" id="password" name="password" required>
            </div>

            <div class="btn-group">
                <button type="submit" class="btn">Login</button>
            </div>
        </form>

        <div class="form-footer">
            <a href="{{ route('registerForm') }}">Register</a>
        </div>
    </div>
</body>

</html>