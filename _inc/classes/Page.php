<?php

    class Page{

        private $page_name;

        public function __construct($page_name)
        {
            $this->page_name = $page_name;
        }

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
                case 'jackets':
                    echo '<link rel="stylesheet" href="css/jackets.css">';
                    break;
                case 'registration':
                    echo '<link rel="stylesheet" href="css/registration.css">';
                    break;
                case 'thankyou':
                    echo '<link rel="stylesheet" href="css/thankyou.css">';
                    break;
                case 'product_detail':
                    echo '<link rel="stylesheet" href="cs/b.css">';
                    break;
                case 'admin':
                    echo '<link rel="stylesheet" href="css/admin.css">';
                    break;
                case 'contact-update':
                    echo '<link rel="stylesheet" href="css/contact-update.css">';
                    break;
                case 'login':
                    echo '<link rel="stylesheet" href="css/registration.css">';
                    break;
                case '404':
                    echo '<link rel="stylesheet" href="css/admin.css">';
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
    }

?>