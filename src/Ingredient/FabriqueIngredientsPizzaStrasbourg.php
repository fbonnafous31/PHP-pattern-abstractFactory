<?php

    namespace Ingredient;

    class FabriqueIngredientsPizzaStrasbourg implements FabriqueIngredientsPizza {
       
        public function creerPate() {
            return new PateSoufflee();
        }
        
        public function creerSauce() {
            return new SauceTomatesCerise();
        }

        public function creerFromage(){
            return new FromageParmigianoReggiano();
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