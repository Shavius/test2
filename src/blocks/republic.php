<?php
namespace Republic;

use Traits\hellowWorld;

class Warrior {
    use hellowWorld;

    public $name = 'Республиканский солдат:';
    public $strength = 20;
    public $weapon = 'Laser Blaster';
    public $armor = 50;

    public function getProperties () {
        $na = $this -> name;
        $st = $this -> strength;
        $we = $this -> weapon;
        $ar = $this -> armor;
        return "<span class=\"color-1\">" . 'Название: ' . $na . ' Сила: ' . $st . ' Оружие: ' . $we . ' Броня: ' . $ar . "</span>";
    }
}

?>
