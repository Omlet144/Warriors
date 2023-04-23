<?php
class WarriorWithHorse extends Warrior{
    private $weapon;
    private $shield;
    private $armor;
    private $armor_name;
    private $armor_weight;

    public function __construct($name, $weapon, $shield,$armor)
    {
        parent::__construct(name: $name, hp: 100, speed: 100 - $armor->getWeight(), attack: $weapon->getAttack()+10, horse:'Have');
        $this->weapon = $weapon->getName();
        $this->shield = $shield->getStrength();
        $this->armor_name = $armor->getName();
        $this->armor = $armor->getStrength();
        $this->armor_weight = $armor->getWeight();
    }

    /**
     * @return mixed
     */
    public function getArmor()
    {
        return $this->armor;
    }

    /**
     * @return mixed
     */
    public function getShield()
    {
        return $this->shield;
    }

    /**
     * @param mixed $armor
     */
    public function setArmor($armor): void
    {
        $this->armor = $armor;
    }

    /**
     * @param mixed $shield
     */
    public function setShield($shield): void
    {
        $this->shield = $shield;
    }
    public function __toString(){
        return parent::__toString().'Weapon: '.$this->weapon.';</br>'.'Shield: '.$this->shield.';</br>'.'Armor type: '.$this->armor_name.';</br>'.'Armor: '.$this->armor.';';
    }

}
?>