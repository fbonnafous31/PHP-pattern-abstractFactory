<?php

    namespace Ingredient;
    
    class SauceMarinara implements \Ingredient\Sauce {

        public function __construct() {
            $this->sauce = 'sauce Marinara';           
        }

        public function getDescription () {
            return $this->sauce;
        }

    }

?>