<?php include "head.php"; 
?>
<div class="position-absolute top-50 start-0 translate-middle-y admin-login-form ">
  <form action="script.php" method="post">
    <h1 class="mt-5 text-light ">COSTUMER register </h2>
  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" name="r-name" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="r-email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">contact no.</label>
    <input type="text" name="r-contact" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">Pan card no.</label>
    <input type="text" name="r-pan" class="form-control" id="exampleInputPassword1">
  </div>
  
  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">ATM no.</label>
    <input type="text"name="r-atm" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text"name="r-address" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">Amount</label>
    <input type="text"name="r-amount" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">password</label>
    <input type="password"name="r-password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">confirm password</label>
    <input type="password"name="confirmpassword" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" name="create" class="btn btn-primary">create</button>
  <a class="nav-link" href="index.php">
          <input type="button" class="btn btn-primary mt-3" value="back home";>
        </a>
  </form>
</div>