<?php
session_start();
include "db.php";

if (isset($_SESSION["uid"])) {

    $name = $_POST["firstname"];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $cardname = $_POST['cardname'];
    $cardnumber = $_POST['cardNumber'];
    $expdate = $_POST['expdate'];
    $cvv = $_POST['cvv'];
    $user_id = $_SESSION["uid"];
    $total_count = $_POST['total_count'];
    $prod_total = $_POST['total_price'];
    $trx_id = uniqid('trx_', true);

    // Fetch the new order ID
    $sql0 = "SELECT order_id FROM `orders_info`";
    $runquery = mysqli_query($con, $sql0);
    if (mysqli_num_rows($runquery) == 0) {
        $order_id = 1;
    } else {
        $sql2 = "SELECT MAX(order_id) AS max_val FROM `orders_info`";
        $runquery1 = mysqli_query($con, $sql2);
        $row = mysqli_fetch_array($runquery1);
        $order_id = $row["max_val"] + 1;
    }

    // Insert into orders_info
    $sql = "INSERT INTO `orders_info` 
    (`order_id`, `user_id`, `trx_id`, `name`, `email`, `address`, `city`, `zip`, `cardname`, `cardnumber`, `expdate`, `prod_count`, `total_amt`, `cvv`, `p_status`) 
    VALUES ($order_id, '$user_id', '$trx_id', '$name', '$email', '$address', '$city', '$zip', '$cardname', '$cardnumber', '$expdate', '$total_count', '$prod_total', '$cvv', 'Pending')";

    if (mysqli_query($con, $sql)) {
        for ($i = 1; $i <= $total_count; $i++) {
            $prod_id = $_POST['prod_id_' . $i];
            $prod_price = $_POST['prod_price_' . $i];
            $prod_qty = $_POST['prod_qty_' . $i];
            $sql1 = "INSERT INTO `order_products` 
            (`order_pro_id`, `order_id`, `product_id`, `qty`) 
            VALUES (NULL, '$order_id', '$prod_id', '$prod_qty')";
            mysqli_query($con, $sql1);
        }
        $del_sql = "DELETE FROM cart WHERE user_id = $user_id";
        mysqli_query($con, $del_sql);
        echo "<script>window.location.href='payment_success.php?order_id=$order_id'</script>";
    } else {
        echo mysqli_error($con);
    }
} else {
    echo "<script>window.location.href='index.php'</script>";
}
?>
