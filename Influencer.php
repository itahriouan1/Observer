<?php

class Influencer extends Subject {
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function partagerPhoto(){
        echo 'nouvelle photo partagée <br>';
        $this->notifyObservers();
    }
}