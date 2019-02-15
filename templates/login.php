<?php require 'header.php'; ?>

<form>
  <div class="form-group">
    <label for="login">Email address</label>
    <input type="email" class="form-control" id="login" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" aria-describedby="passHelp"placeholder="Password">
    <small id="passHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submitt</button>
</form>

<?php require 'footer.php'; ?>