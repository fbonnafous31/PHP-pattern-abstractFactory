<?php

    namespace Ingredient;

    interface FabriqueIngredientsPizza {    
        public function creerPate();
        public function creerSauce();
        public function creerFromage();
        public function creerLegumes();
        public function creerPoivrons();
        public function creerMoules();
        public function creerFruitDeMer();
    }

?>