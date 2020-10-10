<?php

// php delete data in mysql database using PDO

$servername = "localhost";
$username = "root";
$password = "";
$database = "esports";



if(isset($_POST['delete']))
{
    try {
        $pdoConnect = new PDO("mysql:host=localhost;dbname=esports","root","");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }

     // get id to delete

    $id = $_POST['id'];

     // mysql delete query 

    $pdoQuery = "DELETE FROM teams WHERE team_id = :id";

    $pdoResult = $pdoConnect->prepare($pdoQuery);

    $pdoExec = $pdoResult->execute(array(":id"=>$id));

    if($pdoExec)
    {
        echo 'Data Deleted';
        header('Location: admin_index.php');
    }else{
        echo 'ERROR Data Not Deleted';
    }

}

?>