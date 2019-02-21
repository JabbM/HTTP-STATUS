<?php
$controller = 'Index';
$function = 'login';
$title = "Login";
require PWD_TEMPLATES . '/header.php';
?>

<form class="mt-5 pt-5">
  <div class="form-group">
    <label for="login">Email address</label>
    <input type="email" class="form-control" id="login" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" aria-describedby="passHelp"placeholder="Password">
    <small id="passHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php require PWD_TEMPLATES . '/footer.php'; ?>