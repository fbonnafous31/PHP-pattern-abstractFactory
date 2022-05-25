<?php

    namespace Pizza;
    use Ingredient\FabriqueIngredientsPizza;

    class PizzaFruitsDeMer extends Pizza {

        public FabriqueIngredientsPizza $fabriqueIngredients;

        public function __construct($fabriqueIngredients) {
            $this->fabriqueIngredients = $fabriqueIngredients;            
        }

        public function preparer() {
            echo "Préparation de ". $this->nom;
            $pate        = $this->fabriqueIngredients->creerPate();
            $sauce       = $this->fabriqueIngredients->creerSauce();
            $fromage     = $this->fabriqueIngredients->creerFromage();
            $fruitsDeMer = $this->fabriqueIngredients->creerFruitDeMer();
        }

    }

?>