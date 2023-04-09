<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="/user/signUp" class="w-25 p-3 align-center">
  <div class="form-group">
    <label for="exampleInputPassword1">Login</label>
    <input type="text" name="login" class="form-control" id="exampleInputPassword1" placeholder="Login" 
    value="<?= isset($_SESSION['form_data']['login']) ?htmlChar($_SESSION['form_data']['login']) : '';?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"
    value="<?= isset($_SESSION['form_data']['email']) ?htmlChar($_SESSION['form_data']['email']) : '';?>">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Name"
    value="<?= isset($_SESSION['form_data']['name']) ?htmlChar($_SESSION['form_data']['name']) : '';?>">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>