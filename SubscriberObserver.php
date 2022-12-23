<?php

class SubscriberObserver implements ObserverInterface {
    public function notify(){
        echo 'message envoyé à l abonné <br>';
    }
}