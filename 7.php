<html>
    <head>
        <meta http-equiv="refresh" content="1">
        <title>Digital Clock</title>
        <style type = "text/css">
            h1 {
                text-align: center;
                
            }
        </style>
    </head>

    <body>
            <?php
            // date_default_timezone_set('Asia/kolkata');
                echo "<h1>Digital Clock</h1>";
                echo "<hr/>";
                echo "<h1>".date('h:i:s A')."</h1>";
                echo "<hr/>";
            ?>
    </body>

</html>