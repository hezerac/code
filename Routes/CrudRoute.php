<?php
/**
 * Crud Routes
 *
 */
 
$app = /Router;


$app->get('/','/Controllers/CrudController:get');

$app->get('/:id','/Controllers/CrudController:getOne');

$app->post('/','/Controllers/CrudController:create');

$app->put('/:id','/Controllers/CrudController:update');

$app->delete('/:id','/Controllers/CrudController:delete');

$app->run();
 

?>
