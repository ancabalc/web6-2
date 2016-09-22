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
        
        // LIST offers
        
        function getOffers(){
            $sql = 'SELECT 
                    offers.details,
                    users.name,
                    categories.title as category,
                    offers.price,
                    offers.time
                    FROM offers 
                    INNER JOIN users ON users.id = offers.user_id  
                    INNER JOIN categories ON offers.category_id = categories.id
                    WHERE active = 1';
            $sth = $this->dbh->prepare($sql);
            $sth->execute();
            
            return $sth->fetchAll(PDO::FETCH_ASSOC);  
        }
        
        // ADD offer
        
        function addOffer($offer) {
            $params = [':details' => $offer["details"], ':category_id' => $offer["category_id"], ':price' => $offer["price"], ':price' => $offer["price"]]; 
            $sql = "INSERT INTO offers(details, category_id, price) VALUES (:details, :category_id, :price)";
            $sth = $this->dbh->prepare($sql);
            $result = $sth->execute($params);
            return $sth->rowCount();
        }
        
    }
    
?>