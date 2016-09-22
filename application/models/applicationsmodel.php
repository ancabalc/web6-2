<?php
require "db.php";

class ApplicationModel extends DB {
  
  function saveApplication($data) {
    $params = [
      ':user_id' => 1, #expecting user id from login
      ':title' => $data['appSubject'],
      ':description' => $data['appDescription'],
      ':category_id' => $data['categoryId'],
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

  // function getAll(){
    
  //   $sql = 'SELECT * FROM applications WHERE active = 1';
  //   $sth = $this->dbh-> prepare($sql);
  //   $sth->execute();
    
  //   return $sth->fetchAll(PDO::FETCH_ASSOC);

  // }
  

   function getApps($filters) {
     
    $ids = (!empty($filters['categories']))? implode(",",$filters['categories']): '';
    $categories = (!empty($filters['categories']))? "and category_id in($ids)":"";
    $city = (!empty($filters['localitate']))? "and city_id =".$filters['localitate']:''; 
    
    $sql = "select * from applications where active = 1 $categories $city";
    // echo $sql;

    $sth = $this->dbh->prepare($sql);
    $result = $sth->execute($params);
    
    return $sth->fetchAll(PDO::FETCH_ASSOC);
  } 
    
}//class end