<?php
class Shield{
    private $strength;

    public function __construct(){
        $this->strength = 100;
    }

    /**
     * @return mixed
     */
    public function getStrength()
    {
        return $this->strength;
    }
}


?>