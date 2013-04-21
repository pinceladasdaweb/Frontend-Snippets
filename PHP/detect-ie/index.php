<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Detect IE Versions with PHP</title>
    </head>
    <body>
        
        <?php        	
        	function IEVersion(){
        		return preg_match('/MSIE (.*?);/', $_SERVER['HTTP_USER_AGENT'], $matches) ? floatval($matches[1]) : null;
        	}

        	if(IEVersion() < 9 && IEVersion() != null){
        		echo "<script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>\n";
        	} else {
        		echo "<script src='//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'></script>\n";
        	}
        ?>
    </body>
</html>