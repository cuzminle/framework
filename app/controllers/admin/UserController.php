<?

namespace app\controllers\admin;
use app\controllers\AppController;
use vendor\core\base\View;

class UserController extends AppController
{
    public function indexAction()
    {
        //View::setMeta('Админка');
        $test = 'тест';
        $data = ['test', '2'];
        $this->set([
            'test' => $test,
            'data' => $data
        ]);
    }

    public function testAction()
    {
        echo __METHOD__;
    }

}

?>
