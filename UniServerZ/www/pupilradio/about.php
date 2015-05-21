<?php ob_start("ob_gzhandler"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html xmlns="http://www.w3.org/TR/REC-html40">
    <head>
        <link type="text/css" rel="stylesheet" href="css/radio_style.css"/>
        <title></title>
    </head>
    <body>
        <div class='headercontainer'>
            <div class='header'>
                <div id="hmenu">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">AboutUs</a>
                        </li>
                        <li>
                            <a href="request.php">Request</a>
                        </li>
                        <li>
                            <a href="genres.php">Genre</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='mainbodycontainer'>
                <div id="container" >
                <p align="center" style="color:#0000FF" style="font:'Courier New', Courier, monospace" style="font-size:16px">
                	Everyone loves to listen to music and we thought an online radio would be a great idea to broadcasts popular songs especially without any commercial advertisements. This online radio website will have pre-loaded popular songs played randomly and also provide an option for the user to request their favorite songs from the available list. As the project team has some prior experience in developing websites, we thought of enhancing our web technology skills by doing this project.
                 </p>  
                </div>
            </div>
                <div class = 'footercontainer'>
                    <div class='footer'>
                        <p class="copyright">Copyright &copy; 2015 Pupil Radio</p>
                        <p class="links">
                            <a href="index.php">home</a> | 
                            <a href="about.php">aboutus </a> | 
                            <a href="#request.php">request</a> | 
                            <a href="genres.php">genre</a>
                        </p>
                    </div>
                </div>
            </body>
        </html>
<?php ob_flush(); ?>
