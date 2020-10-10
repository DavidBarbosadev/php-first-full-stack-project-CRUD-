<?php

// php delete data in mysql database using PDO

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

    $pdoQuery = "DELETE FROM `matches` WHERE `match_id` = :id";
    
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":id"=>$id));
    
    if($pdoExec)
    {
        header('Location: admin_index.php');
    }else{
        echo 'ERROR Data Not Deleted';
    }

}

?>