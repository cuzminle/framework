<!doctype html>
<html>
  <head>
    <meta charset=UTF-8>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.rtl.min.css">

    <title>basic template</title>
  </head>
  <body>
    <h1>ADMIN template</h1>
    
    <?=$content?>
    <?= debug(\vendor\core\Db::$countSql)?>
    <?= debug(\vendor\core\Db::$queries)?>

    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>