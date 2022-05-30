<?php

    namespace Pizza;
    use Ingredient\FabriqueIngredientsPizza;

    class PizzaFromage extends Pizza {

        public FabriqueIngredientsPizza $fabriqueIngredients;

        public function __construct($fabriqueIngredients, $nom) {
            $this->fabriqueIngredients = $fabriqueIngredients;            
            $this->nom = $nom;
        }

        public function preparer() {
            $pate    = $this->fabriqueIngredients->creerPate();
            $sauce   = $this->fabriqueIngredients->creerSauce();
            $fromage = $this->fabriqueIngredients->creerFromage();
            
            echo "Préparation de pizza " . $this->nom . 
                 " base " . $pate->getDescription() . 
                 " avec  " . $sauce->getDescription() .
                 ", " . $fromage->getDescription() . 
                 "<br>";
            
        }

    }

?>