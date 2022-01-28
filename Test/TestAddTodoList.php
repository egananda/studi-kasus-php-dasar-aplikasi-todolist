<?php
require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
// require_once "../BusinessLogic/ShowTodoList.php";


addTodoList("Kucing");
addTodoList("Otter");
var_dump($todoList);
