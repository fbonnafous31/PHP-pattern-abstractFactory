<?php

    namespace Pizza;

    abstract class Pizza {
        
        protected string $nom;

        public function __construct($nom) {
            $this->nom = $nom;            
        }

        abstract protected function preparer();

        public function cuire() {
            echo "Cuisson 25 minutes à 180°<br>";
        }

        public function couper() {
            echo "Déoupage en parts triangulaires<br>";
        }

        public function emballer() {
            echo "Emballage dans une boîte officielle<br>";
        }

        public function setNom(string $nom) {
            $this->nom = $nom;
        }

        public function getNom() {
            return $this->nom;
        }

    }

?>