<?php
  require_once('_inc/functions.php');
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
        $page_object = new Page($page_name);
        $page_object->add_stylesheets();
    ?>
   
    <title>0P1UM ST0R3</title>
</head>
<body>
    <div class="sale-banner">
        <div class="sale-text-container">
            <p class="sale-text">0P1UM</p>
            <p class="sale-text">0P1UM</p>
            <p class="sale-text">0P1UM</p>
            <p class="sale-text">0P1UM</p>
            <p class="sale-text">0P1UM</p>
            <p class="sale-text">0P1UM</p>
            <p class="sale-text">0P1UM</p>
            <p class="sale-text">0P1UM</p>
            <p class="sale-text">0P1UM</p>
            <p class="sale-text">0P1UM</p>
            <p class="sale-text">0P1UM</p>
            <p class="sale-text">0P1UM</p>
            <p class="sale-text">0P1UM</p>
            <p class="sale-text">0P1UM</p>
            <p class="sale-text">0P1UM</p>
            <p class="sale-text">0P1UM</p>
            <p class="sale-text">0P1UM</p>
            <p class="sale-text">0P1UM</p>
        </div>
    </div>
    <header>
        <a href="./home.php" class="logo"><img src="img/logo/logo.svg"></a>

        <!--<ul class="navlist">
            <li><a href="./home.php">Home</a></li>
            <li><a href="./about.php">About</a></li>
            <li><a href="./jackets.php">Jackets</a></li>
            <li><a href="./bottoms.php">Bottoms</a></li>
            <li><a href="./hoodies.php">Hoodies</a></li>
            <li><a href="./footwear.php">Footwear</a></li>
            <button type="button" id="Button">Sign In</button>
        </ul>-->

        <?php
           $pages = array('Home'=>'home.php',
                'About'=>'about.php',
                'Jackets'=>'jackets.php',
                'Bottoms'=>'bottoms.php',
                'Hoodies'=>'hoodies.php',
                'Footwear'=>'footwear.php'  
           );
           //echo(generate_menu($pages));
           
          $menu_object = new Menu($pages);
          echo($menu_object->generate_menu());
          if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
            // Пользователь вошел в систему
            echo '<li><a href="logout.php" class="button">Log out</a></li>';
          } else {
            // Пользователь не вошел в систему
            echo '<li><a href="login.php" class="button login-button">Log in</a></li>';
            echo '<li><a href="registration.php" class="button">Sign in</a></li>';
          }
           
        ?>
        
        <div class="bx bx-menu" id="menu-icon">
            
        </div>
        
    </header>