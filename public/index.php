<? 
use vendor\core\Router;

$query = rtrim($_SERVER['REQUEST_URI'], '/');

define('WWW', __DIR__);
define('CORE', dirname(__DIR__). '/vendor/core');
define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__). '/app');

require '../vendor/core/router.php';
require '../vendor/libs/functions.php';

spl_autoload_register(function($class) {
    $file = ROOT . '/' . str_replace('\\', '/', $class). '.php';
    //$file = APP . "/controllers/$class.php";
    if(is_file($file))
    {
        require_once $file;
    }
    else
    {
        echo "file doesn't exist"; 
    }
});

Router::add('^pages/?(?P<action>[a-z-]+)?$', [
    'controller' => 'Main']);

Router::add('^$', [
    'controller' => 'Main',
    'action' => 'lox']);

Router::add('(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?');

debug(Router::getRoutes());

Router::dispatch($query);