<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){

    //retrieve form data 

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database Connection 

    $host = "localhost";
    $dbemail = "root";
    $dbpassword = "";
    $dbname = "gestion_hôtel";

    //$conn = new mysqli($host,$dbemail,$dbpassword,$dbname);
    $conn = new PDO('mysql:dbname=gestion_hôtel;host=localhost','root','');



    // validate login authentification
    $sql = "SELECT * FROM `users` WHERE email =? AND password=?";

    $recipesStatement = $conn->prepare($sql);
    $recipesStatement->execute(array($email,$password));
    $res = $recipesStatement->fetch();

    if($res){
        // Login success
        header("location: ../views/status.php");
        
    }
    else{
        // Login failed
        header("location: index.php?repons=false");

    
    }

}

?>