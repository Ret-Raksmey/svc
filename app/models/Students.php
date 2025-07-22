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
        $result = $stmt->execute();
       
    }

    public function getAll(){
        return $this->conn->query("SELECT * FROM students")->fetch_all(MYSQLI_ASSOC);
       }
    

    public function delete($id){
        $stmt = $this->conn->prepare("DELETE FROM `students` WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>