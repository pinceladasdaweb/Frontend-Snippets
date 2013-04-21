<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Automatic Copyright Year</title>
    </head>
    <body>
        
        <?php
            $copyYear = 2012;
            $curYear = date('Y');
            echo '<p>&copy; '. $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '').' Copyright.</p>';       	
        ?>
    </body>
</html>