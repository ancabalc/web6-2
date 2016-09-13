<?php

    require_once 'db.php';

    class ProviderModel extends DB {
        function pushUser(){
            $params = [':id'=>$id, ':submit'=>$picture, ':description'=>$description];
            $sql = 'INSERT INTO users(picture, descrition) VALUES(:submit, :description)';
            $sth = $this->dbh->prepare($sql);
            $sth->execute($params);
            
            return $sth->fetch(PDO::FETCH_ASSOC);    
        }
        
    }
    
?>