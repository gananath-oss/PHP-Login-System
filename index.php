<?php 
    require_once "includes/config_session.inc.php";
    require_once "includes/signup_view.inc.php";
?>

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
            <?php
                signup_data();
            ?>
            <button>Signup</button>
        </form>
    </div>

    <?php 
        check_signup_errors();
    ?>
</body>
</html>