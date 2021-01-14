<?php


class Friend extends AbstractObserver
{
    private $id;

    public function __construct($id, AbstractSubject $subject) {
        $this->id = $id;
        $this->subject = $subject;
        $this->subject->registerObserver($this);
    }

    public function notify()
    {
        echo 'notification envoyé à un ami. id='.$this->id.' age actuel:'.$this->subject->getAge().'<br>';
    }
}