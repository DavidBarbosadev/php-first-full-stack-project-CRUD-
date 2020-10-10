
    <?php
        
        //database connection variables for a typical local development
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "esports"; //database name that you have already created that you want to connect to
        
        //dummy form data to insert into the database - imagine this was sent from a HTML form submission using POST method
        $team_name = $_POST['team_name'];
        $team_captain = $_POST['team_captain'];
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password); //building a new connection object
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO teams (team_name, team_captain) VALUES ('$team_name', '$team_captain')"; // building a string with the SQL INSERT you want to run
            
            // use exec() because no results are returned
            $conn->exec($sql);
            
            echo "New table record created successfully"; // If successful we will see this
            header("Location: admin_index.php");
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage(); //If we are not successful we will see an error
            }
        ?>

