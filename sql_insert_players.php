
    <?php
        
        //database connection variables for a typical local development
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "esports"; //database name that you have already created that you want to connect to
        
        //dummy form data to insert into the database - imagine this was sent from a HTML form submission using POST method
        $player_tag	= $_POST['player_tag'];
        $player_firstname = $_POST['player_firstname'];
        $player_surname = $_POST['player_surname'];
        $team_id = $_POST['team_id'];
        $player_password = $_POST['player_password'];

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password); //building a new connection object
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO players (player_tag, player_firstname, player_surname, team_id, player_password) VALUES ('$player_tag', '$player_firstname', '$player_surname', '$team_id', '$player_password')"; // building a string with the SQL INSERT you want to run
            
            // use exec() because no results are returned
            $conn->exec($sql);
            header("Location:admin_index.php");
            echo "New table record created successfully"; // If successful we will see this
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage(); //If we are not successful we will see an error
            }
        ?>

