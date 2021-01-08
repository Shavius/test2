<?php

namespace blocks\modules;

class People implements People_First {
    public function __construct($name, $race, $level) {
        $this->name = $name;
        $this->race = $race;
        $this->level = $level;
    }
    public function infoPeople() {
        echo $this->name . '<br>';
        echo $this->race . '<br>';
        echo $this->level . '<br>';
    }
}
