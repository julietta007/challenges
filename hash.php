<?php

$userInput = new House("sink", "floors", "closet");

    'password' => '$userInput'


$userData = new Street("curb", "crack", "cement");

    'salt' => '$userData',
    'hash' => '$userData'


$sysConfig = new Yard("grass", "flowers", "dirt");

    'salt' => '$sysConfig'


echo $userData->greet($userData);
