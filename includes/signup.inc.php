<?php

    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $username = $_GET["username"];
        $pwd = $_GET["pwd"];
        $email = $_GET["email"];

        try {
            require_once "dbh.inc.php";
            require_once "signup_model.inc.php";
            require_once "signup_contr.inc.php";

            // ERROR HANDLERS
            $errors = [];

            if(is_input_empty($username, $pwd, $email)) {
                 $errors["empty_input"] = "Fill in all fields!";
            } 
            if(is_email_invalid($email)){
                $errors["invalid_email"] = "Invalied email used!";
            } 
            if(is_username_taken($pdo, $username)){
                $errors["username_taken"] = "Username already taken!";
            }
            if(is_email_registerd($pdo, $email)){
                $errors["email_used"] = "E-mail already registered!";
            }

            require_once "config_session.inc.php";

            if($errors) {
                $_SESSION["errors_signup"] = $errors;
                header("Location: ../index.php");
                die();
            }

            create_user($pdo, $username, $pwd, $email);

            header("Location: ../index.php?signup=success");
            
            $pdo = null;
            $stmt = null;
         
            die();

        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    } 
    else {
        header("Location: ../index.php");
        die();
    }
