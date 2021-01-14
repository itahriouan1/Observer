<?php
/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 18/12/2017
 * Time: 20:43
 */
abstract class AbstractObserver {
    protected $subject;
    public abstract function notify();
}

