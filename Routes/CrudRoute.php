<?php
/**
 * Crud Routes
 *
 */
 
$route = /Path/Route();


$route->get('/','/Controllers/CrudController:get');

$route->post('/','/Controllers/CrudController:create');

$route->put('/id','/Controllers/CrudController:update');

$route->delete('/id','/Controllers/CrudController:delete');

 
?>
