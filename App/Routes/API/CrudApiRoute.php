<?php
/**
 * Crud API Routes
 *
 */
namespace App\Routes\API;
 
$app->get('/','CrudApiController:getAll')
    ->name('crud.api.get.all');

$app->get('/:id','CrudApiController:getOne')
    ->name('crud.api.get.one');

$app->post('/','CrudApiController:create')
    ->name('crud.api.create');

$app->put('/:id','CrudApiController:update')
    ->name('crud.api.update');

$app->delete('/:id','CrudApiController:delete')
    ->name('crud.api.delete');
