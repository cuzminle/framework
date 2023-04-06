<!doctype html>
<html>
  <head>
    <meta charset=UTF-8>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.rtl.min.css">

    <title>basic template</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/user/login">Login</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/user/signUp">Sign up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/user/logout">Logout</a>
      </li>
    </ul>
  </div>
</nav>
    
    <?=$content?>
    <?= debug(\vendor\core\Db::$countSql)?>
    <?= debug(\vendor\core\Db::$queries)?>

    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>