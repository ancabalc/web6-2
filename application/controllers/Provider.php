<?php
class Provider extends CI_Controller {
    
  function view_user() {
        $data['title'] = 'view provider';
       $data['pageContent'] = "providerview.php";
       $this -> load -> view('layout', $data);
        
   }
}

?>