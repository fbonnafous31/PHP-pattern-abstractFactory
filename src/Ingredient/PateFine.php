<?php

    namespace Ingredient;
    
    class PateFine implements \Ingredient\Pate {

        public function __construct() {
            $this->pate = 'Pate fine bretonne';
        }

        public function getDescription () {
            return $this->pate;
        }

    }

?>