<?php
/**
 * Crud API Routes
 *
 */
    
$app->get('/crud/','CrudController:getAll')
    ->name('crud.get.all');
    
$app->get('/crud/:id','CrudController:getOne')
    ->name('crud.get.one');
    
$app->post('/crud/','CrudController:create')
    ->name('crud.create');
    
$app->put('/crud/:id','CrudController:update')
    ->name('crud.update');
    
$app->delete('/crud/:id','CrudController:delete')
    ->name('crud.delete');
