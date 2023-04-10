<?

namespace app\models;

class MainModel extends \vendor\core\base\Model
{
    public $field = "MainField";
    public function Test()
    {
        echo $this->field;

    }
}

?>