<?php
    class About extends Database{
        private $db;

        public function __construct(){
            $this->db = $this->db_connection();
        }

        function get_abouts_all(){
            $abouts = $this->db->query("SELECT * FROM about");
            return $abouts;
        }

        function about(){
            $abouts = $this->get_abouts_all()->fetchAll();
            
            $output = '<div class="about-container">';
            $output .= '<h1>Welcome to 0P1UM ST0R3</h1>';
            foreach($abouts as $about){
                $output .= '<h2 class="h2" onclick="toggleAccordion(this)">'.$about->theme.'</h2>';
                $output .= '<div class="h2text">';
                $output .= '<p>'.$about->text.'</p>';
                $output .= '</div>';
            }
            $output .= '</div>';
    
            return $output;
        }
    }
?>