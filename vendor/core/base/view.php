<?

namespace vendor\core\base;

class View
{
    /**
     * текущий маршрут (controller, action, params)
     * @var array
     */
    public $route = [];

    /**
     * текущий вид
     * @var string
     */
    public $view;

    /**
     * текущий шаблон
     * @var string
     */
    public $layout;

    public function __construct($route, $view = '', $layout = '')
    {
        $this->route = $route;
        $this->layout = $layout ?: LAYOUT;
        $this->view = $view;
    }

    public function render()
    {
        $file_view = APP . "/views/{$this->route['controller']}/{$this->view}.php";
        if(is_file($file_view))
        {
            require $file_view;
        }
        else echo "<p>view not found: $file_view</p>";
    }
}

?>