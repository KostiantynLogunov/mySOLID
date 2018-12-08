<?php
/**
 * SOLID
 * S-принцип єдиної відповідальності
 * Single responsibility principle
*/

$logger = new Logger();
$product = new Product($logger);
$product->setPrice(10);

