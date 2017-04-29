<?php
/**
 * Crud API Routes
 *
 */
 
$app->get('/','API/CrudApiController:getAll');

$app->get('/:id','API/CrudApiController:getOne');

$app->post('/','API/CrudApiController:create');

$app->put('/:id','API/CrudApiController:update');

$app->delete('/:id','API/CrudApiController:delete');
