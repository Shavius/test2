<?php
    namespace Empire;

    interface Fighter {
        public function getProperties ();
    }

    /**
    * class Warrior
    * @package blocks
    * @var string $name Класс персонажа
    * @var int $strength Сила персонажа
    * @var int $agility Ловкость персонажа
    * @var int $armor Броня персонажа
    * @var string $Weapon Оружие персонажа
    */
    class Warrior implements Fighter {
        public $name = "<span class=\"color\">Имперский солдат</span>:";
        public $strength = 5;
        public $agility = 10;
        public $armor = 20;
        public $Weapon = 'Blaster';

        /**
        * function getProperties
        * @return string
        */
        public function getProperties () {
            $n = $this -> name;
            $w = $this -> Weapon;
            $s = $this -> strength;
            $a = $this -> agility;
            $ar = $this -> armor;
            return $n . ' Сила: ' . $s . ' Ловкость: ' . $a . ' Броня: ' . $ar . ' Оружие: ' . $w;
        }
    }

    /**
    * class WarriorElite
    * @package blocks
    * @var string $Weapon Название оружия
    * @var string $name Класс персонажа
    */
    class WarriorElite extends Warrior {
        public $name = "<span class=\"color\">Имперский солдат Элита</span>:";
        public $Weapon = 'Heavy Blaser';
    }
?>
