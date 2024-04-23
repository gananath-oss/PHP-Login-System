<?php

    declare(strict_types=1);

    function is_input_empty(srting $username, srting $pwd, srting $email) {
        if(empty($username) || empty($pwd) || empty($email)) {
            return true;
        } else {
            return false;
        }
    }

    function is_email_invalid(srting $email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        } else {
            return false;
        }
    }

    function is_username_taken(object $pdo, srting $username) {
        if(get_username($pdo, $username)) {
            return true;
        } else {
            return false;
        }
    }

    function is_email_registerd(object $pdo, srting $email) {
        if(get_email($pdo, $email)) {
            return true;
        } else {
            return false;
        }
    }