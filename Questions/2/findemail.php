<?php
function findEmail(string $input)
{
    $position = strcmp('find@me.com', $input);

    if ($position !== false && $position === 0) {
        return "Match found.";
    }

    return "No match found.";
}