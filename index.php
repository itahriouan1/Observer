<?php
/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 18/12/2017
 * Time: 20:44
 */

require 'AbstractObserver.php';
require 'AbstractSubject.php';
require 'Influencer.php';
require 'Fan.php';
require 'Friend.php';

$enseignant = new Influencer();
$etudiant1 = new Fan(1,$enseignant);
$etudiant2 = new Fan(2,$enseignant);
$enseignant2=new Friend(1,$enseignant);
$enseignant->setAge(96);
$enseignant->unregisterObserver($etudiant1);