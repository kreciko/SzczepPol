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
    <script src="js/myscripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <title>Wstryskarki Polska</title>
</head> 

<body>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.4";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div id="container">
        <header>
            <div id="header_lang">
                    <img src="icons/poland.png" />
                    <img src="icons/england.png" />
                    <img src="icons/germany.png" />
            </div>
            <div id="header_graphics">
                <div style="display: inline-block;"><img src="img/header_pic.jpg" alt=""/></div>
            </div>
            <div id="header_menu">
                <?php include 'menu.php';?>
            </div>
        </header>
      
        <div id="body">                             
            
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
        
        <footer>
            <div id="footer_content">
                <div style="display: table-cell; width:50%;">
                    &copy; Copyright by Szczep-Pol 2015
                </div>
                <div id="footer_social">
                    <img src="icons/0398-facebook2.png" alt=""/>
                    <img src="icons/0402-twitter.png" alt=""/>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>