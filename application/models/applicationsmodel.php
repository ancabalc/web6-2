<?php

require "db.php";

class ApplicationModel extends DB{
    
  function getAll(){
    
    $sql = 'SELECT * FROM applications WHERE active = 1';
    $sth = $this->dbh-> prepare($sql);
    $sth->execute();
    
    return $sth->fetchAll(PDO::FETCH_ASSOC);

  }
    
}//class end