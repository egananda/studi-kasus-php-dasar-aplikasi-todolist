<?php
require_once "../Model/TodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Satu");
addTodoList("Dua");
addTodoList("Tiga");

showTodoList();
removeTodoList(2);
showTodoList();
