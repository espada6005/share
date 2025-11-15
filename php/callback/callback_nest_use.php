<?php

function firstTask(callable $callback): void {
    echo "First task started\n";
    $callback();
}

function secondTask(callable $callback): void {
    echo "Second task started\n";
    $callback();
}

function thirdTask(string $message): void {
    echo "Third task: {$message}\n";
}

// 外部変数
$userName = "中川";
$greeting = "こんにちは";

// ネストしたクロージャで use を活用
firstTask(function() use ($userName, $greeting) {
    secondTask(function() use ($userName, $greeting) {
        thirdTask("{$greeting}、{$userName}さん！");
    });
});