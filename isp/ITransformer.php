<?php
/*
* SOLID
* I - Принцип розділення інтерфейсів
* Interface Segregation Principle, ISP
*/

interface ICarTransformer {
    public function toCar();

}

interface IPlaneTransformer
{
    public function toPlane();
}

interface IShipTransformer {
    public function toShip();
}
