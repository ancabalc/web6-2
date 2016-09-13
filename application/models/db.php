<?php
    class DB {
        protected $dbh;
        
        function __construct() {
            $CI =& get_instance();

            try {
                $this->dbh = new PDO('mysql:host=' . $CI->config->item('hostname') .';dbname=' . $CI->config->item('database'), $CI->config->item('username'), $CI->config->item('password'));
            } catch (PDOException $e) {
                print "Error!:" . $e->getMessage() . "<br/>";
            die();
            }
        }
    }
    
?>