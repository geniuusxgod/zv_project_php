<?php

    class Menu{
        
        private $pages;

        public function __construct($pages)
        {
            $this->pages = $pages;
        }

        function generate_menu(): string{
            $menuItems = '<ul class="navlist">'; 
            
            
            foreach($this->pages as $page_name => $page_url){
                
                $menuItems .= '<li><a href="' . $page_url . '">' . $page_name . '</a></li>';
            }
        
            $menuItems .= '</ul>';
            return $menuItems;
        }
    }

?>