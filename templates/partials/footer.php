<?php
  require_once('_inc/functions.php');
?>
<footer>
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
        ?>
    <div class="logo">
        <a href="#"><img src="img/logo/logo.svg"></a>
    </div>
    <div class="social">
        <a href=""><i class="ri-instagram-line"></i></a>
        <a href=""><i class="ri-tiktok-fill"></i></a>
        <a href=""><i class="ri-youtube-line"></i></a>
    </div>
    <div class="kontaktujte">
        <a href="mailto:opiumstore@opiumstore.com">opiumstore@opiumstore.com</a>
        <a href="tel:0909500600">0909500600</a>
    </div>
    <p>© 2023, 0P1UM Powered by Pavlo Afanasiev</p>
    
</footer>   
    <?php
        $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
        $page_object = new Page($page_name);
        $page_object->add_scripts();
    ?>
     
    
</body>
</html>