<?php
/**
 * Override Template
 *
 * Initializes values which can be overridden by {$script}_template.php
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

require '/templates/' . $script . '_template.php';
