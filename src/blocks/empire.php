<?php
namespace Empire;

use interfaceCommonwealth\Commonwealth;
use Traits\hellowWorld;

class Warrior implements Commonwealth {
    use hellowWorld;

    public $name = 'Имперский солдат:';
    public $strength = 10;
    public $weapon = 'Laser Blaster';
    public $armor = 20;

    public function getProperties () {
        $na = $this -> name;
        $st = $this -> strength;
        $we = $this -> weapon;
        $ar = $this -> armor;
        return "<span class=\"color-1\">" . 'Название: ' . $na . ' Сила: ' . $st . ' Оружие: ' . $we . ' Броня: ' . $ar . "</span>";
    }
}

class WarriorElite extends Warrior {
    public $name = 'Имперский Элитный солдат:';
    public $weapon = 'Heavy Blaster';
}

?>
