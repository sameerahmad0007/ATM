
<?php
include "head.php";
include "config.php";
if(isset($_POST['delete-btn'])) {
    $user_id = $_POST['user_id'];
    $sql = "DELETE FROM user WHERE user_id = $user_id";
    if ($conn->query($sql) === TRUE) {
        header("Location:costumer-details.php");
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
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
      <a class="nav-link" href="index.php">
          <input type="button" class="btn btn-outline-secondary" value="logout";></a>
      </span>
    </div>
  </div>
</nav> 

<?php

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='container'>";
    echo "<table class='table table-bordered table-centered'>";
    echo "<thead class='thead-dark'>";
    echo "<tr><th>ID</th><th>User Name</th><th>Email</th><th>PAN</th><th>Contact</th><th>Address</th><th>ATM</th><th>Action</th></tr>";
    echo "</thead>";
    echo "<tbody>";
    
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["user_id"] . "</td>";
        echo "<td>" . $row["user_name"] . "</td>";
        echo "<td>" . $row["user_email"] . "</td>";
        echo "<td>" . $row["user_pan"] . "</td>";
        echo "<td>" . $row["user_contact"] . "</td>";
        echo "<td>" . $row["user_address"] . "</td>";
        echo "<td>" . $row["user_atm"] . "</td>";
        echo "<td>
                <form method='post' action='costumer-details.php'>
                    <input type='hidden' name='user_id' value='" . $row["user_id"] . "'>
                    <button type='submit' name='delete-btn' class='btn btn-danger'>Delete</button>
                </form>
            </td>";
        echo "</tr>";
    }
    
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
} else {
    echo "0 results";
}



?>