<?php

/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 27/12/2017
 * Time: 22:13
 */
class Fan extends AbstractObserver {

    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function notify() {
        echo 'notification envoyé à un Fan. id='.$this->id.' age actuel:'.$this->subject->getAge().'<br>';
    }

    public function __construct($id, AbstractSubject $sujet) {
        $this->id = $id;
        $this->subject = $sujet;
        $this->subject->registerObserver($this);
    }
}
