<?php

echo '読書ログを登録してください' . PHP_EOL;
echo '書籍名：';
$title = trim(fgets(STDIN));

echo '著者名：';
$author = trim(fgets(STDIN));

echo '読書状況（未読,読んでる,読了）：';
$status = trim(fgets(STDIN));

echo '評価（5点満点の整数）：';
$score = trim(fgets(STDIN));

echo '感想：';
$summary = trim(fgets(STDIN));

echo '登録が完了しました' . PHP_EOL . PHP_EOL;

echo '読書ログを表示します' . PHP_EOL;
echo '書籍名：' . $title . PHP_EOL;
echo '著者名：' . $author . PHP_EOL;
echo '読書状況：' . $status . PHP_EOL;
echo '評価：' . $score . PHP_EOL;
echo '感想：' . $summary . PHP_EOL;
