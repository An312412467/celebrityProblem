<?php

use App\Classes\Celebrity;

// Вложенный массивы это люди, а элементы вложенных массивов это индэксы тех кого они знают
$people = [
    [1, 2, 4],
    [0, 2, 4],
    [],
    [2, 4],
    [2, 3],
];

// первый неоптимальный вариант
// $celebrity = null;
//
// for ($i = 0; $i < count($people); $i++) {
//    $ celebrityCandidate = $i;
//     for ($j = 0; $j < count($people); $j++) {
//         if (knows($people[$i], $j)) {
//             $celebrityCandidate = $celebrity;
//             break;
//         }
//     }
//     $celebrity = $celebrityCandidate;
// }

$celebrity = new Celebrity($people);
$findResult = $celebrity->findCelebrity();

echo $findResult;
