<?php
    class Product extends Database{
        private $db;

        public function __construct(){
            $this->db = $this->db_connection();
        }

        function get_products_all(){
            $products = $this->db->query("SELECT * FROM products");
            return $products;
        }

        function get_product($pr){
            $products = $this->get_products_all()->fetchAll();
            foreach ($products as $product) {
                if (isset($product->product_id) && $product->product_id == $pr) {
                    
                    $output = '<div class="row">';
                    $output .= '<div class="col-md-6">';
                    $output .= '<img src="' . $product->img . '" alt="' . $product->product_name . '">';
                    $output .= '</div>';
                    $output .= '<div class="col-md-6">';
                    $output .= '<div class="text-container">';
                    $output .= '<div class="product-name"><h1>' . $product->product_name . '</h1></div>';
                    $output .= '<div class="cena"><p>' . $product->price . '</p></div>';
                    $output .= '<div class="tet"><p>' . $product->description . '</p></div>';
                    $output .= '</div>';
                    $output .= '</div>';
                    $output .= '</div>';    
        
                    
                    return $output;
                }
            }
            
            return '';
        }
    }
?>