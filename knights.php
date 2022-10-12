<?php

$min_knights = 2;
$max_knights = 10;

// random_int — Generates cryptographically secure pseudo-random integers
// number of knights in a circle
$total_knights = random_int($min_knights, $max_knights);

// Init. all Knights with 100 HP
$knights = array_fill(0, $max_knights, 100);

// The game is over when only one knight is left on the field
while (count($knights) > 1) {
    $dice_roll = random_int(1, 6);

    // Advance the internal pointer of an array to next player
    next($knights);
    $next_knight = key($knights);

    // If we reach to last item/player - Reset Array's internal pointer
    if (key($knights) == null) {
        reset($knights);
        $next_knight = key($knights);
    }

    // The number rolled is subtracted from the next player's life points
    $knights[$next_knight] -= $dice_roll;

    // dead knights are removed from the field
    if ($knights[$next_knight] <= 0) {
        unset($knights[$next_knight]);
    }
}

// for php <7.3
// reset($knights);
// $winner = key($knights) + 1;

// +1 required because array starts from 0 :)
$winner = array_key_first($knights) + 1;
print("Knight {$winner} won the game");
