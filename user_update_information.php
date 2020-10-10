<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit my account</title>
    <link rel="stylesheet" href="myorderstyle.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylesingup.css">

</head>
<body>
<header>
    <nav>
        <div class="main-wrapper">
                <a href="user_index.php"><img src="user.png" alt="logo"></a>
                <h1>Update Player Information</h1>
            </div>
        <div id="logout"><a href="logout.php"><b>Log out</b></a></div>

    </nav>
</header>
<section>
    <div class="New_player">
        <h2>Edit your account details</h2> 
        <br>
        <form action="edit_players.php" method="POST">
            <h3>Player_tag</h3>
            <input type="text" name="player_tag" placeholder="player_tag">
            <h3>Firstname</h3>
            <input type="text" name="player_firstname" placeholder="player_firstname">
            <h3>Surname</h3>
            <input type="text" name="player_surname" placeholder="player_surname">
            <h3>Password</h3>
            <input type="password" name="player_password" placeholder="player_password"><br>
            <input type="submit" name="submit" value="Update">
        </form>
    </div>
</section>
</body>
</html>