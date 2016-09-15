<?php
require "db.php";

class ApplicationModel extends DB {
  
  function saveApplication($data) {
    $params = [
      ':user_id' => 1, #expecting user id from login
      ':title' => $data['appSubject'],
      ':description' => $data['appDescription'],
      ':category_id' => $data['selectCategory'],
      ':active' => 1
    ];
    $sql = 'insert into applications 
    (user_id, title, description, category_id, active) 
    values 
    (:user_id, :title, :description, :category_id, :active)';
    $sth = $this->dbh->prepare($sql);
    $result = $sth->execute($params);

    return $result;
  }
    
  function getApplicationsByUser($id) {
    $params = [':id' => $id]; 
    $sql = 'select * from applications where id=:id';
    $sth = $this->dbh->prepare($sql);
    $result = $sth->execute($params);
    return $sth->fetchAll(PDO::FETCH_ASSOC);
  } 
    
}