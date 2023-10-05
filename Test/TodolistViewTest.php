<?php

require_once DIR . "/../Entity/Todolist.php";
require_once DIR . "/../Repository/TodolistRepository.php";
require_once DIR . "/../Service/TodolistService.php";
require_once DIR . "/../Config/Database.php";
require_once DIR . "/../View/TodolistView.php";
require_once DIR . "/../Helper/TodolistHelper.php";

use Entity\Todolist;
use \Service\TodolistServiceImpl;
use \Repository\TodolistRepositoryImpl;
use \view\TodolistView;

function testViewShowTodolist(): void
{
   
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();
}

function testViewAddTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");
    // $todolistService->showTodolist();

    $todolistService->showTodolist();
    $todolistView->addtodolist();
    $todolistService-> showTodolist();
    $todolistView->addTodolist();
    $todolistService->showTodolist();
}

function testViewRemoveTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();
    $todolistView->addtodolist();
    $todolistService-> showTodolist();
    $todolistView->addTodolist();
    $todolistService->showTodolist();
}


testShowTodolist();