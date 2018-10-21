<?php
/**
* SOLID
* L - принцип підстановки Барбари Лісков
* Liskov Substitution principle
*/

//$bird = new Bird();
//$bird = new Duck();
$bird = new Penguin();
$birdRun = new BirdRun($bird);
$birdRun->run();