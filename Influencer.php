<?php

/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 18/12/2017
 * Time: 17:36
 */
class Influencer extends AbstractSubject
{
    private $age;


    public function setAge($age) {
        $this->age = $age;
        $this->notifyObserver();
    }
    public function getAge() {
        return $this->age;
    }
}