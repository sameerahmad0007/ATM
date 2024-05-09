<?php
include "head.php";
include "config.php";
?>

<div class="container position-absolute top-50 start-0 translate-middle-y p-5">
    <h2 class="text-white">ATM SYSTEM</h2>
    <div class="row">
        <div class="col-md-6">
            <h3  class="text-white">Deduct Amount</h3>
            <form action="withdrawal.php" method="post">
                <div class="form-group">
                    <label for="amount">Amount to Deduct:</label>
                    <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter amount">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Deduct</button>
            </form>
        </div>
      
</div>
<?php



if(isset($_POST['amount'])) {
    

    
    session_start();

   
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT user_amount FROM user WHERE user_id = $user_id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $balance = $row['user_amount'];
    } else {
        echo "Error: Unable to fetch balance.";
        exit;
    }

    $amount = $_POST['amount'];
    if ($amount <= $balance) {
        $balance -= $amount;


        $sql = "UPDATE user SET user_amount = $balance WHERE user_id = $user_id";
        if (mysqli_query($conn, $sql)) {
            echo "Amount deducted successfully. New balance: $balance";
        } else {
            echo "Error updating balance: " . mysqli_error($conn);
        }
    } else {
        echo "Insufficient balance.";
    }


    mysqli_close($conn);
}
?>