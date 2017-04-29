<?php
/**
 * Bootstrap
 *
 */


//requires


$app = new Routes/Router;

foreach (glob('Routes/Path/*.php') as $file) {
    include $file;
}
