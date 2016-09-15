<?php


require APPPATH . "models/providermodel.php";


class Provider extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('providerview', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('providerview', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('providerviewsucces', $data);
                }
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
}

// class Provider extends CI_Controller {
    
//     function view_user() {
//         $data['title'] = 'view provider';
//         $data['pageContent'] = "providerview.php";
//         $this -> load -> view('layout', $data);
//     }
// }

?>