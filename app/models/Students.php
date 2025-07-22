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
            return $result;
        }

        public function getAll(){
            return $this->conn->query("SELECT * FROM students")->fetch_all(MYSQLI_ASSOC);
        }

        // Add this method to get a single student by ID for editing
        public function getById($id){
            $stmt = $this->conn->prepare("SELECT * FROM `students` WHERE `id` = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_assoc();
        }

        // Add this method to update a student
        public function update($id, $name, $gender, $tel){
            $stmt = $this->conn->prepare("UPDATE `students` SET `name` = ?, `gender` = ?, `tel` = ? WHERE `id` = ?");
            $stmt->bind_param("sssi", $name, $gender, $tel, $id);
            return $stmt->execute();
        }

        public function delete($id){
            $stmt = $this->conn->prepare("DELETE FROM `students` WHERE id = ?");
            $stmt->bind_param("i", $id);
            return $stmt->execute();
        }
}
?>