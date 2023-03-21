<? 

echo $query = rtrim($_SERVER['REQUEST_URI'], '/');

require '../vendor/core/router.php';
require '../vendor/libs/functions.php';

// Router::add('index.php&posts/add/', [
//     'controller' => 'posts',
//     'action' => 'add']);

// Router::add('index.php&posts/', [
//     'controller' => 'posts',
//     'action' => 'index']);

// Router::add('index.php', [
//     'controller' => 'Main',
//     'action' => 'index']);


Router::add('^$', [
    'controller' => 'Main',
    'action' => 'index']);

Router::add('([a-z-]+)/([a-z-]+)');

//debug(Router::getRoutes());

if(Router::matchRoute($query))
{
    debug(Router::getRoute());
}
else 
{
    echo '404';
}