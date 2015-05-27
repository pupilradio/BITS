<?php ob_start("ob_gzhandler"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html xmlns="http://www.w3.org/TR/REC-html40">
    <head>
        <link type="text/css" rel="stylesheet" href="css/radio_style.css"/>
        <title></title>
    </head>
    <body>
        <div class='headercontainer'>
       <a href="index.php">  <img id="banner" src="../images/banner.png"/></a>
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
                            <a href="radionomy.php">Radionomy</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='mainbodycontainer'>
                <div id="container" >
                <p style="font-size:36px; text-align:center;">Under Construction</p>  
                </div>
            </div>
                <div class = 'footercontainer'>
                    <div class='footer'>
                        <p class="copyright">Copyright &copy; 2015 Pupil Radio</p>
                        <p class="links">
                            <a href="#">home</a> | 
                            <a href="#">aboutus </a> | 
                            <a href="#">request</a> | 
                            <a href="#">radionomy</a>
                        </p>
                    </div>
                </div>
            </body>
        </html>
<?php ob_flush(); ?>
