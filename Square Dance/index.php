<?php
include_once 'SquareDance.php';
include_once 'Dancer.php';

$queueDance = new SquareDance();

$genders = ['Male', 'Female'];

$names = ['Alis', 'Alex', 'Mickey', 'Banana', 'Hot-dog', 'Thuong'];

for ($i = 0; $i < 10; $i++) {

    $randName = $names[array_rand($names)];
    $randGender = $genders[array_rand($genders)];

    $dance = new Dancer($randName, $randGender);
    $queueDance->addDancer($dance);
}

echo "<pre>";
var_dump($queueDance);
echo "<hr>";

var_dump($queueDance->letDance());
echo "<hr>";

var_dump($queueDance);
