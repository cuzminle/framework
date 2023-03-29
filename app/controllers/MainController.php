<?

namespace app\controllers;
use app\models\MainModel;
use vendor\core\App;

class MainController extends AppController
{
    public $layout = false;

    public function testAction()
    {
        //include '../public/test/index.php';
    }

    public function indexAction()
    {
        //App::$app->getList();
        $model = new MainModel;
        $posts = App::$app->cache->get('posts');
        if(!$posts)
        {
            $posts = \R::findAll('posts');
            App::$app->cache->set('posts', $posts);
        }
        $post = $model->findOne(1);
        $data = $model->findBySql("SELECT * FROM post ORDER BY id");
        $this->set(compact('posts'));
        
    }

    
}
?>