<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="myorderstyle.css">
    <link rel="stylesheet" href="style.css">
    <title>My Team</title>
</head>
<body>
<header>
    <nav>
        <div class="main-wrapper">
                <a href="user_index.php"><img src="user.png" alt="logo"></a>
                <h1>My team</h1>
            </div>
        <div id="logout"><a href="logout.php"><b>Log out</b></a></div>

    </nav>
</header>
<section>
    <div class="New_player">
        <br>
        <form action="user_search_team_members.php" method="POST">
            <h3>My team Details</h3>
            <input type="text" name="team_id" placeholder="team_id">
            <input type="submit" name="submit" value="Search">

        </form>
    </div>
</section>
</body>
</html>