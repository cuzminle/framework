<?php

namespace vendor\core;

use Exception;

class Router
{
    
    protected static $routes = []; //массив маршрутов
    protected static $route = []; // текукщий маршрут

    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes()
    {
        return self::$routes;
    }

    /**
     * получение текущего маршрута
     */
    public static function getRoute()
    {
        return self::$route;
    }

    /**
     * ищет совпадения с таблицей маршрутов
     * @param string $url входящий URL 
     */
    public static function matchRoute($url)
    {
        foreach(self::$routes as $pattern => $route )
        {
            if(preg_match("#$pattern#i", $url, $matches))
            {
                foreach($matches as $key => $value)
                {
                    if(is_string($key))
                    {
                        $route[$key] = $value;
                    }
                }
                if(!isset($route['action']))
                {
                    $route['action'] = 'index';
                }
                //prefix for admin controllers
                if(!isset($route['prefix']))
                    $route['prefix'] = '';
                else $route['prefix'] .= '\\';
                $route['controller'] = self::upperCamelCase($route['controller']);
                self::$route = $route;
                return true;
            }
        }
        return false;
    }

    /**
     * перенапрвляет URL на корректный маршрут
     * @param string $url входящий URL 
     */
    public static function dispatch($url)
    {
        $url = self::removeQueryString($url);
        if(self::matchRoute($url))
        {
            $controller = 'app\controllers\\'. self::$route['prefix'] . self::$route['controller'] . 'Controller';
            if(class_exists($controller))
            {
                $cObj = new $controller(self::$route);
                $action = self::lowerCamelCase(self::$route['action']. 'Action');
                if(method_exists($cObj, $action))
                {
                    $cObj->$action();
                    $cObj->getView();
                }
                else 
                {
                    throw new Exception("Метод <b>$controller::$action</b> не найден", 404);
                }
            }
            else
            {
                throw new Exception("Контроллер <b>$controller</b> не найден", 404);
            }
        }
        else
        {
            throw new Exception("Страница не найдена", 404);
        }
    }

    protected static function upperCamelCase($name)
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $name))); 
    }

    protected static function lowerCamelCase($name)
    {
        return lcfirst(self::upperCamelCase($name));
    }

    protected static function removeQueryString($url)
    {
        if($url)
        {
            $params = explode('?', $url, 2);
            //debug($params);
            if(false === strpos($params[0], '='))
            {
                return rtrim($params[0], '/');
            }
            else return '';
        }

        return $url;
    }
}