<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {
    
    function create() {
         
    }
    
    function user_applications () {
        require APPPATH.'models/applicationsmodel.php';
        $applicationModel = new ApplicationModel();
        $list = $applicationModel->getApplicationsByUser(1);
        var_dump($list);
    }
    
    
    
    
}