<?

namespace app\controllers;
use app\models\MainModel;
use vendor\core\App;

class MainController extends AppController
{
    public $layout = false;

    public function testAction()
    {
        //include '../vendor/core/ErrorHandler.php';
    }

    public function indexAction()
    {
        $model = new MainModel;
        $model->test();
        App::$app->getList();
        App::$app->test2 = 'vendor\libs\test';
        App::$app->getList();
    }

    
}
?>