<?php
include_once 'SquareDance.php';
include_once 'Dancer.php';

$queueDance = new SquareDance();

$genders = ['Male', 'Female'];

$names = ['Dany', 'Alex', 'Mickey', 'Banana', 'Whois', 'Cherry'];

for ($i = 0; $i < 20; $i++) {

    $randName = $names[array_rand($names)];
    $randGender = $genders[array_rand($genders)];

    $dance = new Dancer($randName, $randGender);
    $queueDance->addDancer($dance);
}

echo "<pre>";
print_r($queueDance);
echo "<hr>";

for ($i = 0;$i < 10;$i++){
    $queueDance->letDance();
    echo "<hr>";
}

print_r($queueDance);
