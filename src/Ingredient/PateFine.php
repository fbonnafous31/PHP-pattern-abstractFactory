<?php

    namespace Ingredient;
    
    class PateFine {

        protected string $pate = 'Pate fine style Brest';

        public function __construct($pate) {
            $this->pate = $pate;
        }

        public function getDescription () {
            return $this->pate;
        }

    }

?>