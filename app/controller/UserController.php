<?php

namespace App\controller;

use Database\DB;
use PDO;

class UserController
{
    public static function getUser(){
        $query = DB::connection()->query('SELECT * FROM users');
        return $query->fetch();
    }

    public static function login($email, $password){
        $data=[];
        if ($email != '' && $password != ''){
            $password = sha1($password);
            $query = DB::connection()->prepare("SELECT * FROM users WHERE email = :email and password = :password");

            // Bind variables to the prepared statement as parameters
            $query->bindParam(":email", $email, PDO::PARAM_STR);
            $query->bindParam(":password", $password, PDO::PARAM_STR);

            if ($query->execute()){
                if ($query->rowCount() == 1){
                    if ($row = $query->fetch()){
                        $data = $row;
                    }
                }
            }
            return $data;
//            var_dump($data);
        }
    }
}