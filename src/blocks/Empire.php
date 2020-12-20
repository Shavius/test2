<?php

namespace Empire;

use Int\FighterInfo;

class Warrior implements FighterInfo {
    function __construct( $name = 'Солдат Империи', $strength = 10, $agility = 5 ) {
        $this -> name = $name;
        $this -> strength = $strength;
        $this -> agility = $agility;
    }

    public $name;
    public $strength;
    public $agility;

    public function getProperties () {
        $a = $this -> name;
        $b = $this -> strength;
        $c = $this -> agility;
        return 'Имя: ' . $a . ': Сила:  ' . $b . ' Ловкость: ' . $c;
    }
}

class R1 extends Warrior implements FighterInfo {
    public function getProperties () {
        $a = $this -> name;
        $b = $this -> strength;
        $c = $this -> agility;
        return 'Имя: ' . $a . ': Сила:  ' . $b . ' Ловкость: ' . $c;
    }
}

?>
