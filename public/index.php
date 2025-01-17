<? 
use vendor\core\Router;

$query = rtrim($_SERVER['REQUEST_URI'], '/');

define('DEBUG', 1);
define('WWW', __DIR__);
define('CORE', dirname(__DIR__). '/vendor/core');
define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__). '/app');
define('LAYOUT', 'default');
define('CACHE', dirname(__DIR__). '/tmp/cache');
define('LIBS', dirname(__DIR__) . '/vendor/libs');

require '../vendor/libs/functions.php';
require __DIR__ . '/../vendor/autoload.php';

spl_autoload_register(function($class) {
    $file = ROOT . '/' . str_replace('\\', '/', $class). '.php';

    if(is_file($file))
    {
        require_once $file;
    }
});

new \vendor\core\App;

Router::add('page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)', [
    'controller' => 'Page']);

Router::add('page/(?P<alias>[a-z-]+)', [
    'controller' => 'Page',
    'action' => 'view']);

    Router::add('admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?', [
        'prefix' => 'admin']);
    
    Router::add('admin', [
        'controller' => 'User',
        'action' => 'index',
        'prefix' => 'admin']);

Router::add('^$', [
    'controller' => 'Main',
    'action' => 'index']);

Router::add('(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?');


Router::dispatch($query);