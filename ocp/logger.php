<?php
class FileLogger implements ILogger
{
    public function log($message=0) {
        //...
        $this->saveToFile($message);
    }

    private function saveToFile($message)
    {
        //...code
    }
}

class DBLogger implements ILogger
{
    public function log($message=0) {
        //...
        $this->saveToDB($message);
    }

    private function saveToDB($message)
    {
        //...code
    }
}

class EmailLogger implements ILogger {

    public function log($message = 0)
    {
        $this->saveToEmail($message);
    }

    private function saveToEmail($message){
//        ...code
    }
}