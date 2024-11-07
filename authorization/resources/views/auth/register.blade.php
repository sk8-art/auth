<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <lable for="name">Name:</lable>
        <input type="text" name="name" id="name" required>
        <br>
        <lable for="email">Email:</lable>
        <input type="email" name="email" id="email" required>
        <br>
        <lable for="password">Password:</lable>
        <input type="password" name="password" id="password" required>
        <br>
        <lable for="password_confirmation">Confirm Password:</lable>
        <input type="password" name="password_confirmation" id="password_confirmation" required>

        <button type="submit">Register</button>
    </form>    
</body>
</html>