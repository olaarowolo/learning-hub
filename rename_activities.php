<?php

$directory = __DIR__ . '\resources\views\br\yeargroups';

function renameHtmlToBlade($dir) {
    $files = scandir($dir);

    foreach ($files as $file) {
        if ($file === '.' || $file === '..') {
            continue;
        }

        $filePath = $dir . DIRECTORY_SEPARATOR . $file;

        if (is_dir($filePath)) {
            // Recursively process subdirectories
            renameHtmlToBlade($filePath);
        } elseif (is_file($filePath) && pathinfo($file, PATHINFO_EXTENSION) === 'html') {
            $newFilePath = $dir . DIRECTORY_SEPARATOR . pathinfo($file, PATHINFO_FILENAME) . '.blade.php';
            rename($filePath, $newFilePath);
            echo "Renamed: $file to " . basename($newFilePath) . PHP_EOL;
        }
    }
}

renameHtmlToBlade($directory);
