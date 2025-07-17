<?php

    require_once 'app/controllers/StudentControllers.php';
    
    $controller = new StudentControllers();
    $page = $_GET['page'] ?? 'index';

    $id = null;

    switch($page){
        case 'create':
            $controller->create();
            break;
        case 'edit':
            $controller->update($id);
            break;
        default:
            $controller->index();
            break;
    }

?>