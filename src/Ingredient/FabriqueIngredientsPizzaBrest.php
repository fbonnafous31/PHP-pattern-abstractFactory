<?php

    namespace Ingredient;

    class FabriqueIngredientsPizzaBrest implements FabriqueIngredientsPizza {
       
        public function creerPate() {
            return new PateFine();
        }
        
        public function creerSauce() {
            return new SauceMarinara();
        }

        public function creerFromage(){
            return new FromageMozarella();
        }

        public function creerLegumes() {
            return [new Ail(), new Oignon(), new Champignon(), new PoivronRouge()];
        }

        public function creerPoivrons() {
            return new PoivronsEnRondelles();
        }

        public function creerMoules() {
            return new MoulesFraiches();
        }

        public function creerFruitDeMer() {
            return new FruitDeMer();
        }

    }

?>