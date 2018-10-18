<?php
/**
 * SOLID
 * O-принцип выдкритості/закритості
 * Open/Closed principle
*/

$logger = new DBLogger();
$product = new Product($logger);
$product->setPrice(10);

