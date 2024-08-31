<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container">
        <h1>Register</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                @if ($errors->has('name'))
                <div class="form-error-message">{{ $errors->first('name') }}</div>
                @endif
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            </div>

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

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                @if ($errors->has('password_confirmation'))
                <div class="form-error-message">{{ $errors->first('password_confirmation') }}</div>
                @endif
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <label for="savings">Savings</label>
                @if ($errors->has('savings'))
                <div class="form-error-message">{{ $errors->first('savings') }}</div>
                @endif
                <input type="number" id="savings" name="savings" value="{{ old('savings') }}" required>
            </div>

            <div class="btn-group">
                <button type="button" onclick="window.location.href='{{ route('loginForm') }}'" class="btn-rtn">Back</button>
                <button type="submit" class="btn">Register</button>
            </div>
        </form>
    </div>
</body>

</html>