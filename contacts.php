<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE</title>
    <meta name="description" content="MovieMonster">
    <meta name="keywords" content="Films, films online, movies, hd"/>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div class="main">
    <div class="header">
        <div class="logo">
            <div class="logo_text">
                <h1><a href="index.php">MovieMonster</a></h1>
                <h2>MovieMonster - best movies online service</h2>
            </div>
        </div>
        <div class="menubar">
            <ul class="menu">
                <li><a href="index.php">Main</a></li>
                <li><a href="films.php">Movies</a></li>
                <li><a href="serials.php">Serials</a></li>
                <li><a href="rating.php">Ratings</a></li>
                <li class="selected"><a href="contacts.php">Contacts</a></li>
            </ul>
        </div>
    </div>
    <div class="side-content">
        <div class="sidebar_container">
            <div class="sidebar">
                <h2>Search</h2>
                <form method="post" action="#" id="search_form">
                    <input type="search" name="search_field" placeholder="Type request">
                    <input type="submit" class="btn" value="Search">
                </form>
            </div>
            <div class="sidebar">
                <h2>Login</h2>
                <form method="post" action="#">
                    <input type="text" name="login" id="login_field" placeholder="Login">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" class="btn" value="Login">
                    <div class="lables_passreg_text">
                        <span><a href="#">Forgot password</a></span> | <span><a href="#">Sign up</a></span>
                    </div>
                </form>
            </div>
            <div class="sidebar">
                <h2>News</h2>
                <span>01.02.2021</span>
                <p>We have launched an advanced search!</p>
                <a href="#">Read</a>
            </div>
            <div class="sidebar">
                <h2>Ratings</h2>
                <ul>
                    <li><a href="show.php">Interstellar</a><span class="rating_sidebar">8.1</span></li>
                    <li><a href="show.php">Interstellar</a><span class="rating_sidebar">8.1</span></li>
                    <li><a href="show.php">Interstellar</a><span class="rating_sidebar">8.1</span></li>
                    <li><a href="show.php">Interstellar</a><span class="rating_sidebar">8.1</span></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <h1>Contacts</h1>
            <p>Send review about our MonsterMovie website</p>
            <div class="contact_form">
                <div class="send">
                    <form method="post" action="#" id="contact">
                        <input type="text" name="review_name" placeholder="Your name">
                        <input type="text" name="review_email" placeholder="Your email">
                        <textarea name="review_name"></textarea>
                        <input type="submit" class="btn" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>
            <a href="index.php">Main</a> |
            <a href="films.php">Movies</a> |
            <a href="serials.php">Serials</a> |
            <a href="rating.php">Ratings</a> |
            <a href="contacts.php">Contacts</a>
        </p>
        <p>COPYRIGHT</p>
    </div>
</div>
</body>
</html>