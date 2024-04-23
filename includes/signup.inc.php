<?php

    if($_SESSION["REQUEST_METHOD"] === "POST") {
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];
        $email = $_POST["email"];

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

        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage())
        }
    } else {
        header("Location: ../index.php");
        die();
    }