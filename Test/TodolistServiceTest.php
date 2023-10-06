<?php

require_once _DIR_ . "/../Entity/Todolist.php";
require_once _DIR_ . "/../Repository/TodolistRepository.php";
require_once _DIR_ . "/../service/TodolistService.php";
require_once _DIR_ . "/../View/TodolistView.php";
require_once _DIR_ . "/../Helper/InputHelper.php";

use Entity\Todolist;
use \Repository\TodolistRepositorylmpl;
use \Service\TodolistServicelmpl;


function testShowTodolist():void
{
    $connection = \config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServicelmpl($todolistRepository);
   // $todolistView = new TodolistView($todolistService);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

   // $todolistService = new TodolistServiceImpl($todoListRepository);
    $todolistService->showTodolist();

}

function testViewAddTodolist():void
{
    $connection = \config\Database::getConnection();
    $todoListRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServicelmpl($todoListRepository);
    //$todolistView = new TodolistView($todolistService);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

   // $todolistService->showTodolist();

   // $todolistView->addTodolist();

    //$todolistService->showTodolist();

   // $todolistView->addTodolist();

   // $todolistService->ShowTodolist();
}

function testRemoveTodolist(): void
{
    $connection = \config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);
    //$todolistView = new todolistView($todolistService);
    
    echo $todolistService->RemoveTodolist(5) . PHP_EOL;
    echo $todolistService->RemoveTodolist(4) . PHP_EOL;
    echo $todolistService->RemoveTodolist(3) . PHP_EOL;
    echo $todolistService->RemoveTodolist(2) . PHP_EOL;
    echo $todolistService->RemoveTodolist(1) . PHP_EOL;
}

testShowTodolist();