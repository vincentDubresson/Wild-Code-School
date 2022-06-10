<?php



require '../vendor/autoload.php';
use CowSay\Cow;

$helloCow = new Cow('Hello, Farm!');

$helloCow->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $helloCow;