<?php
class LightWarrior extends WarriorWithoutHorse {
    public function __construct($name, $weapon,$armor)
    {
        parent::__construct($name, $weapon->getAttack(), $weapon->getName(), 'Not have', $armor->getName(),$armor->getStrength(), $armor->getWeight());
    }
}
?>