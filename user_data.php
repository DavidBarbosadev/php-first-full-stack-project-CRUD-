<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="myorderstyle1.css">
    <link rel="stylesheet" href="style.css">
    <title>User Show Matches data</title>
</head>
<body>
<header>
    <nav>
        <div class="main-wrapper">
                <a href="user_index.php"><img src="user.png" alt="logo"></a>
                <h1>Matches Display</h1>
            </div>
        <div id="logout"><a href="logout.php"><b>Log out</b></a></div>

    </nav>
</header>


    <?php
        
        //database connection variables for a typical local development
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "esports"; //database name that you have already created that you want to connect to
        


        try {
            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password); //building a new connection object
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //Selecting multiple rows from a MySQL database using the PDO::query function.
            $sql = "SELECT match_id, team1_id, team2_id, Result  FROM matches ORDER BY match_id DESC";
            
                foreach($conn->query($sql, PDO::FETCH_ASSOC) as $row){
                    echo 'match_id: ' . $row['match_id'] . '<br>';
                    echo 'team1_id: ' . $row['team1_id'] . '<br>';
                    echo 'team2_id: ' . $row['team2_id'] . '<br>';
                    echo 'Result: ' . $row['Result'] . '<br>';
                    echo '<hr><br>';
                }
            
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage(); //If we are not successful we will see an error
            }
        ?>


</body>
</html>