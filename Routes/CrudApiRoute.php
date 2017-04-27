<?php
/**
 * Crud Routes
 *
 */
 
$app = /Router;


$app->get('/','/Controllers/CrudApiController:getAll');

$app->get('/:id','/Controllers/CrudApiController:getOne');

$app->post('/','/Controllers/CrudApiController:create');

$app->put('/:id','/Controllers/CrudApiController:update');

$app->delete('/:id','/Controllers/CrudApiController:delete');

$app->run();


?>
