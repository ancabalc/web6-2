<?php    

    define("MySQL_USER", "root");
    define("MySQL_PASSWORD", "");
    define("MySQL_DB_NAME", "db");
    define("MySQL_HOST", "localhost");
   
    class DB {
        protected $dbh;
        
        function __construct() {
            try {
                // Set connection on class property
                $this->dbh = new PDO('mysql:host='.MySQL_HOST.';dbname=' . MySQL_DB_NAME, MySQL_USER, MySQL_PASSWORD);     
            } catch (PDOException $e) {
                print "Error!: Cannot connect to db! Check connection " . $e->getMessage() . "<br/>";
                die();
            }    
        }
?>