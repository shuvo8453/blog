<?php

namespace App\controller;

use Database\DB;

class InformationController
{
    public static function update($name, $email, $oldPassword, $password)
    {
            //1. get user from session email
        $session_email = "'{$_SESSION['email']}'";

            //2. get user data from db
        $query = DB::connection()->prepare("SELECT * FROM users WHERE email = {$session_email}");
        $query->execute();
        $user = $query->fetch();

            //3. update name and email
        if (!empty($name)){
            $_SESSION['name'] = $name;
            $name ="'{$name}'";
            DB::connection()->exec("UPDATE users SET name = {$name} WHERE id = {$user['id']}");
        }
        if (!empty($email)){
            $_SESSION['email'] = $email;
            $email ="'{$email}'";
            DB::connection()->exec("UPDATE users SET email = {$email} WHERE id = {$user['id']}");
        }
            //4. check old password
        if (!empty($password) && !empty($oldPassword)){
            if ($user['password'] == sha1($oldPassword)){
                $password = sha1($password);
                $password = "'{$password}'";
                DB::connection()->exec("UPDATE users SET password = {$password} WHERE id = {$user['id']}");
            }
        }
    }
}