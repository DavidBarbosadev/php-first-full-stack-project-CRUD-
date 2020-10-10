<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="myorderstyle.css">
    <link rel="stylesheet" href="style.css">
    <title>Search Other Teams</title>
</head>
<body>
<header>
    <nav>
        <div class="main-wrapper">
                <a href="user_index.php"><img src="user.png" alt="logo"></a>
                <h1>Search Teams</h1>
            </div>
        <div id="logout"><a href="logout.php"><b>Log out</b></a></div>

    </nav>
</header>
<section>
    <div class="New_player">
        <br>
        <form action="sql_search_team.php" method="POST">
            <h3>Search for a team</h3>
            <input type="text" name="custSearch" placeholder="team_name">
            <input type="submit" name="submit" value="Search">

        </form>
    </div>
</section>
</body>
</html>