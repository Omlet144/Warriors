<?php
abstract class Warrior {
    private $name;
    private $hp;
    private $speed;
    private $attack;
    private $horse;

    protected function __construct($name, $hp, $speed, $attack, $horse)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->speed = $speed;
        $this->attack = $attack;
        $this->horse = $horse;
    }

    public function __toString(){
        return 'Name: '.$this->name.';</br>'.'HP: '.$this->hp.';</br>'.'Horse: '.$this->horse.';</br>'.'Speed: '.$this->speed.';</br>'.'Attack: '.$this->attack.';</br>';
    }
}
?>