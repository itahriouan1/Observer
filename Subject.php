<?php

class Subject {
    protected $Observers;

    public function addObserver($Observer){
        $this->Observers [] = $Observer;
    }

    public function removeObserver($Observer){
        if ($key = array_search($Observer,$this->Observers)!==false){
            unset($this->Observers[$key]);
        }
        
    }

    public function notifyObservers() {
        foreach ($this->Observers as $observer){
            $observer->notify();
        }
    }
}