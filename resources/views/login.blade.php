<!DOCTYPE html>
<html>
<head>
    <title>Simple Login Form</title>
</head>
<body>

<h2>Login Form</h2>

<form method="POST" action="/login">
    @csrf
    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
    </div>
</form>

</body>
</html>
