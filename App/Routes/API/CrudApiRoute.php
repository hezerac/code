<?php
/**
 * Crud API Routes
 *
 */
namespace App\Routes\API;
    
$app->get('/','CrudController:getAll')
    ->name('crud.get.all');
    
$app->get('/:id','CrudController:getOne')
    ->name('crud.get.one');
    
$app->post('/','CrudController:create')
    ->name('crud.create');
    
$app->put('/:id','CrudController:update')
    ->name('crud.update');
    
$app->delete('/:id','CrudController:delete')
    ->name('crud.delete');
