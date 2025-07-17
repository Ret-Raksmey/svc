<?php 

    class StudentControllers{

        public function index(){
            $title = 'Student List';
            $views = 'app/views/index.php';
            include 'app/views/layout.php';
        }

        public function create(){
            $title = 'Create Student';
            $views = 'app/views/create.php';
            include 'app/views/layout.php';
        }

        public function update($id){
            $title = 'Update Student';
            $views = 'app/views/edit.php';
            include 'app/views/layout.php';
        }
    }

?>