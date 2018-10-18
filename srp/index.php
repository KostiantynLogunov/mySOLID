<?php
/** 
 * SOLID
 * S-принцип єдиної відповідальності
 * Single responsibility principle
*/
require('product');
require('logger');

$logger = new Logger();
$product = new Product($logger);
$product->setPrice(10);

