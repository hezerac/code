<?php
/**
 * Crud API Routes
 *
 */
namespace App\Routes\API;
 
$app->get('/','API/CrudApiController:getAll')
    ->name('crud.api.get.all');

$app->get('/:id','API/CrudApiController:getOne')
    ->name('crud.api.get.one');

$app->post('/','API/CrudApiController:create')
    ->name('crud.api.create');

$app->put('/:id','API/CrudApiController:update')
    ->name('crud.api.update');

$app->delete('/:id','API/CrudApiController:delete')
    ->name('crud.api.delete');
