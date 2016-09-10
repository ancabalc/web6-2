<?php    


    class DB {
        protected $dbh;
        
        function __construct() {
             $CI =& get_instance();
             $CI->load->database();
            try {
               $this->dbh = new PDO('mysql:host=' . $CI->db->hostname .';dbname=' . $CI->db->database, $CI->db->username, $CI->db->password);
            } catch (PDOException $e) {
                print "Error!:" . $e->getMessage() . "<br/>";
            die();
            }
        }
    }
    

           
        
?>