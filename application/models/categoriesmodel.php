<?php

class CategoriesModel extends DB{

    function getCategories(){

        $sql = 'SELECT * FROM categories';
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        
        return $sth->fetchAll(PDO::FETCH_ASSOC);    
    }
}