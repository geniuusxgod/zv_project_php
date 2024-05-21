<?php
    require('config.php');

    


    //add styles to pages
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
    

    //add scripts to pages
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

    //get all in table about
    function get_abouts_all(){
        global $db;
        $abouts = $db->query("SELECT * FROM about");
        return $abouts;
    }

    //get all in table slider
    function get_images_all(){
        global $db;
        $images = $db->query("SELECT * FROM slider");
        return $images;
    }

    //get all in table products
    function get_products_all(){
        global $db;
        $products = $db->query("SELECT * FROM products");
        return $products;
    }


    //get 6 randoms products in table product
    function get_products_random(){
        global $db;
        $products = $db->query("SELECT * FROM products ORDER BY RAND() LIMIT 6");
        return $products;
    }

    //display products by category_id
    function display_products_by_category($category_id) {
        $products = get_products_all()->fetchAll();
        $count = 0;
    
        $output = '<div class="container mt-5"><div class="row text-center">';
    
        foreach ($products as $product) {
            if (isset($product["category_id"]) && $product["category_id"] == $category_id) {
                $output .= '<div class="col-md-4"><div class="product"><a href="#"><div class="image-product">';
                $output .= '<img src="' . $product['img'] . '" alt="' . $product["product_name"] . '">';
                $output .= '</div></a><div class="info"><h2>' . $product["product_name"] . '</h2>';
                $output .= '<h3>' . $product["price"] . '<small>$</small></h3></div></div></div>';
                $count++;
    
                if ($count % 3 == 0) {
                    $output .= '</div><div class="row text-center">';
                }
            }
        }
    
        $output .= '</div></div>';
    
        return $output;
    }

    //display random products
    function display_random_products() {
        $products = get_products_random()->fetchAll();
        $output = '';
    
        foreach ($products as $product) {
            $output .= '<div class="col-md-6">';
            $output .= '<div class="product">';
            $output .= '<a href="#"><div class="image-product">';
            $output .= '<img src="' . $product['img'] . '" alt="' . $product["product_name"] . '" style="max-width: 100%; height: auto; max-height: 400px;">';
            $output .= '</div></a>';
            $output .= '<div class="info">';
            $output .= '<h2>' . $product["product_name"] . '</h2>';
            $output .= '<h3>' . $product["price"] . '<small>$</small></h3>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '</div>';
        }
    
        return $output;
    }

    //slider function
    function slider(){
        $images = get_images_all()->fetchAll();
        $output = '';
        foreach($images as $image){
            $output .= '<img src="'.$image['url'] . '" alt="' . $image["image"] . '" >';
        }

        return $output;
    }


    //about function
    function about(){
        $abouts = get_abouts_all()->fetchAll();
        
        $output = '<div class="about-container">';
        $output .= '<h1>Welcome to 0P1UM ST0R3</h1>';
        foreach($abouts as $about){
            $output .= '<h2 class="h2" onclick="toggleAccordion(this)">'.$about['theme'].'</h2>';
            $output .= '<div class="h2text">';
            $output .= '<p>'.$about['text'].'</p>';
            $output .= '</div>';
        }
        $output .= '</div>';

        return $output;
    }

    //generate menu
    function generate_menu(array $pages): string{
        $menuItems = '<ul class="navlist">'; 
        
        
        foreach($pages as $page_name => $page_url){
            
            $menuItems .= '<li><a href="' . $page_url . '">' . $page_name . '</a></li>';
        }
    
        $menuItems .= '</ul>';
        return $menuItems;
    }

    
    function get_product($pr){
        $products = get_products_all()->fetchAll();
        foreach ($products as $product) {
            if (isset($product["product_id"]) && $product["product_id"] == $pr) {
                // HTML-разметка для отображения информации о продукте
                $output = '<div class="row">';
                $output .= '<div class="col-md-6">';
                $output .= '<img src="' . $product['img'] . '" alt="' . $product['product_name'] . '">';
                $output .= '</div>';
                $output .= '<div class="col-md-6">';
                $output .= '<div class="text-container">';
                $output .= '<div class="product-name"><h1>' . $product['product_name'] . '</h1></div>';
                $output .= '<div class="cena"><p>' . $product['price'] . '</p></div>';
                $output .= '<div class="tet"><p>' . $product['description'] . '</p></div>';
                $output .= '</div>';
                $output .= '</div>';
                $output .= '</div>';
    
                // Возвращаем HTML-код
                return $output;
            }
        }
        // Если продукт не найден, возвращаем пустую строку
        return '';
    }
?>



