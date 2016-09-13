<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
    
    function create() {
        
        
        // require APPPATH.'models/usersmodel.php';
        // $usersModels = new UsersModel();
        //$usersModels->addUser($_POST);
        
        $data['title'] = 'CREATE ACCOUNT';
        $data['pageContent'] = "createview.php";
        $this -> load -> view('layout', $data);
    }
    
    function login_user() {
        $data['title'] = 'LOGIN';
        $data['pageContent'] = "loginview.php";
        $this -> load -> view('layout', $data);
    }
    
    function createAccount(){
        
        $name = $email = $county = $pass = $repass = "";
        // $nameErr = $emailErr = $countyErr = $passErr =$repassErr= "";
        
        $errors = array();
        
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if (empty($_POST["name"])) {
                $errors['name'] = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                    $errors['name'] = "Only letters and white space allowed"; 
                }
            }
            
            if (empty($_POST["email"])) {
                $errors['email'] = "Email is required";
              }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "Email must contain @ and a valid country extension!";
              } else {
                // // $email = preg_match("/.+@.+/",$_POST["email"]);
                // // $email = (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
                //  $email = valid_email($_POST['email']);
                
              }
            
           
            if (empty($_POST["county"])) {
                $errors['county'] = "County is required";
            } else {
                $county = test_input($_POST["county"]);
            }
            
             if (empty($_POST["password"])) {
                $errors['pass']= "Password is required";
            } else {
                $pass = preg_match("regex",$_POST["password"]);
            }
            if (empty($_POST["repassword"])) {
                $errors['repass']= "Please retype your password!";
            } else {
                $pass = preg_match("regex",$_POST["password"]);
            }
            
            // echo json_encode($errors);
            // sendResponseToJSON($errors);
        }
            
    }
}

function test_input($data) {
    
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    
}