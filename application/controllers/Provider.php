<?php

require APPPATH . "models/providermodel.php";

class Provider extends CI_Controller {
    
  function view_user() {
        $data['title'] = 'view provider';
       $data['pageContent'] = "providerview.php";
       $this -> load -> view('layout', $data);
        
   }
   
  function offers_list(){
    $data['title'] = 'Offers list';
    $data['pageContent'] = "offersview.php";
    $this -> load -> view('layout', $data);
  }
  function getOffers(){
    $providerModel = new ProviderModel();
    $offers = $providerModel-> getOffers();
        
    sendResponseToJSON($offers);
  
}
};

?>