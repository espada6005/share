<?php

function firstTask(callable $callback): void {
    echo "First task started\n";
    // 処理の後にコールバックを呼び出す
    $callback();
}

function secondTask(callable $callback): void {
    echo "Second task started\n";
    $callback();
}

function thirdTask(): void {
    echo "Third task started\n";
}

// ネストしたコールバックの実行
firstTask(function() {
    echo "test\n";
    secondTask(function() {
        thirdTask();
    });
});