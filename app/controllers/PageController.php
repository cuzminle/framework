<?

namespace app\controllers;

class PageController extends AppController
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