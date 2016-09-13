<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'models/applicationsmodel.php';
require APPPATH.'helpers/ajax_response.php';

class Application extends CI_Controller {
    

    function create() {

    }
    
    
    
    function getAll(){
        $appModel = new ApplicationModel();
        
        $applications = $appModel-> getAll();
        
        sendResponseToJSON($applications);

    }
    
    
}