<?php
/**
 * Bootstrap
 *
 */

$currentScript = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
    
//requires
    
$app = new Routes/Router;
    
foreach (glob('Routes/Path/*.php') as $file) include $file;

