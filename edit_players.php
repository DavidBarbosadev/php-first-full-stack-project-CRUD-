<?php
session_start(); // important function to allow session variables  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        
        //database connection variables for a typical local development
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "esports"; //database name that you have already created that you want to connect to
        
        try {
            if($_SERVER['REQUEST_METHOD'] == 'POST') //has the user submitted the form and edited their information
            {
                
                
                $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password); //building a new connection object
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $player_id = $_SESSION['player_id']; //the ID of the user we are logged in with
                $player_tag = $_POST['player_tag']; // email the user submitted from $_POST
                $player_firstname = $_POST['player_firstname']; // password the user submitted from $_POST
                $player_surname = $_POST['player_surname']; // firstname the user submitted from $_POST
                $player_password = $_POST['player_password']; // surname the user submitted from $_POST

                //preparing an sql statement to seach user_email and user_password for whatever the user has typed
                $sql = $conn->prepare("UPDATE players SET player_tag = ?, player_firstname = ?, player_surname = ?, player_password = ? WHERE player_id =?");
                $sql -> bindValue(1, "$player_tag"); //we bind this variable to the first ? in the sql statement
                $sql -> bindValue(2, "$player_firstname"); //we bind this value to the second ? in the sql statement
                $sql -> bindValue(3, "$player_surname"); //we bind this value to the third ? in the sql statement
                $sql -> bindValue(4, "$player_password"); //we bind this value to the fourth ? in the sql statement
                $sql -> bindValue(5, "$player_id"); //we bind this value to the where clause in the sql statement
                $sql -> execute(); //execute the statement

                echo "User details updated";
                header("Location: user_index.php");
            }
            else{
                $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password); //building a new connection object
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $player_id = $_SESSION['player_id']; //the ID of the user we are logged in with
                
                $sql = $conn->prepare("SELECT * FROM players WHERE player_id = ?");
                $sql -> bindValue(1, "$player_id"); //we bind this variable to the first ? in the sql statement

                $sql -> execute(); //execute the statement

                $row = $sql->fetch();  //create the array of database fields

                //storing the fields in loccal variables to use in the HTML form
                $player_tag = $row['player_tag'];
                $player_firstname = $row['player_firstname'];
                $player_surname = $row['player_surname'];
                //include the HTML form
                include "user_update_information.php";
            } 
            
        }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage(); //If we are not successful in connecting or running the query we will see an error
            }
        ?>


</body>
</html>