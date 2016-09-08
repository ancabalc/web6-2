<?php
// The first line exists to make sure the file cannot be included and ran from outside the CodeIgniter scope.
//Everything after this is self explanatory.
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('sendResponseToJSON')){
    
    function sendResponseToJSON($response) {
        header('Content-Type: application/json');
     
        try {
            $res = json_encode($response);
        } catch(Exception $e) {
            $res = json_encode(array("error"=>"Invalid response")); 
        }
     
        echo $res;
        die();
        }
}

function test_input($data) {
    
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    
}