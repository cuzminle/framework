<?

namespace app\controllers;
use app\models\MainModel;
use vendor\core\App;

class MainController extends AppController
{
    public $layout = '';

    public function testAction()
    {
        //include '../vendor/core/ErrorHandler.php';
    }

    public function indexAction()
    {
        //App::$app->getList();
        $model = new MainModel;
        $posts = App::$app->cache->get('post');
        if(!$posts)
        {
            $posts = \R::findAll('post');
            App::$app->cache->set('posts', $posts);
        }
        $this->set(compact('posts'));
    }

    
}
?>