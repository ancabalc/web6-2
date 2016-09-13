<?php
// require "db.php";

class CategoriesModel extends DB{
// class CategoriesModel{
    
    function getCategories(){

        $sql = 'SELECT `title` FROM categories';
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        
        return $sth->fetchAll(PDO::FETCH_ASSOC);    
    }
}