<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {
        public static function createMyWarrior () {

            $guerrier = new StartrekWarrior($GLOBALS['warriorID']);

            $weapon = new Weapon('lame', 100);
            $weapon->SetImageUrl('http://www.courantpositif.fr/wp-content/uploads/2013/06/Morpho.jpg');

            $guerrier->SetWeapon($weapon);
            $guerrier->SetImageUrl('https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/68dd54ca-60cf-4ef7-898b-26d7cbe48ec7/10-dithering-opt.jpg');
            $guerrier->saveNew();
        }


        public static function createOtherWarrior () {
            $guerrier = new StartrekWarrior('other');

            $weapon = new Weapon('lame', 100);
            $weapon->SetImageUrl('http://i63.servimg.com/u/f63/12/53/27/92/tekoka10.jpg');

            $guerrier->SetWeapon($weapon);
            $guerrier->SetImageUrl('https://demo.phpgang.com/crop-images/demo_files/pool.jpg');
            $guerrier->saveNew();
        }




  }
