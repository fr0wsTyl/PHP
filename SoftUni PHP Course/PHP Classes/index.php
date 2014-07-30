<?php

class Main {
    public function __construct() {
        echo 'public construct';
    }
    public function other() {
        echo 'in public other';
    }
    protected function protect() {
        echo 'in protected';
    }
    private function MyPrivate() {
        echo 'in private';
    }
    public function echoOthers() {
        echo $this->other();
        echo $this->protect();
        echo $this->MyPrivate();
    }
}
$m1 = new Main();
//$m1->other();
//$m1->protect();
//$m1->MyPrivate();
$m1->echoOthers();