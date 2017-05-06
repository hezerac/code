<?php
/**
 * Crud Page Routes
 *
 */
namespace App\Routes\Page;
    
$app->post('/crud/', function() use ($app) {
    $app->redirect(
        $app->urlFor('crud.get.all')
    );
});
