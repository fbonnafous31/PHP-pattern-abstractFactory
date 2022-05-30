<?php

    namespace Ingredient;
    
    class SauceTomatesCerise implements \Ingredient\Sauce {

        public function __construct() {
            $this->sauce = 'sauce tomates cerises';           
        }

        public function getDescription () {
            return $this->sauce;
        }

    }

?>