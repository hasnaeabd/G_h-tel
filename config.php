<?php 
function DbConnection(){
    try{
        $pdo = new PDO('mysql:dbname=gestion_hôtel;host=localhost','root','');
        return $pdo ;
    }catch(PDOException $e) {
        echo "Database connection failed: " . $e->getMessage();
    }
}
?>