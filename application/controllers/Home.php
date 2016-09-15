<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    function index() {
        
        
        // require APPPATH.'models/usersmodel.php';
        // $usersModels = new UsersModel();
        
        $data['title'] = 'Search Services';
        $data['pageContent'] = 'homeview.php';
        $this -> load -> view('layout', $data);
    }
}
