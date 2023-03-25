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
        $post = $model->findOne(1);
        
        $data = $model->findBySql("SELECT * FROM post ORDER BY id");
        debug($data);
        $this->set(compact('posts'));
        
    }
}
?>