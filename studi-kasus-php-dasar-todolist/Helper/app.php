<?php
require_once ___DIR___ . '/Entity/Todolist.php';
require_once ___DIR___ . '/Helper/InputHelper.php'; 
require_once ___DIR___ . '/Repository/TodolistRepository.php'; 
require_once ___DIR___ . '/Service/TodolistService.php'; 
require_once ___DIR___ . '/View/TodolistView.php'; 
require_once ___DIR___ . '/Config/Database.php'; 

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

echo "Aplikasi todolist" . PHP_EOL;


$connection = \Config\Database::getConnection();
$todolistRepository = new TodolistRepositoryImpl($connection);
$todolistService = new TodolistServiceImpl($todolistRepository);
$todolistView = new $todolistView($todolistService);

$todolistView-> showTodolist();