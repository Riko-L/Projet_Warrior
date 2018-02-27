<?php

require_once __DIR__ . "/../base/localWarrior.php";


$GLOBALS['warriorID'] = 'monIdRiko';

// Définissez vos class de combattants
abstract class Warrior extends LocalWarrior
{

    public $id, $name, $speed, $life, $shield, $imageUrl, $weapon;

    public function __construct($id, $speed = 30, $life = 100, $shield = 20)
    {

        $this->id = $id;
        $this->speed = $speed;
        $this->life = $life;
        $this->shield = $shield;
    }


    public function SetWeapon(Weapon $weapon)
    {

        return $this->weapon = $weapon;

    }

    public function SetImageUrl($url)
    {

        $this->imageUrl = $url;
    }

}

;


class StartrekWarrior extends Warrior
{
    public $mentalPower;


    public function __construct($id, $speed = 30, $life = 100, $shield = 20, $mentalPower = 8)
    {
        $this->mentalPower = $mentalPower;

        parent::__construct($id, $speed, $life, $shield);

    }


    public function power()
    {

        return $this->mentalPower;
    }


}

class MarvelWarrior extends Warrior
{
    public $superPower;

    public function __construct($id, $speed = 30, $life = 100, $shield = 20, $superPower = 100)
    {
        $this->superPower = $superPower;

        parent::__construct($id, $speed, $life, $shield);

    }

    public function power()
    {

        return $this->superPower;
    }

}

class PokemonWarrior extends Warrior
{
    public $level;

    public function __construct($id, $speed = 30, $life = 100, $shield = 20, $level = 1)
    {
        $this->level = $level;

        parent::__construct($id, $speed, $life, $shield);

    }


    public function power()
    {

        return $this->level;
    }

}


class Weapon
{

    public $id, $strength, $imageUrl;

    public function __construct($id, $strength)
    {
        $this->id = $id;
        $this->strength = $strength;
    }

    public function SetImageUrl($url)
    {
        $this->imageUrl = $url;

    }
}