<?php


// Создаем новый объект DirectoryIterator
$dir = new DirectoryIterator("/Windows/security/logs");
// Цикл по содержанию директории
foreach ($dir as $item) {
    echo $item . "<br>";
}




$dir = new DirectoryIterator(__DIR__."../../");
foreach ($dir as $file) {
    if ($file->isDot()) {
        continue;
    }
    echo $file->getFilename() . "<br>";
}