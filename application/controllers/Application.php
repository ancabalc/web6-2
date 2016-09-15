<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'helpers/ajax_response.php';
require APPPATH.'models/applicationsmodel.php';

class Application extends CI_Controller {
    
    public function index(){
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $this->view();
        }
        elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->create();
        }
    }
    
    function view(){
        $data['title'] = 'Create application';
        $data['pageContent'] = "cerereview.php";
        $data['categories'] = $this->categories();

        $this -> load -> view('layout', $data);
    }

    function create() {

        if(!empty($_POST)){

            foreach ($_POST as $key => $value) {
                if( !$value ){
                    ob_clean();
                    
                    http_response_code(500);
                    header('Content-Type: application/json');
                    $res = json_encode(array("error"=>"Failed to save application!"));
                    echo $res;
                }
            }

            $appModel = new ApplicationModel();
            
            $outcome = $appModel->saveApplication($_POST);
            if(!$outcome){
                echo 'complain';
            }
        }
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
