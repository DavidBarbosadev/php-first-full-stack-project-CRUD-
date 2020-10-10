<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>esports</title>
</head>
<body>
<header>
    <nav>
        <div class="main-wrapper">
            <ul>
               <a href="index.php"><img src="logo.png" alt="logo"></a>
            </ul>
            <div class="nav-login">
                <form action="sql_login.php" method="POST">
                    <input type="text" name="player_tag" placeholder="player_tag">
                    <input type="password" name="player_password" placeholder="Password">
                    <input type="submit" name="login" value="Login">
                </form>   
            </div>
        </div>
    </nav>

</header>
<section>
    <div class="video-animated">
        <video autoplay muted loop>
            <source src="thisisesports.mp4" type="video/mp4">
        </video>  
    </div>
</section>
</body>
</html>