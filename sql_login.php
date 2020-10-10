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
            if($_SERVER['REQUEST_METHOD'] == 'POST') //has the user submitted the form
            {
                $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password); //building a new connection object
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                
                $player_tag = $_POST['player_tag']; // email the user submitted from $_POST
                $player_password = $_POST['player_password']; // password the user submitted from $_POST
                
                //preparing an sql statement to seach user_email and user_password for whatever the user has typed
                $sql = $conn->prepare("SELECT * FROM players WHERE player_tag = ? AND player_password = ?");
                $sql -> bindValue(1, "$player_tag"); //we bind this variable to the first ? in the sql statement
                $sql -> bindValue(2, "$player_password"); //we bind this value to the second ? in the sql statement
                $sql -> execute(); //execute the statement
                
                if($sql->rowCount()) 
                { 
                        $row = $sql->fetch();
                        
                        if ($row['user_type'] == 'admin') 
                        {

                            $_SESSION['login'] = "admin";
                            $_SESSION['player_id'] = $row ['player_id'];
                            header("Location: admin_index.php");

                        }
                        elseif ($row['user_type'] == 'user')
                        {

                            $_SESSION['login'] = "admin";
                            $_SESSION['player_id'] = $row ['player_id'];
                            header("Location: user_index.php");
                        }
                }     
                        else
                            {
                                echo 'Username and / or password incorrect'; //message to display if we did not match a user
                            }
                
            }
            else 
            {
                echo "You're here by mistake";
            }
        }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage(); //If we are not successful in connecting or running the query we will see an error
            }
        ?>


</body>
</html>