<?php
    require_once("../models/MOUsuario.php");
    require_once("../data/DAOUsuario.php");

    $data = new DAOUsuario();

    $users = $data->list();
    
        
?>