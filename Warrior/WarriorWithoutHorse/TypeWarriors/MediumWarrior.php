<?php
class MediumWarrior extends WarriorWithoutHorse {
    public function __construct($name, $attack, $weapon, $shield, $armor_name,$armor, $armor_weight)
    {
        parent::__construct($name, $attack, $weapon, $shield, $armor_name,$armor, $armor_weight+10);
    }
}
?>