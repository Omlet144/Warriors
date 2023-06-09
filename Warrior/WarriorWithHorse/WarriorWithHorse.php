<?php
class WarriorWithHorse extends Warrior{
    private $weapon;
    private $shield;
    private $armor;
    private $armor_name;
    private $armor_weight;

    public function __construct($name, $attack, $weapon, $shield, $armor_name,$armor, $armor_weight)
    {
        parent::__construct(name: $name, hp: 100, speed: 100 - $armor_weight, attack: $attack+10, horse:'Have');
        $this->weapon = $weapon;
        $this->shield = $shield;
        $this->armor_name = $armor_name;
        $this->armor = $armor;
        $this->armor_weight = $armor_weight;
    }


    public function __toString(){
        return parent::__toString().'Weapon: '.$this->weapon.';</br>'.'Shield: '.$this->shield.';</br>'.'Armor type: '.$this->armor_name.';</br>'.'Armor: '.$this->armor.';';
    }

}
?>