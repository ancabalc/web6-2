<?php

    require_once 'db.php';

    class UserModel extends DB {
    	
        function addUser($user) {
            $params = [':name' => $user["name"], ':address' => $user["address"], ':city' => $user["city"], ':email' => $user["email"], ':password' => $user["password"]], ':role' => $user["role"]; 
            $sql = 'INSERT INTO users(name, address, city, email, password, role) VALUES(:name, :address, :city, 	:email, :password, :role)';
            $sth = $this->dbh->prepare($sql);
            $result = $sth->execute($params);
            return $sth->rowCount();
        }
    
    }
 ?>