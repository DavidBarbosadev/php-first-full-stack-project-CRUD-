<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="myorderstyle.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylesingup.css">
    <title>New Team Page Admin</title>
</head>
<body>


<header>
    <nav>
        <div class="main-wrapper">
                <a href="admin_index.php"><img src="adminlogo.png" alt="logo"></a>
                <h1>Create New Team</h1>
            </div>
        <div id="logout"><a href="logout.php"><b>Log out</b></a></div>

    </nav>
</header>

<section>
    <div class="New_player">
        <h2>New Team</h2> 
        <br>
        <form action="sql_insert_teams.php" method="POST">
            <h3>Team Name</h3>
            <input type="text" name="team_name" placeholder="team_name">
            <h3>Team Captain</h3>
            <input type="text" name="team_captain" placeholder="team_captain">
            <input type="submit" name="submit" value="Create">

        </form>
    </div>
</section>
    
</body>
</html>