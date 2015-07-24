<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="styles/style.css"/>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <![endif]-->
    <script src="myscripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <title>Wstryskarki Polska</title>
</head> 

<body>
    <div id="container">
        
        <header>
            <div id="lang">
                <img src="icons/poland.png" />
                <img src="icons/england.png" />
                <img src="icons/germany.png" />
            </div>
            <div id="header_graphics">
                
            </div>
            <div id="header_menu">
                <?php include 'menu.php';?>
            </div>
        </header>
      
        <div id="body">                             
            <div id="content"> 
                <?php 
                if(empty($_GET['content'])){
                    // echo "Empty content. Home.php\n";
                    include 'home.php';
                }
                else {
                    // echo "Content is " . $_GET['content'];
                    include $_GET['content'].'.php';
                }
                ?>
            </div>   
        </div>
        
        <footer>
            &copy; Copyright by Szczep-Pol 2015
        </footer>
    </div>
</body>
</html>