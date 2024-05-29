<?php
    require_once("../../../config.php");
    function getUsers()
    {
        $db =DbConnection();
        return $db->query("SELECT u.id,u.email,u.password,em.Nom FROM users u INNER JOIN employe em on u.employe_id =em.ID_Employe")->fetchAll(PDO::FETCH_OBJ);

    }