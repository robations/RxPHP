<?php

require_once __DIR__ . '/../bootstrap.php';

//Without a seed
$source = \Rx\Observable::fromArray(range(1, 3));

$subscription = $source
    ->reduce(function ($acc, $x) {
        return $acc + $x;
    })
    ->subscribe($createStdoutObserver());

//Next value: 6
//Complete!


//With a seed
$source = \Rx\Observable::fromArray(range(1, 3));

$subscription = $source
    ->reduce(function ($acc, $x) {
        return $acc * $x;
    }, 1)
    ->subscribe($createStdoutObserver());

//Next value: 6
//Complete!
