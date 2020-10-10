<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="myorderstyle.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styling.css">
   

    <title>Admin Update Information</title>
</head>
<body>

<header>
    <nav>
        <div class="main-wrapper">
                <a href="admin_index.php"><img src="adminlogo.png" alt="logo"></a>
                <h1>Update Information</h1>
            </div>
        <div id="logout"><a href="logout.php"><b>Log out</b></a></div>

    </nav>
</header>
<section>
    <div class="New_player">
        <h2>Update Team details</h2> 
        <br>
        <form action="admin_edit_team.php" method="POST">
            <h3>Team id</h3>
            <input type="text" name="team_id" placeholder="team_id">    
            <h3>New Team Name</h3>
            <input type="text" name="team_name" placeholder="team_name">
            <h3>New Team Captain</h3>
            <input type="text" name="team_captain" placeholder="team_captain">
            <input type="submit" name="submit" value="Update">

        </form>
    </div>
    <div class="New_player">
        <h2>Update Player details</h2> 
        <br>
        <form action="admin_edit_player.php" method="POST">
            <h3>Player id</h3>
            <input type="text" name="player_id" placeholder="player_id">    
            <h3>New Player tag</h3>
            <input type="text" name="player_tag" placeholder="player_tag">
            <h3>New Player Firstname</h3>
            <input type="text" name="player_firstname" placeholder="player_firstname">
            <h3>New Player Surname</h3>
            <input type="text" name="player_surname" placeholder="player_surname">
            <h3>New Player password</h3>
            <input type="password" name="player_password" placeholder="player_password">
            <input type="submit" name="submit" value="Update">

        </form>
    </div>
</section>

    
</body>
</html>