<?

namespace vendor\core;

class Db {
    private $pdo;
    private static $instance;
    public static $countSql = 0;
    public static $queries = [];
    private function __construct()
    {
        $db = require ROOT . '/config/config_db.php';
        require LIBS. '/rb-mysql.php';
        \R::setup($db['dsn'], $db['user'], $db['pass']);
        
    }

    public static function instance()
    {
        if(self::$instance === null)
        {
            self::$instance = new self;
        }
        return self::$instance;
    }

    // public function execute($sql, $params = [])
    // {
    //     self::$countSql++;
    //     self::$queries[] = $sql;
    //     $stmt = $this->pdo->prepare($sql);
    //     return $stmt->execute($params);
    // }

    // public function query($sql, $params = [])
    // {
    //     self::$countSql++;
    //     self::$queries[] = $sql;
    //     $stmt = $this->pdo->prepare($sql);
    //     $res = $stmt->execute($params);
    //     if($res !== false)
    //         return $stmt->fetchAll();
    //     else return false;
    // }
}

?>