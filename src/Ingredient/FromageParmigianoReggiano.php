<?php

    namespace Ingredient;
    
    class FromageParmigianoReggiano implements \Ingredient\Fromage {

        public function __construct() {
            $this->fromage = 'Parmigiano Reggiano';           
        }

        public function getDescription () {
            return $this->fromage;
        }

    }

?>