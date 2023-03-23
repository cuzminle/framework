<?

namespace vendor\core\base;

abstract class controller
{
    protected $route = [];
    protected $view; 
    protected $layout;

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route['action'];
        
    }

    public function getView()
    {
        $vObj = new View($this->route, $this->view, $this->layout);
        $vObj->render();
    }
}

?>