<?php
defined('BASEPATH') OR exit('No direct script access allowed');

var_dump($_POST);
// var_dump($_SERVER);

class Application extends CI_Controller {

    public function create() {
        require APPPATH . "models/applicationsmodel.php";

        $data['title'] = 'CREARE CERERE';
        $data['pageContent'] = "cerereview.php";
        $data['categories'] = $this->categories();

        var_dump($data['categories']);

        $this -> load -> view('layout', $data);
    }
    
    function categories() {
        require APPPATH . "models/categoriesmodel.php";
     
        $categoriesModel = new CategoriesModel();
        $result = $categoriesModel->getCategories();
        
        return $result;
    }
}