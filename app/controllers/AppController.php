<?

namespace app\controllers;
use vendor\core\base\controller;

class AppController extends controller
{
    public $layout = 'admin';
    
    public function __construct($route)
    {
        parent::__construct($route);
    }
}
?>