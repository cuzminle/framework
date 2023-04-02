<?

namespace vendor\core;
use vendor\core\Registry;
use vendor\core\HandlerError;

class App
{
    public static $app;

    public function __construct()
    {
        self::$app = Registry::instance();
        new HandlerError();
    }
}

?>