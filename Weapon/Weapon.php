<?php
abstract class Weapon {
    private $name;
    private $attack;

    protected function __construct($name, $attack)
    {
        $this->name = $name;
        $this->attack = $attack;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getAttack()
    {
        return $this->attack;
    }
    public function __toString(){
        return 'Name: '.$this->name.'; Attack: '.$this->attack;
    }
}
?>