
    <?php
        
        //database connection variables for a typical local development
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "esports"; 
        
        try {
            if($_SERVER['REQUEST_METHOD'] == 'POST') 
            {
                
                
                $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password); //building a new connection object
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $player_id = $_POST['player_id']; 
                
                $player_tag = $_POST['player_tag']; 
                $player_firstname = $_POST['player_firstname']; 
                $player_surname = $_POST['player_surname']; 
                $player_password = $_POST['player_password']; 

                $sql = $conn->prepare("UPDATE players SET player_tag = ?, player_firstname = ?, player_surname = ?, player_password = ? WHERE player_id =?");
                $sql -> bindValue(1, "$player_tag"); 
                $sql -> bindValue(2, "$player_firstname"); 
                $sql -> bindValue(3, "$player_surname");
                $sql -> bindValue(4, "$player_password");
                $sql -> bindValue(5, "$player_id"); 
                $sql -> execute(); //execute the statement

                echo "User details updated";
                header('Location: admin_index.php');

            }
            else{
                $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password); 
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $team_id = $_POST['player_id']; 
                
                $sql = $conn->prepare("SELECT * FROM players WHERE player_id = ?");
                $sql -> bindValue(1, $player_id); 

                $sql -> execute(); 

                $row = $sql->fetch(); 

                
                $player_tag = $row['player_tag'];
                $player_firstname = $row['player_firstname'];
                $player_surname = $row['player_surname'];
                
                
                include "admin_update_information.php";
            } 
            
        }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage(); 
            }
        ?>


</body>
</html>