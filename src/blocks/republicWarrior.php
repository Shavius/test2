<?php
    namespace Republic;

    interface Fighter {
        public function getProperties ();
    }

    class Warrior implements Fighter{
        public $strength = 10;
        public $agility = 20;
        public $armor = 50;

        public function getProperties () {
            $a = $this -> strength;
            $b = $this -> agility;
            $c = $this -> armor;
            return 'Сила: ' . $a . 'Ловкость: ' . $b . 'Броня: ' . $c;
        }
    }

    class WarriorElite extends Warrior {
        public $heavyWeapon = 'Heavy Blaser';
    }
?>
