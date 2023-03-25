<?

namespace vendor\core\base;

abstract class controller
{
     /**
     * текущий маршрут (controller, action, params)
     * @var array
     */
    protected $route = [];
    
    /**
     * текущий вид
     * @var string
     */
    protected $view; 

     /**
     * текущий шаблон
     * @var string
     */
    protected $layout;

     /**
     * пользвательские данные
     * @var array
     */
    protected $vars = [];

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route['action'];
        
    }

    public function getView()
    {
        $vObj = new View($this->route, $this->view, $this->layout);
        $vObj->render($this->vars);
    }

    public function set($vars)
    {
        $this->vars = $vars;
    }
}

?>