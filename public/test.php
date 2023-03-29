<?

require 'rb.php';
$db = require '../config/config_db.php';

R::setup($db['dsn'], $db['user'], $db['pass'], $options);

debug(R::testConnection());

echo "adasda";
?>