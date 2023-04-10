<?php

namespace app\core;

use app\controllers\MainController;
use app\controllers\PortfolioController;
use app\controllers\ContactController;
use app\controllers\AdminController;
use app\controllers\SearchController;

class Router
{
    private string $url;
    private array $routes;
    private array $params;
    private array $nesting;
    private array $controllers;

    public function __construct()
    {
        $this->url = $_SERVER['REQUEST_URI'];
        $this->routes = include_once 'resources/config/routes.php';
        $this->params = $this->listParameters($_SERVER['QUERY_STRING']);
        $this->nesting = $this->listNesting($_SERVER['QUERY_STRING']);
        $this->controllers = ['MainController' => (new MainController), 'PortfolioController' => (new PortfolioController), 'ContactController' => (new ContactController), 'AdminController' => (new AdminController), 'SearchController' => (new SearchController)];
    }

    public function run()
    {
        $uri = parse_url($this->url);
        $path = strpos($uri['path'], '/', 1) > 0 ? substr($uri['path'], 0, strpos($uri['path'], '/', 1)) : $uri['path'];

        if (array_key_exists($path, $this->routes) === false || preg_match_all('/\//', $uri['path']) > 2) {
            header('HTTP/1.0 404 Not Found');
            echo '404';
            exit();
        }

        $action = $this->routes[$path]['action'];

        call_user_func([$this->controllers[$this->routes[$path]['controller']], $action], $this->nesting);
    }

    public function listParameters(string $params)
    {
        if ($params) {
            $tempArr = explode('&', $params);

            foreach ($tempArr as $item) {
                $pos = strpos($item, '=');
                $list[substr($item, 0, $pos)] = substr($item, $pos + 1, strlen($item));
            }
        }

        return $list ?? [];
    }

    public function listNesting(string $params)
    {
        return explode('/', $params) ?? [];
    }
}