<?php 

    class Database{

        public static function connection(){
            $conn = new mysqli('localhost:3307','root','','first_svm');
            if($conn->connect_error){
                die('Database fail: '.$conn->connect_error);
            }

            
            return $conn;
        }

    }

?>