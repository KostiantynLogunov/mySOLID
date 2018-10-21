<?php

class Bird {
    public function fly() {
        $flySpeed = 10;
        return $flySpeed;
    }
}

/*
 * Дочірній клас від Bird
 * Не змінює поведінку, але доповнює.
 * Не нарушає принцип LSP
 */
class Duck extends Bird {
    public function fly() {
        $flySpeed = 8;
        return $flySpeed;
    }

    public function swim() {
        $swimSpeed = 2;
        return $swimSpeed;
    }
}


/*
 * Дочірній клас від Bird
 * Змінює поведінку
 * Нарушає принцип LSP
 */
class Penguin extends Bird {
    public function fly() {
//        die('I can`t fly (('); //не типічна поведінка die or exception
        return 'I can`t fly (('; //не типічна поведінка - повертаємо
    }

    public function swim() {
        $swimSpeed = 2;
        return $swimSpeed;
    }
}

