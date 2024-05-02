<?php
    require('config.php');




    function add_stylesheets(){
        echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">';
        echo '<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">';
        echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">';
        echo '<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">';


        $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');

        switch($page_name){
            case 'about':
                echo '<link rel="stylesheet" href="css/about.css">';
                break;
            case 'b1':
                echo '<link rel="stylesheet" href="cs/b.css">';
                break;
            case 'b2':
                echo '<link rel="stylesheet" href="cs/b.css">';
                break;
            case 'b3':
                echo '<link rel="stylesheet" href="cs/b.css">">';
                break;
            case 'b4':
                echo '<link rel="stylesheet" href="cs/b.css">';
                break;
            case 'b5':
                echo '<link rel="stylesheet" href="cs/b.css">';
                break;
            case 'b6':
                echo '<link rel="stylesheet" href="cs/b.css">';
                break;
            case 'bottoms':
                echo '<link rel="stylesheet" href="css/bottoms.css">';
                break;
            case 'footwear':
                echo '<link rel="stylesheet" href="css/footwear.css">';
                break;
            case 'home':
                echo '<link rel="stylesheet" href="css/css.css">';
                break;
            case 'hoodies':
                echo '<link rel="stylesheet" href="css/hoodies.css">';
                break;
            case 'j1':
                echo '<link rel="stylesheet" href="cs/j.css">';
                break;
            case 'j2':
                echo '<link rel="stylesheet" href="cs/j.css">';
                break;
            case 'j3':
                echo '<link rel="stylesheet" href="cs/j.css">';
                break;
            case 'j4':
                echo '<link rel="stylesheet" href="cs/j.css">';
                break;
            case 'j5':
                echo '<link rel="stylesheet" href="cs/j.css">';
                break;
            case 'j6':
                echo '<link rel="stylesheet" href="cs/j.css">';
                break;
            case 'jackets':
                echo '<link rel="stylesheet" href="css/jackets.css">';
                break;
            case 'registration':
                echo '<link rel="stylesheet" href="css/registration.css">';
                break;
            case 'thankyou':
                echo '<link rel="stylesheet" href="css/thankyou.css">';
                break;
        }
    }
    function add_scripts(){
        echo('<script src="js/hamburger.js"></script>');
        echo('<script src="js/sign-in.js"></script>');
        $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
        switch($page_name){
        case 'about':
            echo '<script src="js/accordion.js"></script>';
            break;
        case 'home':
            echo '<script src="js/slide-show.js"></script>';
            echo '<script src="js/alert.js"></script>';
            break;  
        case 'thankyou':
            echo '<script src="js/accordion.js"></script>';
            break;
        };
        
    }

    function get_products_all(){
        global $db;
        $products = $db->query("SELECT * FROM products");
        return $products;
    }

    function get_products_random(){
        global $db;
        $products = $db->query("SELECT * FROM products ORDER BY RAND() LIMIT 6");
        return $products;
    }
?>