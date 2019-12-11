<?php

use core\App;

App::$collector->get('/', ['workspace\controllers\MainController', 'actionIndex']);
/*
 * Subdomain
 */
App::$collector->get('/sub', ['workspace\controllers\SubdomainController', 'actionIndex']);
App::$collector->get('/del-dom/{id}', ['workspace\controllers\SubdomainController', 'actionDel']);
App::$collector->get('/add-form', ['workspace\controllers\SubdomainController', 'actionAddForm']);
App::$collector->post('/add', ['workspace\controllers\SubdomainController', 'actionAdd']);
/*
 * End
 */


App::$collector->get('/users', ['workspace\controllers\MainController', 'actionUsers']);
App::$collector->get('/send-form', ['workspace\controllers\SendController', 'actionIndex']);
App::$collector->get('products', function(){
    return 'Create Product';
});
App::$collector->get('/items/{id}', ['workspace\controllers\MainController', 'actionItems']);
App::$collector->get('/forms/{id}', ['workspace\controllers\FormsController', 'actionShow']);