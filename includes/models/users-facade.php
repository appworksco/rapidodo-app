<?php

class UsersFacade extends DBConnection
{

    function fetchUsers()
    {
        $sql = $this->connect()->prepare("SELECT * FROM users");
        $sql->execute();
        return $sql;
    }

    function fetchUserById($userId)
    {
        $sql = $this->connect()->prepare("SELECT * FROM users WHERE id = ?");
        $sql->execute([$userId]);
        return $sql;
    }

    function fetchPasswordByEmail($email)
    {
        $sql = $this->connect()->prepare("SELECT password FROM users WHERE email = ?");
        $sql->execute([$email]);
        return $sql;
    }

    function verifyEmail($email)
    {
        $sql = $this->connect()->prepare("SELECT email FROM users WHERE email = ?");
        $sql->execute([$email]);
        $count = $sql->rowCount();
        return $count;
    }

    function verifyEmailAndPassword($email, $password)
    {
        $sql = $this->connect()->prepare("SELECT email, password FROM users WHERE email = ? AND password = ?");
        $sql->execute([$email, $password]);
        $count = $sql->rowCount();
        return $count;
    }

    function signUp($name, $rapidodoPoints, $email, $password, $emailVerificationCode)
    {
        $sql = $this->connect()->prepare("INSERT INTO users (name, rapidodo_points, email, password, email_verification_code) VALUES (?, ?, ?, ?, ?)");
        $sql->execute([$name, $rapidodoPoints, $email, $password, $emailVerificationCode]);
        return $sql;
    }

    function isEmailVerified($emailVerificationCode)
    {
        $sql = $this->connect()->prepare("UPDATE users SET is_email_verified = 1 WHERE email_verification_code = '$emailVerificationCode'");
        $sql->execute();
        return $sql;
    }

    function signIn($email, $password)
    {
        $sql = $this->connect()->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $sql->execute([$email, $password]);
        return $sql;
    }

    function deactivateAccount($userId) {
        $sql = $this->connect()->prepare("DELETE FROM users WHERE id = '$userId'");
        $sql->execute();
        return $sql;
    }

    function saveChanges($name, $mobileNumber, $userId)
    {
        $sql = $this->connect()->prepare("UPDATE users SET name = '$name', mobile_number = '$mobileNumber' WHERE id = '$userId'");
        $sql->execute();
        return $sql;
    }

    function changePassword($newPassword, $userId)
    {
        $sql = $this->connect()->prepare("UPDATE users SET password = '$newPassword' WHERE id = '$userId'");
        $sql->execute();
        return $sql;
    }
   
}
