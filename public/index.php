<? 

$query = rtrim($_SERVER['REQUEST_URI'], '/');

require '../vendor/core/router.php';
require '../vendor/libs/functions.php';
require '../app/controllers/Main.php';
require '../app/controllers/Posts.php';
require '../app/controllers/PostsNew.php';

Router::add('^$', [
    'controller' => 'Main',
    'action' => 'lox']);

Router::add('(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?');

debug(Router::getRoutes());

Router::dispatch($query);