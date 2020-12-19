<?php
    namespace Empire;

    interface Fighter {
        public function getProperties ();
    }

    class Warrior implements Fighter{
        public $strength = 5;
        public $agility = 10;
        public $armor = 20;

        public function getProperties () {
            $a = $this -> strength;
            $b = $this -> agility;
            $c = $this -> armor;
            return 'Сила: ' . $a . 'Ловкость: ' . $b . 'Броня: ' . $c;
        }
    }
?>
