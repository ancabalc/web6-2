<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    var_dump($_POST);

class Application extends CI_Controller {

    public function create() {

        $data['title'] = 'CREARE CERERE';
        $data['pageContent'] = "cerereview.php";
        $this -> load -> view('layout', $data);

        var_dump($_POST);
        var_dump($_SERVER);


    }
    
    
    
    
    
    
}