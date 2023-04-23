<?php
class WarriorCommanderArmor extends WarriorWithHorse {
    private $moreArmor;
    public function __construct($name, $weapon, $shield,$armor)
    {
        parent::__construct($name, $weapon, $shield, $armor);
        $this->moreArmor = 40;
    }

    /**
     * @return int
     */
    public function getMoreArmor(): int
    {
        return $this->moreArmor;
    }

    /**
     * @param int $moreArmor
     */
    public function setMoreArmor(int $moreArmor): void
    {
        $this->moreArmor = $moreArmor;
    }
}
?>