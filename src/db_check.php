<?php

echo PHP_EOL.'<><><><><><><><><><><>'.PHP_EOL;

try {
    DB::statement('select now()');
    echo 'DB接続チェック： OK';
} catch (Exception $e) {
    echo 'DB接続チェック： エラーが発生しました' . PHP_EOL;
    dump($e->getMessage());
    dump($e->getTraceAsString());
}

echo PHP_EOL.'<><><><><><><><><><><>'.str_repeat(PHP_EOL, 2);
exit;
