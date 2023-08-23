<?php
    class Database {
        public function dbConnect() {        
            static $DBH = null;      
            if (is_null($DBH)) {              
			    $connection = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
                
			    if($connection->connect_error){
				    die("Error failed to connect to MySQL: " . $connection->connect_error);
			    } else {
				    $DBH = $connection;
			    }

                #try {
                #    $connection = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
                #}
                #catch (mysqli_sql_exception $e) {
                #    throw $e;
                #}

            }
            return $DBH;
        }
    }
?>