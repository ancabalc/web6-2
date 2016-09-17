<?php
require "db.php";

class ApplicationModel extends DB {
    


  function getApplicationsByUser($id) {
    $params = [':id' => $id]; 
    $sql = 'select * from applications where id=:id';
    $sth = $this->dbh->prepare($sql);
    $result = $sth->execute($params);
    return $sth->fetchAll(PDO::FETCH_ASSOC);
  } 

  function getAll(){
    
    $sql = 'SELECT * FROM applications WHERE active = 1';
    $sth = $this->dbh-> prepare($sql);
    $sth->execute();
    
    return $sth->fetchAll(PDO::FETCH_ASSOC);

  }
  
   function getApplicationsByCateg($id) {
    $ids = implode(",",$id);
    $sql = "select * from applications where category_id in($ids) and active = 1";
    $sth = $this->dbh->prepare($sql);
    $result = $sth->execute();
    
    return $sth->fetchAll(PDO::FETCH_ASSOC);
  } 
    
}//class end