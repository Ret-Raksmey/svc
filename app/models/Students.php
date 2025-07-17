<?php 
    require_once 'config/database.php';
    class Students{

        private $conn;

        public function __construct()
        {
            $this->conn = Database::connection();
        }

        public function create($name,$gender,$tel){

            $stmt = $this->conn->prepare("INSERT INTO `students`(`name`, `gender`, `tel`) VALUES (?,?,?)");
            $stmt->bind_param("sss",$name,$gender,$tel);
            return $stmt->execute();
            // return $this->conn->query("INSERT INTO `students`(`name`, `gender`, `tel`) VALUES (`$name`,`$gender`,`$tel`)");

        }

    }

?>