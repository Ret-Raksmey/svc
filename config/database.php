<?php 

    class Database{

        public static function connection(){
            $conn = new mysqli('localhost','root','','mvc-project');
            if($conn->connect_error){
                die('Database fail: '.$conn->connect_error);
            }
            return $conn;
        }
        
    }

?>