<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Login</h3>
    <div>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="username" placeholder="User Name">
            <input type="password" name="pwd" placeholder="Password">
            <button>Login</button>
        </form>
    </div>

    <h3>Signup</h3>
    <div>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="username" placeholder="User Name">
            <input type="password" name="pwd" placeholder="Password">
            <input type="text" name="email" placeholder="E-mail">
            <button>Signup</button>
        </form>
    </div>
</body>
</html>