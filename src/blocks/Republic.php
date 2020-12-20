<?php

namespace Republic;

use Int\FighterInfo;

class Warrior implements FighterInfo {
    function __construct( $name = 'Солдат Республики', $strength = 20, $agility = 30 ) {
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
    public $subname = 'Солдат Республики Элита';

    public function getProperties () {
        $a = $this -> subname;
        $b = $this -> strength;
        $c = $this -> agility;
        return 'Имя: ' . $a . ': Сила:  ' . $b . ' Ловкость: ' . $c;
    }
}

?>
