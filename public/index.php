<?php
const BASE_PATH = __DIR__ . '/../';
$config = require(BASE_PATH . "config.php");
spl_autoload_register(function ($class) {
    require BASE_PATH . "Core/{$class}.php";
});

$db = new Database($config['database']);

$task = $db->result;
// $task= $task->execute(["user" => 1]);
// $task= $task->result;
// var_dump($task);
$route = new Router();
