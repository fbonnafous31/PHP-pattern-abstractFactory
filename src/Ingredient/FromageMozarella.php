<?php

    namespace Ingredient;
    
    class FromageMozarella implements \Ingredient\Fromage {

        public function __construct() {
            $this->fromage = 'Mozarella';           
        }

        public function getDescription () {
            return $this->fromage;
        }

    }

?>