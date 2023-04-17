<?php
include_once 'Shield\Shield.php';

include_once 'Armor\Armor.php';
include_once 'Armor\TypeArmor\Heavy\Steel.php';
include_once 'Armor\TypeArmor\Medium\ChainMail.php';
include_once 'Armor\TypeArmor\Light\Leather.php';
include_once 'Armor\TypeArmor\Light\Textile.php';

include_once 'Warrior\Warrior.php';
include_once 'Warrior\WarriorWithHorse\WarriorWithHorse.php';
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

//Warriors
$warrior_with_horse = new WarriorWithHorse(
    'Alex',
    $sword->getAttack(),
    $sword->getName(),
    $shield->getStrength(),
    $steel->getName(),
    $steel->getStrength(),
    $steel->getWeight()
);

$warrior_light = new LightWarrior(
    'Sergey',
    $bow->getAttack(),
    $bow->getName(),
    $textile->getName(),
    $textile->getStrength(),
    $textile->getWeight()
);
echo  '<h3>Warrior:</h3>'.$warrior_with_horse;
echo  '<h3>Warrior:</h3>'.$warrior_light;
?>