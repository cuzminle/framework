<form method="post" action="/user/login" class="w-25 p-3 align-center">
  <div class="form-group">
    <label for="exampleInputPassword1">Login</label>
    <input type="text" name="login" class="form-control" id="exampleInputPassword1" placeholder="Login" 
    value="<?= isset($_SESSION['form_data']['login']) ?htmlChar($_SESSION['form_data']['login']) : '';?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

