<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="myorderstyle.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylesingup.css">

    <title>Admin Page Create Matches</title>
</head>
<body>
<header>
    <nav>
        <div class="main-wrapper">
                <a href="admin_index.php"><img src="adminlogo.png" alt="logo"></a>
                <h1>Create New Match</h1>
            </div>
        <div id="logout"><a href="logout.php"><b>Log out</b></a></div>

    </nav>
</header>

<section>
    <div class="New_player">
        <h2>Create New Match</h2> 
        <br>
        <form action="sql_insert_match.php" method="POST">
            <h3>team1_id</h3>
            <input type="text" name="team1_id" placeholder="team1_id">
            <h3>team2_id</h3>
            <input type="text" name="team2_id" placeholder="team2_id">
            <h3>Result</h3>
            <input type="text" name="Result" placeholder="Result">
            <input type="submit" name="submit" value="Result">

        </form>
    </div>
</section>


</body>
</html>