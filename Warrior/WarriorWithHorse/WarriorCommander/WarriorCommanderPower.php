<?php
class WarriorCommanderPower extends WarriorWithHorse {
    private $moreAttack;
    public function __construct($name, $weapon, $shield,$armor)
    {
        parent::__construct($name, $weapon, $shield, $armor);
        $this->moreAttack = 40;
    }

    /**
     * @return int
     */
    public function getMoreAttack(): int
    {
        return $this->moreAttack;
    }

    /**
     * @param int $moreAttack
     */
    public function setMoreAttack(int $moreAttack): void
    {
        $this->moreAttack = $moreAttack;
    }
}
?>