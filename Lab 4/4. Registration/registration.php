<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$confirm = $_REQUEST['confirmpass'];
$gender = $_REQUEST['gender'];
$day = $_REQUEST['dd'];
$month = $_REQUEST['mm'];
$year = $_REQUEST['yyyy'];

if (str_contains($username, '!') || str_contains($username, '@') || str_contains($username, '#') || str_contains($username, '$') || str_contains($username, '%') || str_contains($username, '^') || str_contains($username, '&') || str_contains($username, '*') || str_contains($username, '(') || str_contains($username, ')') || str_contains($username, '-') || str_contains($username, '+') || str_contains($username, '=') || str_contains($username, '_') || str_contains($username, '{') || str_contains($username, '}') || str_contains($username, '[') || str_contains($username, ']') || str_contains($username, '/') || str_contains($username, '|') || str_contains($username, '?') || str_contains($username, '>') || str_contains($username, '<') || str_contains($username, ',') || str_contains($username, '.')) {
    echo "Username contains Invalid Character!";
} else if (strlen($username) < 2) {
    echo "Username must contaain atleast two character";
} else {
    if (strlen($password) < 8) {
        echo "Password must not be less than eight (8) characters
        !";
    } else if (!str_contains($password, '@') && !str_contains($password, '#') && !str_contains($password, '$') && !str_contains($password, '%')) {
        echo "Password must contain one of the special characters (@, #, $, %)";
    } else {
        if ($password != $confirm) {
            echo "Retyped password does not match with the new password!";
        } else {
            if (!str_contains($email, "@gmail.com") && !str_contains($email, "@yahoo.com") && !str_contains($email, "@outlook.com")) {
                echo "invalid email!";
            } else {
                if ($name == '') {
                    echo "Invalid name";
                } else {
                    if ($gender == '') {
                        echo "Invalid Gender!";
                    } else {
                        if ($day == ' ' || $month == '' || $year == '') {
                            echo "Invalid Date of Birth";
                        } else {
                            echo 'Login successful';
                        }
                    }
                }

            }
        }
    }
}


?>
