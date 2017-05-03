<?php
/**
 * Override Template
 *
 * Initializes values which can be overridden by {$currentScript}_template.php
 *
 */

$metas = '';
    
$title = 'Default Title';
    
$links = '';
    
$headScripts = '';
    
$navigation = '';
    
$leftSideBar = null;
    
$rightSideBar = null;
    
$footer = '';
    
$footerScripts = '';
    
require '/templates/' . $currentScript . '_template.php';
