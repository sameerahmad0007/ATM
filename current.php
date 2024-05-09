<?php
include "head.php";
include "config.php";
?>

<div class="position-absolute top-50 start-0 translate-middle-y p-5">
    <h1 class="text-center p-3 text-white">ENTER YOUR PAN CARD NUMBER AND YOUR PIN </h1>
    <form action="current.php" method="post">
      <input type="hidden" name="status" id="" value='1'>
      
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Enter PAN number</label>
    <input type="text" name="pan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pin" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
  <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="withdrawal">Login</button>
</form>
</div>

<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['withdrawal'])) {
    
    $pan = $_POST['pan'];
    $pin = $_POST['pin'];
    $sql = "SELECT * FROM user WHERE user_pan = '$pan' AND user_pin = '$pin'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      session_start();
     $_SESSION['user_id'];
        header("Location: withdrawal.php");
        exit;
    } else {
        
        echo "Invalid PAN number or password.";
    }


    
}
?>