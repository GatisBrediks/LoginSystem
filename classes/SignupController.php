<?php

class SignupController
{
    private $userName;
    private $password;
    private $passwordRepeat;
    private $email;

    public function __construct($userName, $password, $passwordRepeat, $email)
    {
        $this->userName = $userName;
        $this->password = $password;
        $this->passwordRepeat = $passwordRepeat;
        $this->email = $email;
    }

    private function emptyInput(): bool
    {
//        $result;
        if(empty($this->userName) || empty($this->password) || empty($this->passwordRepeat) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUsername(): bool
    {
//        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->userName)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(): bool
    {
//        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function passwordMatch(): bool
    {
//        $result;
        if($this->password !== $this->passwordRepeat) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}