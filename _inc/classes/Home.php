<?php
    class Home extends Database{
        private $db;

        public function __construct() {
            parent::__construct(); // Вызов конструктора родительского класса
            $this->db = $this->getConnection(); // Получаем подключение к базе данных
        }

        function get_images_all(){
            $images = $this->db->query("SELECT * FROM slider");
            return $images;
        }

        function get_products_random(){
            $products = $this->db->query("SELECT * FROM products ORDER BY RAND() LIMIT 6");
            return $products;
        }

        function display_random_products() {
            $products = $this->get_products_random()->fetchAll();
            $output = '';
        
            foreach ($products as $product) {
                $output .= '<div class="col-md-6">';
                $output .= '<div class="product">';
                $output .= '<a href="#"><div class="image-product">';
                $output .= '<img src="' . $product->img . '" alt="' . $product->product_name . '" style="max-width: 100%; height: auto; max-height: 400px;">';
                $output .= '</div></a>';
                $output .= '<div class="info">';
                $output .= '<h2>' . $product->product_name . '</h2>';
                $output .= '<h3>' . $product->price . '<small>$</small></h3>';
                $output .= '</div>';
                $output .= '</div>';
                $output .= '</div>';
            }
        
            return $output;
        }

        function slider(){
            $images = $this->get_images_all()->fetchAll();
            $output = '';
            foreach($images as $image){
                $output .= '<img src="'.$image->url . '" alt="' . $image->image . '" >';
            }
    
            return $output;
        }


    }
?>