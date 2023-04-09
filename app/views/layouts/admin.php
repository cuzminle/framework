<!doctype html>
<html>
  <head>
    <meta charset=UTF-8>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.rtl.min.css">

    <title>admin template</title>
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

    <? if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']);?>
<? if(isset($_SESSION['error'])):?>
      <div class="alert alert-danger">
        <?=$_SESSION['error']; unset($_SESSION['error'])?>
      </div>
    <?endif;?>

    <? if(isset($_SESSION['success'])):?>
      <div class="alert alert-success">
        <?=$_SESSION['success']; unset($_SESSION['success'])?>
      </div>
    <?endif;?>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>