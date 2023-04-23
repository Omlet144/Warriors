<?php
include_once 'Battle\Battle.php';

include_once 'Shield\Shield.php';

include_once 'Armor\Armor.php';
include_once 'Armor\TypeArmor\Heavy\Steel.php';
include_once 'Armor\TypeArmor\Medium\ChainMail.php';
include_once 'Armor\TypeArmor\Light\Leather.php';
include_once 'Armor\TypeArmor\Light\Textile.php';

include_once 'Warrior\Warrior.php';

include_once 'Warrior\WarriorWithHorse\WarriorWithHorse.php';
include_once 'Warrior\WarriorWithHorse\WarriorCommander\WarriorCommanderPower.php';
include_once 'Warrior\WarriorWithHorse\WarriorCommander\WarriorCommanderSpeed.php';
include_once 'Warrior\WarriorWithHorse\WarriorCommander\WarriorCommanderArmor.php';

include_once 'Warrior\WarriorWithoutHorse\WarriorWithoutHorse.php';
include_once 'Warrior\WarriorWithoutHorse\TypeWarriors\HeavyWarrior.php';
include_once 'Warrior\WarriorWithoutHorse\TypeWarriors\MediumWarrior.php';
include_once 'Warrior\WarriorWithoutHorse\TypeWarriors\LightWarrior.php';

include_once 'Weapon\Weapon.php';
include_once 'Weapon\TypeWeapon\Hard\Axe.php';
include_once 'Weapon\TypeWeapon\Hard\Mace.php';
include_once 'Weapon\TypeWeapon\Hard\Pike.php';
include_once 'Weapon\TypeWeapon\Medium\Sword.php';
include_once 'Weapon\TypeWeapon\Medium\Spear.php';
include_once 'Weapon\TypeWeapon\Weak\Bow.php';

// Shields
$shield = new Shield();

// Weapons
$axe = new Axe();
$mace = new Mace();
$pike = new Pike();
$spear = new Spear();
$sword = new Sword();
$bow = new Bow();

// Armors
$steel = new Steel();
$chainMail = new ChainMail();
$leather = new Leather();
$textile = new Textile();

//Commanders
$commander_power = new WarriorCommanderPower('commander_power', $pike, $shield, $chainMail);
$commander_speed = new WarriorCommanderSpeed('commander_speed', $bow, $shield, $textile);
$commander_armor = new WarriorCommanderSpeed('commander_armor', $sword, $shield, $steel);
//Warriors
$warrior_with_horse = new WarriorWithHorse('warrior_with_horse', $sword, $shield, $chainMail);
$warrior_with_horse2 = new WarriorWithHorse('warrior_with_horse', $mace, $shield, $leather);
$warrior_heavy = new HeavyWarrior('warrior_heavy', $axe, $shield, $steel);
$warrior_medium = new MediumWarrior('warrior_medium', $spear, $shield, $chainMail);
$warrior_light = new LightWarrior('warrior_light', $bow, $textile);

$flag = 0;
$battle = new Battle();
//------------------Squads---------------------
$squad1 = array("Alex"=>array($commander_power, $warrior_with_horse,$warrior_light, $warrior_heavy));
$squad2 = array("Enemy"=>array($commander_speed, $warrior_with_horse2,$warrior_medium, $warrior_light));
//------------------Battle---------------------
foreach ($squad1 as $name_squad=>$item1)
{
    foreach ($item1 as $warrior1)
    {
        foreach ($squad2 as $name_squad2=>$item2)
        {
            foreach ($item2 as $warrior2)
            {
                $battle->Battle($warrior1, $warrior2, $name_squad, $name_squad2);
                echo '</br>';
            }
        }
    }

}
echo '</br>';
//------------------All Warriors HP---------------------
$all_army = array($squad1, $squad2);
foreach ($all_army as $squads=>$squad)
{
    foreach ($squad as $name_army=>$squad_army)
    {
        foreach ($squad_army as $warriors)
        {
            echo $name_army.' - '.$warriors->getName().' = HP: '.$warriors->getHp().'</br>';
        }

    }
}
echo '</br>';
//------------------WINNER---------------------
foreach ($all_army as $squads=>$squad)
{
    foreach ($squad as $name_army=>$squad_army)
    {
        foreach ($squad_army as $warriors)
        {
            if($warriors->getHP()>0)
            {
                if($flag==0)
                {
                    $flag++;
                    echo 'WIN squad: '.$name_army.':</br>';
                }
                echo $warriors->getName().' = HP: '.$warriors->getHp().'</br>';
            }
        }

    }
}


//echo  '<h4>'.$warrior_with_horse->getName().':</h4>'.$warrior_with_horse;
//echo '</br></br>-----VS------</br></br>';
//echo  '<h4>'.$warrior_light->getName().':</h4>'.$warrior_light;
//
//echo '</br></br>-----Battle------</br></br>';
//$battle->Battle($warrior_with_horse, $warrior_light);

?>