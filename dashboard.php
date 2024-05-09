
<?php 
include 'head.php';
include 'config.php';
session_start();
$sessionemail = $_SESSION['email'];
$sql = "select * from user where user_email='$sessionemail'";
$data = mysqli_query($conn,$sql);
foreach($data as $row){
 $uname= $row['user_name'];
}
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="register.php">register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="costumer-details.php">costumer details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiR-O3x9eyFAxXNSGwGHZgLD3QQFnoECAgQAQ&url=https%3A%2F%2Fwww.unionbankofindia.co.in%2Fenglish%2Fhome.aspx&usg=AOvVaw1H1zN3DFDgDU4-0XBrDgXD&opi=89978449"target="_blank">Bank details</a>
        </li>
    

      </ul>
      <span class="navbar-text">
      <a class="nav-link" href="admin-login.php">
          <input type="button" class="btn btn-outline-secondary" value="logout";></a>
      </span>
    </div>
  </div>
</nav>
<h1 class=" mt-5 text-center dash text-light position-absolute top-50 start-50 translate-middle"><b>Welcome to the dashboard <?php echo $uname ;?></b></h1>