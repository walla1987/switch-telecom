<?php

use App\Base;

function increasePrice(Base $base, float $percentage): void
{
    $increaseAmount = $base->getPrice() * ($percentage / 100);
    $newPrice = $base->getPrice() + $increaseAmount;
    $base->setPrice($newPrice);
}

function findEmail(string $input): string
{
    $position = strcmp('find@me.com', $input);

    if ($position === 0) {
        return "Match found.";
    }

    return "No match found.";
}