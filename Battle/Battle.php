<?php
function fight($fighter, $defender)
{
    if ($fighter->getSpeed() > $defender->getSpeed()) {
        $rand = rand(0, 4);
        if ($rand == 1) {
            if ($defender->getShield() != 'Not have' && $defender->getShield() > 0) {
                $defender->setShield($defender->getShield() - $fighter->getAttack());
            } elseif ($defender->getArmor() > 0) {
                $defender->setArmor($defender->getArmor() - $fighter->getAttack());
            } else {
                $defender->setHp($defender->getHp() - $fighter->getAttack());
            }
        } else {
            if ($defender->getArmor() > 0) {
                $defender->setArmor($defender->getArmor() - $fighter->getAttack());
            } else {
                $defender->setHp($defender->getHp() - $fighter->getAttack());
            }
        }
    }
    else {
        $rand = rand(0, 1);
        if ($rand == 1) {
            if ($defender->getShield() != 'Not have' && $defender->getShield() > 0) {
                $defender->setShield($defender->getShield() - $fighter->getAttack());
            } elseif ($defender->getArmor() > 0) {
                $defender->setArmor($defender->getArmor() - $fighter->getAttack());
            } else {
                $defender->setHp($defender->getHp() - $fighter->getAttack());
            }
        } else {
            if ($defender->getArmor() > 0) {
                $defender->setArmor($defender->getArmor() - $fighter->getAttack());
            } else {
                $defender->setHp($defender->getHp() - $fighter->getAttack());
            }
        }
    }
}
class Battle{
    public function Battle($fighter, $fighter2, $name1, $name2){
        while($fighter2->getHp()>0)
        {
            if($fighter->getSpeed()>$fighter2->getSpeed())
            {
                $rand = rand(0, 2);
                //echo $rand;
                if ($rand>0)
                {
                    fight($fighter, $fighter2);
                }
                else{
                    fight($fighter2, $fighter);
                }
            }
            elseif ($fighter->getSpeed()<$fighter2->getSpeed()){
                $rand = rand(0, 2);
                //echo $rand;
                if ($rand>0)
                {
                    fight($fighter2, $fighter);
                }
                else{
                    fight($fighter, $fighter2);
                }
            }
            else{
                $rand = rand(0, 1);
                //echo $rand;
                if($rand==1)
                {
                    fight($fighter, $fighter2);
                }
                else
                {
                    fight($fighter2, $fighter);
                }
            }
//            echo  '<h4>'.$fighter->getName().'</h4>'.$fighter;
//            echo  '<h4>'.$fighter2->getName().'</h4>'.$fighter2;
//            echo '</br></br>-----Battle------</br></br>';
            if($fighter->getHp()<=0)
            {
                break;
            }
        }
        if($fighter->getHp()>0)
        {
            echo '</br>-----Battle------</br>';
            echo $name1.' - '.$fighter->getName().' VS '.$name2.' - '.$fighter2->getName();
            echo '</br>-----WIN------</br>';
            echo 'Squad: '.$name1.' - '.$fighter->getName();
        }
        else{
            echo '</br>-----Battle------</br>';
            echo $name1.' - '.$fighter->getName().' VS '.$name2.' - '.$fighter2->getName();
            echo '</br>-----WIN------</br>';
            echo 'Squad: '.$name2.' - '.$fighter2->getName();
        }

    }
}
?>