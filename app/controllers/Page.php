<?

namespace app\controllers;

class Page extends \vendor\core\base\controller
{
    public function viewAction()
    {
        debug($this->route);
        debug($_GET);
        echo $_GET['page'];
        echo "<h1>ViewTest</h1>";
    }
}

?>