<?php

require_once('Base.php');

function increasePrice(Base $base, float $percentage): void {
    $increaseAmount = $base->getPrice() * ($percentage / 100);
    $newPrice = $base->getPrice() + $increaseAmount;
    $base->setPrice($newPrice);
}