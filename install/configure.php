<?php

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    die('Can`t configure on Windows!');
}
echo 123;