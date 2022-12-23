<?php

class friendObserver implements ObserverInterface {
    public function notify()
    {
        echo 'notification envoyée à l ami <br>';
    }
}