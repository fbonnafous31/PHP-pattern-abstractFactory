<?php

    namespace Ingredient;
    
    class PateSoufflee implements \Ingredient\Pate {

        public function __construct() {
            $this->pate = 'pate soufflée alsacienne';
        }

        public function getDescription () {
            return $this->pate;
        }

    }

?>