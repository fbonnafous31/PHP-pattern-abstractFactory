<?php

    namespace Pizzeria;

    class PizzeriaBrest extends Pizzeria {

        public \Pizza\Pizza $pizza;

        public function creerPizza(string $type): \Pizza\Pizza {   
            $fabriqueIngredients = new \Ingredient\FabriqueIngredientsPizzaBrest();

            if ($type == "fromage") {
                $pizza = new \Pizza\PizzaFromage($fabriqueIngredients, $type);
            } elseif ($type == "poivrons") {
                $pizza = new \Pizza\PizzaPoivrons($fabriqueIngredients, $type);
            } elseif ($type == "fruitsDeMer") {
                $pizza = new \Pizza\PizzaFruitsDeMer($fabriqueIngredients, $type);                
            } elseif ($type == "vegetarienne") {
                $pizza = new \Pizza\PizzaVegetarienne($fabriqueIngredients, $type);                
            }
            return $pizza;
        }
    }

?>