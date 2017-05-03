<?php
/**
 * Bootstrap
 *
 */

$script = $_SERVER['PHP_SELF'];
    
//requires
    
$app = new Routes/Router;
    
foreach (glob('Routes/Path/*.php') as $file) include $file;

