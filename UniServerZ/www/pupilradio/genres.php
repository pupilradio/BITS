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
                
            </div>
                <div class = 'footercontainer'>
                    <div class='footer'>
                        <p class="copyright">Copyright &copy; 2015 Pupil Radio</p>
                        <p class="links">
                            <a href="#">home</a> | 
                            <a href="#">aboutus </a> | 
                            <a href="#">request</a> | 
                            <a href="#">genre</a>
                        </p>
                    </div>
                </div>
            </body>
        </html>
<?php ob_flush(); ?>
