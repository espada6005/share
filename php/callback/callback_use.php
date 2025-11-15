<?php

function greetUser(callable $callback): void {
    $name = "中川";
    $callback($name);
}

$message = "こんにちは";

greetUser(function(string $userName) use ($message) {
    echo "{$message}、{$userName}さん！\n";
});