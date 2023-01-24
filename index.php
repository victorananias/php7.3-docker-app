<?php 

foreach (get_loaded_extensions() as $extension) {
    if (substr($extension, 0, 4) == 'pdo_') {
        echo $extension . PHP_EOL;
    }
}