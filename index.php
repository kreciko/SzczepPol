<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Wstryskarki Polska</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
    <div id="container">
        <header></header>
        <div id="body">
            <div id="menu"></div>
            <div id="content"> 
                <?php
                    for( $i = 0 ; $i < 30; $i++ ){
                    echo "Hello Aptana Studio ^^ "; ?> 
                <br />
                <?php
                }
                ?>
            </div>   
        </div>
        <footer>
            Copyright by SzczepPol
        </footer>
    </div>
</body>
</html>