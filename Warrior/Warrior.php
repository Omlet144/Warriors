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

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @return mixed
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * @return mixed
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param mixed $hp
     */
    public function setHp($hp): void
    {
        $this->hp = $hp;
    }
    public function __toString(){
        return 'Name: '.$this->name.';</br>'.'HP: '.$this->hp.';</br>'.'Horse: '.$this->horse.';</br>'.'Speed: '.$this->speed.';</br>'.'Attack: '.$this->attack.';</br>';
    }
}
?>