<?

namespace app\controllers;
use app\models\MainModel;


class MainController extends AppController
{
    public $layout = 'default';

    public function testAction()
    {
        echo 'test';
    }

    public function indexAction()
    {
        $model = new MainModel;
        $posts = $model->findAll();
        debug($posts);


        $this->set(compact('posts'));
        
    }
}
?>