<?php
    class Categories extends Database{
        private $db;

        public function __construct(){
            $this->db = $this->db_connection();
        }

        function get_products_all(){
            $products = $this->db->query("SELECT * FROM products");
            return $products;
        }

        function display_products_by_category($category_id) {
            $products = $this->get_products_all()->fetchAll();
            $count = 0;
        
            $output = '<div class="container mt-5"><div class="row text-center">';
        
            foreach ($products as $product) {
                if (isset($product->category_id) && $product->category_id == $category_id) {
                    $output .= '<div class="col-md-4"><div class="product"><a href="product_detail.php?product_id=' . $product->product_id . '"><div class="image-product">';
                    $output .= '<img src="' . $product->img . '" alt="' . $product->product_name . '">';
                    $output .= '</div></a><div class="info"><h2>' . $product->product_name . '</h2>';
                    $output .= '<h3>' . $product->price . '<small>$</small></h3></div></div></div>';
                    $count++;
        
                    if ($count % 3 == 0) {
                        $output .= '</div><div class="row text-center">';
                    }
                }
            }
        
            $output .= '</div></div>';
        
            return $output;
        }
    }
?>