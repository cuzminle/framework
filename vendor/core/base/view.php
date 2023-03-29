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
        if($layout === false)
        {
            $this->layout = false;
        }
        else $this->layout = $layout ?: LAYOUT;
        $this->route = $route;
        $this->view = $view;
    }

    public function render($vars)
    {
        if(is_array($vars)) extract($vars);
        $file_view = APP . "/views/{$this->route['controller']}/{$this->view}.php";
        ob_start();
        if(is_file($file_view))
        {
            require $file_view;
        }
        else echo "<p>view not found: $file_view</p>";
        $content = ob_get_clean();

        if(false !== $this->layout)
        {
            $file_layout = APP . "/views/layouts/{$this->layout}.php";
            if(is_file($file_layout))
                require $file_layout;
            else echo "<p>not found layout: $file_layout</p>";
        }

        
    }
}

?>