<?php

require_once './Classes/Autoloader.php';
\Classes\Autoloader::register();



Echo '<h2>Task 1</h2>';

echo implode(' ', \Classes\LongestIncreasingSubsequence::main(
    [3, 14, 5, 12, 15, 7, 8, 9, 11, 10, 1,]
));

echo '<br />';
echo implode(' ', \Classes\LongestIncreasingSubsequence::main(
    [7, 3, 5, 8, -1, 0, 6, 7,]
));

echo '<br />';
echo implode(' ', \Classes\LongestIncreasingSubsequence::main(
    [1, 2, 5, 3, 5, 2, 4, 1,]
));

echo '<br />';
echo implode(' ', \Classes\LongestIncreasingSubsequence::main(
    [0, 10, 20, 30, 30, 40, 1, 50, 2, 3, 4, 5, 6,]
));

echo '<br />';
echo implode(' ', \Classes\LongestIncreasingSubsequence::main(
    [11, 12, 13, 3, 14, 4, 15, 5, 6, 7, 8, 7, 16, 9, 8,]
));

echo '<br />';
echo implode(' ', \Classes\LongestIncreasingSubsequence::main(
    [3, 14, 5, 12, 15, 7, 8, 9, 11, 10, 1,]
));





Echo '<h2>Task 2</h2>';
$json = '["Dolphin", "Lion", "Eagle", "Bee", "Tiger"]';
$a = new \Classes\Caller($json);
$a->output();