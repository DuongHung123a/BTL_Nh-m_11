<?php
require_once 'config/connDB.php';
class User{
    public static function authenticate($username, $password){
        $db = connDB::getConnection();
        $stmt = $db->prepare("SELECT * FROM users WHERE username =? ");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if($user && $password === $user['password']){
            return $user;
        }
        return false;
    }
}
