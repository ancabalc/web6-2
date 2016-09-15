<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'helpers/ajax_response.php';

class Application extends CI_Controller {
    
    public function create() {
        require APPPATH . "models/applicationsmodel.php";

        $data['title'] = 'CREARE CERERE';
        $data['pageContent'] = "cerereview.php";
        $data['categories'] = $this->categories();

        var_dump($data['categories']);

        $this -> load -> view('layout', $data);
    }
    

    function index(){
        
        $data['title'] = 'Aplications';
        $data['pageContent'] = "applicationview.php";
        
        $this -> load -> view('layout', $data);
    }
    

    function categories() {
        require APPPATH . "models/categoriesmodel.php";
     
        $categoriesModel = new CategoriesModel();
        $result = $categoriesModel->getCategories();
        
        return $result;
    }


    function getAll(){
        $appModel = new ApplicationModel();
        
        $applications = $appModel-> getAll();
        
        sendResponseToJSON($applications);

    }
    
    function user_applications () {
        require APPPATH.'models/applicationsmodel.php';
        $applicationModel = new ApplicationModel();
        $list = $applicationModel->getApplicationsByUser(1);
        var_dump($list);
    }
    
}
