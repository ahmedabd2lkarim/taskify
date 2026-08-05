<?php
class Router
{
    public $array = [
        '/' => BASE_PATH . 'controllers/index.php',
        '/note' => BASE_PATH . 'controllers/show.php',
        '/create-note' => BASE_PATH . 'controllers/store.php',
    ];

    public function __construct()
    {
        if (array_key_exists($_SERVER["REQUEST_URI"], $this->array)) {
            require $this->array[$_SERVER["REQUEST_URI"]];
        }
    }
}
