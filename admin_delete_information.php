<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="myorderstyle.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styling.css">
    

    <title>Admin Delete information</title>
</head>
<body>

<header>
    <nav>
        <div class="main-wrapper">
                <a href="admin_index.php"><img src="adminlogo.png" alt="logo"></a>
                <h1>Delete information</h1>
            </div>
        <div id="logout"><a href="logout.php"><b>Log out</b></a></div>
    </nav>
</header>

<section>
    <div class="New_player">
        <h2>Delete Data</h2> 
        <br>
        <form action="select_player.php" method="POST">
            <h3>Delete Player</h3>
            <input type="text" name="id" placeholder="Delete Data">
            <input type="submit" name="delete" value="Delete data">
        </form>
    </div>

    <div class="New_player">
        <form action="select_team.php" method="POST">
            <h3>Delete Team</h3>
            <input type="text" name="id" placeholder="Delete Data">
            <input type="submit" name="delete" value="Delete data">
        </form>
    </div>

    <div class="New_player">
        <form action="select_match.php" method="POST">
            <h3>Delete Matches</h3>
            <input type="text" name="id" placeholder="Delete Data">
            <input type="submit" name="delete" value="Delete data">
        </form>
    </div>
</section>

    
</body>
</html>