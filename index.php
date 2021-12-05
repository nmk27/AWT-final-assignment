<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="css/login.css">

    <title>Login</title>
</head>

<body>
    <div class="loginbox">
        <img src="images/user.png" alt="user" class="avatar">
        <h1>Login Here</h1>
        <form action="index.html">
            <p>Registration Number</p>
            <input type="text" id="regno" required>
            <p>Password</p>
            <input type="password" id="password" required>
            <input type="submit" name="" value="Login" onclick="validate()">
        </form>
    </div>
    <script src="js/validate.js"></script>
</body>

</html>