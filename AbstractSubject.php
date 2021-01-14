<?php
/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 18/12/2017
 * Time: 17:35
 */
abstract class AbstractSubject {
    private $_observateurs;

    public function registerObserver(AbstractObserver $observateur) {
        $this->_observateurs[] = $observateur;
    }
    public function unregisterObserver(AbstractObserver $observateur) {
        $key = array_search($observateur, $this->_observateurs);

        if (false !== $key) {
            unset($this->_observateurs[$key]);
        }
    }
    public function notifyObserver() {
        foreach ($this->_observateurs as $observateur) {
            $observateur->notify();
        }
    }
}

