<?php
class LightWarrior extends WarriorWithoutHorse {
    public function __construct($name, $attack, $weapon, $armor_name,$armor, $armor_weight)
    {
        parent::__construct($name, $attack, $weapon, 'Not have', $armor_name,$armor, $armor_weight);
    }
}
?>