<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="myorderstyle1.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .f1{
            color:#ff0000;
            font-weight:bold;
        }
    </style>
</head>
<body>
<header>
    <nav>
        <div class="main-wrapper">
                <a href="user_index.php"><img src="user.png" alt="logo"></a>
                <h1>Search team Results</h1>
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
            
            
            $keyword1 = $_POST['custSearch']; // your search keyword from the search form
            
            //preparing an sql statement to seach field1 and field 2 for whatever the user searches for
            $sql = $conn->prepare("SELECT * FROM teams WHERE team_name LIKE ?");
            $sql -> bindValue(1, "%$keyword1%"); //we bind this variable to the first ? in the sql statement
            //we bind this value to the second ? in the sql statement
            $sql -> execute(); //execure the statement
            
            if($sql->rowCount()) { //check if we have results by counting rows
                while ($row = $sql->fetch()) //loop through the results to display them on screen
                    {
                        
                        echo '<p class="f1">team_name: ' . $row['team_name'] . '</p>';
                        echo 'team_captain: ' . $row['team_captain'] . '</p><br>';
                        echo 'team win rate%: ';
                        
                        
                    
                        
                        echo '<hr><br>';
                        
                    }
                }
            else
                {
                    echo 'no rows returned'; //message to display if the search returned no results
                }
               
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage(); //If we are not successful in connecting or running the query we will see an error
            }
        ?>

</body>
</html>