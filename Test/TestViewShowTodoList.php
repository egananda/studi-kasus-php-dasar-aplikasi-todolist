<?php
require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";


addTodoList("Ega");
addTodoList("Ridho");
addTodoList("Kucing");

viewShowTodoList();
