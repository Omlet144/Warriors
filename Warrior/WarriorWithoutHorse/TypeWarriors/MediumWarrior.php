<?php
class MediumWarrior extends WarriorWithoutHorse {
    public function __construct($name, $weapon, $shield,$armor)
    {
        parent::__construct($name, $weapon->getAttack(), $weapon->getName(), $shield->getStrength(), $armor->getName(),$armor->getStrength(), $armor->getWeight()+10);
    }
}
?>