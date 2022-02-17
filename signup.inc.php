<?php

if (isset($_POST["submit"])) {

    // grabbing the data
    $userName = $_POST["userName"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];
    $email = $_POST["email"];

    //instantiate SignupController
    include "classes/Signup.php";
    include "classes/SignupController.php";

    $signup = new SignupController($userName, $password, $passwordRepeat, $email);
}