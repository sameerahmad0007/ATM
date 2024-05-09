<?php
include "head.php";
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="image/Union-Bank-of-India-Hindi-Logo-Vector.webp" width="300px"; ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiR-O3x9eyFAxXNSGwGHZgLD3QQFnoECAgQAQ&url=https%3A%2F%2Fwww.unionbankofindia.co.in%2Fenglish%2Fhome.aspx&usg=AOvVaw1H1zN3DFDgDU4-0XBrDgXD&opi=89978449"target="_blank">Bank details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="register.php">register</a>
        </li>
      </ul>
      <span class="navbar-text">
      <a class="nav-link" href="admin-login.php">
          <input type="button" class="btn btn-outline-secondary" value="Admin login";>
        </a>
      </span>
    </div>
  </div>
</nav>

<div class="position-absolute top-50 start-0 translate-middle-y index-form">
  <h2 class="text-light">USER LOGIN</h2>
  <hr class="text-light">
<form action="script.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ENTER CARD NUMBER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="atm" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">PIN</label>
    <input type="password" class="form-control" name="atmpin" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary" name="userlog" >Submit</button>
</form>
</div>