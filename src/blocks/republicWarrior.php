<?php
    namespace Republic;

    interface Fighter {
        public function getProperties ();
    }

    class Warrior implements Fighter {
        public $name = "<span class=\"color\">Республиканский солдат</span>:";
        public $strength = 10;
        public $agility = 20;
        public $armor = 50;
        public $Weapon = 'Blaster';

        public function getProperties () {
            $n = $this -> name;
            $w = $this -> Weapon;
            $s = $this -> strength;
            $a = $this -> agility;
            $ar = $this -> armor;
            return $n . ' Сила: ' . $s . ' Ловкость: ' . $a . ' Броня: ' . $ar . ' Оружие: ' . $w;
        }
    }

    class WarriorElite extends Warrior {
        public $Weapon = 'Heavy Blaser';
        public $name = "<span class=\"color\">Республиканский солдат Элита</span>:";
    }
?>
