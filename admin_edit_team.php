
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
                
                $team_id = $_POST['team_id']; 
                
                $team_name = $_POST['team_name']; // email the user submitted from $_POST
                $team_captain = $_POST['team_captain']; // password the user submitted from $_POST

                //preparing an sql statement to seach user_email and user_password for whatever the user has typed
                $sql = $conn->prepare("UPDATE teams SET team_name = ?, team_captain = ? WHERE team_id =?");
                $sql -> bindValue(1, "$team_name"); //we bind this variable to the first ? in the sql statement
                $sql -> bindValue(2, "$team_captain"); //we bind this value to the second ? in the sql statement
                $sql -> bindValue(3, "$team_id"); //we bind this value to the where clause in the sql statement
                $sql -> execute(); //execute the statement

                echo "User details updated";
                header('Location: admin_index.php');

            }
            else{
                $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password); //building a new connection object
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $team_id = $_POST['team_id']; //the ID of the user we are logged in with
                
                $sql = $conn->prepare("SELECT * FROM teams WHERE team_id = ?");
                $sql -> bindValue(1, $team_id); //we bind this variable to the first ? in the sql statement

                $sql -> execute(); //execute the statement

                $row = $sql->fetch();  //create the array of database fields

                //storing the fields in loccal variables to use in the HTML form
                $team_name = $row['team_name'];
                $team_captain = $row['team_captain'];
                //include the HTML form
                include "admin_update_information.php";
            } 
            
        }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage(); //If we are not successful in connecting or running the query we will see an error
            }
        ?>


</body>
</html>