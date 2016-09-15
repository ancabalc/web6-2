<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'helpers/ajax_response.php';
echo APPPATH;

class Application extends CI_Controller {
    
    public function view(){
        require APPPATH . "models/applicationsmodel.php";

        $data['title'] = 'CREARE CERERE';
        $data['pageContent'] = "cerereview.php";
        $data['categories'] = $this->categories();

        $this -> load -> view('layout', $data);
    }

    public function create() {
        require APPPATH . "models/applicationsmodel.php";

        $data['title'] = 'CREARE CERERE';
        $data['pageContent'] = "cerereview.php";
        $data['categories'] = $this->categories();

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
}