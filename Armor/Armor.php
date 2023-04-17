<?php
abstract class Armor {
    private $name;
    private $strength;

    private $weight;

    protected function __construct($name, $strength, $weight)
    {
        $this->name = $name;
        $this->strength = $strength;
        $this->weight = $weight;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getStrength()
    {
        return $this->strength;
    }
    public function getWeight()
    {
        return $this->weight;
    }
}
?>