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
                <li class="selected"><a href="films.php">Movies</a></li>
                <li><a href="serials.php">Serials</a></li>
                <li><a href="rating.php">Ratings</a></li>
                <li><a href="contacts.php">Contacts</a></li>
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
            <h1>Interstellar</h1>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/LY19rHKAaAg" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            <div class="info_film_page">
                <span class="label">Rating: </span><span class="value">8.1 / 10</span>
                <span class="label">Year: </span><span class="value">2014</span>
                <span class="label">Producer: </span><span class="value">Christopher Nolan</span>
            </div>
            <hr>
            <h2>Interstellar description</h2>
            <div class="description_film">
                <img src="assets/images/inter.png">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis augue in turpis ultrices cursus. Sed
                aliquam aliquet mi, nec auctor augue fringilla ut. Maecenas laoreet luctus mollis. Duis a sapien vitae
                nisl euismod tincidunt faucibus at velit. Cras ac feugiat leo, id tincidunt mauris. Donec ut turpis ut
                est elementum pulvinar in quis justo. Nulla facilisi. Donec ut sem at dui blandit fringilla ut ac justo.
                Proin at urna id massa congue eleifend id ut magna.
            </div>
            <hr>
            <h2>Interstellar reviews</h2>
            <div class="reviews">
                <div class="review_name">
                    USER1
                </div>
                <div class="review_text">
                    Superb movie. I'd recommend it to everyone
                </div>
                <div class="review_name">
                    USER2
                </div>
                <div class="review_text">
                    Superb movie. I'd recommend it to everyone
                </div>
            </div>
            <div class="send">
                <form method="post" action="#" id="review">
                    <input type="text" name="review_name" placeholder="Your name">
                    <textarea name="review_name"></textarea>
                    <input type="submit" class="btn" value="Send">
                </form>
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