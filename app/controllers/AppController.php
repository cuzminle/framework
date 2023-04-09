<?

namespace app\controllers;
use vendor\core\base\controller;

class AppController extends controller
{
    public $layout = '';
    
    public function __construct($route)
    {
        parent::__construct($route);
    }
}
?>