<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'helpers/ajax_response.php';
require APPPATH.'models/applicationsmodel.php';

class Application extends CI_Controller {
    
    function index(){
        
        $data['title'] = 'Aplications';
        $data['pageContent'] = "applicationview.php";
        
        $this -> load -> view('layout', $data);
    }

    function view(){
        $data['title'] = 'Create application';
        $data['pageContent'] = "cerereview.php";
        $data['categories'] = $this->categories();

        $this -> load -> view('layout', $data);
    }

    function create() {
        $expected_dt = array(
            'subject' => 'appSubject', 
            'description' => 'appDescription', 
            'category' => 'categoryId'
        );
        
        if(!empty($_POST)){
            foreach ($expected_dt as $name => $nref){
                if( !$_POST[$nref] or 
                    ( $nref == 'categoryId' && $_POST[$nref] = 0 )
                    ){
                    ob_clean();
                    http_response_code(400);
                    sendResponseToJSON(array("message"=>"Incomplete data provided for ". $name ."!"));
                }
            }

            $appModel = new ApplicationModel();
            
            $outcome = $appModel->saveApplication($_POST);
            if(!$outcome){
                ob_clean();
                http_response_code(500);
                sendResponseToJSON(array("message"=>"Failed to save application!"));
            }
            else {
                ob_clean();
                http_response_code(200);
                sendResponseToJSON(array("message"=>"Application saved succesfully !"));
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
    
    function getAppByCat(){
        $appModel = new ApplicationModel();
        $applications = $appModel-> getApplicationsByCateg($_POST['categories']);
            
        sendResponseToJSON($applications);
    }
    
    function user_applications () {
        $applicationModel = new ApplicationModel();
        $list = $applicationModel->getApplicationsByUser(1);
        var_dump($list);
    }
    
}
