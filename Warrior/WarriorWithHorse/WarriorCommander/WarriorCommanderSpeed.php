<?php
class WarriorCommanderSpeed extends WarriorWithHorse {
    private $moreSpeed;
    public function __construct($name, $weapon, $shield,$armor)
    {
        parent::__construct($name, $weapon, $shield, $armor);
        $this->moreSpeed = 40;
    }

    /**
     * @return int
     */
    public function getMoreSpeed(): int
    {
        return $this->moreSpeed;
    }

    /**
     * @param int $moreSpeed
     */
    public function setMoreSpeed(int $moreSpeed): void
    {
        $this->moreSpeed = $moreSpeed;
    }
}
?>