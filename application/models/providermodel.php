<?php

    require_once 'db.php';

    class ProviderModel extends DB {
        // function pushUser(){
        //     $params = [':id'=>$id, ':submit'=>$picture, ':description'=>$description];
        //     $sql = 'INSERT INTO users(picture, descrition) VALUES(:submit, :description)';
        //     $sth = $this->dbh->prepare($sql);
        //     $sth->execute($params);
        //     return $sth->fetch(PDO::FETCH_ASSOC);    
        // }

        
        // function getUser(){
        //     $params = [':id'=>$id, ':name'=>$name, 'town'=>$town, ':description'=>$description, ':submit'=>$picture];
        //     $sql = 'SELECT name, town, email, description, picture FROM users where role = provider';
        //     $sth = $this->dbh->prepare($sql);
        //     $result = $sth->execute($params);
        //     return $sth->rowCount();
            
            
        // }
    
        function getOffers(){
            $sql = 'SELECT * from offers where active = 1';
            $sth = $this->dbh->prepare($sql);
            $sth->execute();
            
            return $sth->fetchAll(PDO::FETCH_ASSOC);  
        }
        
        // Delete article by id
        function deleteOffer($id) {
            $params = [':id' => $id]; 
            $sql = 'UPDATE offers SET active = 0 WHERE id = :id';
            $sth = $this->dbh->prepare($sql);
            $sth->execute($params);
            return $sth->rowCount(); 
        }
    }
    
?>