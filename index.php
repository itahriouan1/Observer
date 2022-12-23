<?php

require 'Subject.php';
require 'ObsevateurInterface.php';
require 'Influencer.php';
require 'friendObserver.php';
require 'SubscriberObserver.php';


$Inf = new Influencer(2);

$obs1 = new friendObserver();
$obs2 = new SubscriberObserver();
$obs3 = new friendObserver();

$Inf->addObserver($obs1);
$Inf->addObserver($obs2);
$Inf->addObserver($obs3);


$Inf->partagerPhoto();

$Inf->removeObserver($obs3);

echo "partage d'une autre photo après suupression d'un abbonné <br>";

$Inf->partagerPhoto();