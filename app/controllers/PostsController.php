<?

namespace app\controllers;
use vendor\core\App;
use app\models\MainModel;

class PostsController extends AppController
{

    public function testAction()
    {
        debug($this->route);
    }

    public function indexAction()
    {
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