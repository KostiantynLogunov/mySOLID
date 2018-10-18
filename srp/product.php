<?php
class Product {

    private $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }

    public function setPrice($price) {
        try {
            //save price to DB
        } catch (DbException $e) {
            $this->logger->log($e->getMessage());
        }
    }
}