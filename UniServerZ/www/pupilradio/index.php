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
			     <div id="container"><a href="http://www.macromedia.com/go/getflashplayer">Get the Flash Player</a> to see this player.
				 <a href="http://www.shouthost.com/">Shoutcast &amp; Icecast Server</a></div>
				 <script type="text/javascript" src="http://www.shouthost.com/freeflashplayer/player/swfobject.js"></script>
				 <script type='text/javascript'>
				 var s1 = new SWFObject('http://www.shouthost.com/freeflashplayer/player/player.swf','player',"340","50","9","#FFFFFF");
				 s1.addParam('allowfullscreen','true');
				 s1.addParam('allowscriptaccess','always');
				 s1.addParam("flashvars","skin=http://www.shouthost.com/freeflashplayer/skins/bekle.swf&title=Live Stream&type=sound&file=http://localhost:8000/stream?type=.mp3&13202692901&duration=99999&id=scplayer&autostart=true");
				 s1.write("container");
				 </script>
                </div>
                <div class = 'footercontainer'>
                    <div class='footer'>
                        <p class="copyright">Copyright &copy; 2015 Pupil Radio</p>
                        <p class="links">
                            <a href="index.php">home</a> | 
                            <a href="about.php">aboutus </a> | 
                            <a href="request.php">request</a> | 
                            <a href="genres.php">genre</a>
                        </p>
                    </div>
                </div>
            </body>
        </html>
<?php ob_flush(); ?>
