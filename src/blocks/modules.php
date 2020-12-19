<?php
namespace Mod;

interface Firhter
{
    public function getProperties();
}

class War implements Firhter
{
    public $strength = 10;
    public $agility = 20;
    public $armor = 50;
    public $Weapon = 'Blaster';

    public function getProperties()
    {
        $n = $this->name;
        $w = $this->Weapon;
        $s = $this->strength;
        $a = $this->agility;
        $ar = $this->armor;
        return $n . ' Сила: ' . $s . ' Ловкость: ' . $a . ' Броня: ' . $ar . ' Оружие: ' . $w;
    }
}

?>
