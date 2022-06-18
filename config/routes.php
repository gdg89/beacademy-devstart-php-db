<?php
//ROUTES

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;
use App\Controller\ErrorController;


//array para montar rota
    function createRoute(string $controllerName, string $methodName){
        return [
            'controller'=> $controllerName,
            'method' => $methodName,
        ];

    }
    //definindo rotas do app

    $routes = [
        '/' => createRoute(IndexController::class, 'indexAction'),// route difne
        '/login' => createRoute(IndexController::class, 'loginAction'),

        '/produtos' => createRoute(ProductController::class,'listAction'),
        '/produtos/novo' => createRoute(ProductController::class, 'addAction'),
        '/produtos/editar' => createRoute(ProductController::class, 'editAction'),
        '/produtos/excluir' => createRoute(ProductController::class, 'removeAction'),
        '/produtos/relatorio'=> createRoute(ProductController::class, 'reportAction'),

        '/categoria' => createRoute(CategoryController::class, 'listAction'),
        '/categoria/nova' => createRoute(CategoryController::class, 'addAction'),
        '/categoria/editar' => createRoute(CategoryController::class, 'updateAction'),
        '/categoria/excluir'=>createRoute(CategoryController::class, 'removeAction')
        
    ];

    return $routes;
    
