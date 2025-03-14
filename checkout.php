<?php
$ip_add = getenv("REMOTE_ADDR");
include "db.php";
include "header.php";
?>

<style>
.row-checkout {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  flex: 25%;
}

.col-50 {
  flex: 50%;
}

.col-75 {
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container-checkout {
  background-color: #f7f7f7;
  padding: 20px;
  border: 1px solid #e0e0e0;
  border-radius: 8px;
}

input[type=text], input[type=email] {
  width: 100%;
  margin-bottom: 20px;
  padding: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

label {
  margin-bottom: 10px;
  display: block;
  font-weight: bold;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.checkout-btn {
  background-color: #0070ba;
  color: white;
  padding: 15px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 5px;
  cursor: pointer;
  font-size: 18px;
}

.checkout-btn:hover {
  background-color: #005fa3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

@media (max-width: 800px) {
  .row-checkout {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}

form .newsletter-btn {
  background-color: #0070ba;
  color: white;
  border: none;
  padding: 15px;
  cursor: pointer;
  border-radius: 5px;
  font-size: 18px;
}

form .newsletter-btn:hover {
  background-color: #005fa3;
}
</style>

<section class="section">
    <div class="container-fluid">
        <div class="row-checkout">
        <?php
        if(isset($_SESSION["uid"])){
            $sql = "SELECT * FROM user_info WHERE user_id='$_SESSION[uid]'";
            $query = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($query);

            echo '
            <div class="col-75">
                <div class="container-checkout">
                <form id="checkout_form" action="checkout_process.php" method="POST" class="was-validated">
                    <div class="row-checkout">
                    <div class="col-50">
                        <h3>Billing Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" class="form-control" name="firstname" pattern="^[a-zA-Z ]+$" value="'.$row["first_name"].' '.$row["last_name"].'">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="'.$row["email"].'" required>
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" class="form-control" value="'.$row["address1"].'" required>
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" class="form-control" value="'.$row["address2"].'" pattern="^[a-zA-Z ]+$" required>
                        <div class="row">
                        <div class="col-50">
                            <label for="zip">Zip</label>
                            <input type="text" id="zip" name="zip" class="form-control" pattern="^[0-9]{6}(?:-[0-9]{4})?$" required>
                        </div>
                        </div>
                    </div>
                    <div class="col-50">
                        <h3>Payment</h3>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                        <i class="fa fa-cc-visa" style="color:navy;"></i>
                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                        <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>
                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" class="form-control" pattern="^[a-zA-Z ]+$" required>
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" name="cardNumber" required>
                        <label for="expdate">Exp Date</label>
                        <input type="text" id="expdate" name="expdate" class="form-control" pattern="^((0[1-9])|(1[0-2]))\/(\d{2})$" placeholder="MM/YY" required>
                        <div class="row">
                        <div class="col-50">
                            <label for="cvv">CVV</label>
                            <input type="text" class="form-control" name="cvv" id="cvv" required>
                        </div>
                        </div>
                    </div>
                    </div>
                    <label><input type="checkbox" name="q" class="roomselect" value="conform" required> Shipping address same as billing
                    </label>';
                    $i=1;
                    $total=0;
                    $total_count = $_POST['total_count'];
                    while($i <= $total_count){
                        $item_name_ = $_POST['item_name_'.$i];
                        $amount_ = $_POST['amount_'.$i];
                        $quantity_ = $_POST['quantity_'.$i];
                        $total += $amount_ * $quantity_;
                        $sql = "SELECT product_id FROM products WHERE product_title='$item_name_'";
                        $query = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($query);
                        $product_id = $row["product_id"];
                        echo "    
                        <input type='hidden' name='prod_id_$i' value='$product_id'>
                        <input type='hidden' name='prod_price_$i' value='$amount_'>
                        <input type='hidden' name='prod_qty_$i' value='$quantity_'>
                        ";
                        $i++;
                    }
                    
                echo '    
                <input type="hidden" name="total_count" value="'.$total_count.'">
                <input type="hidden" name="total_price" value="'.$total.'">
                <input type="submit" id="submit" value="Continue to checkout" class="checkout-btn">
                </form>
                </div>
            </div>';
        } else {
            echo"<script>window.location.href = 'cart.php'</script>";
        }
        ?>
            <div class="col-25">
                <div class="container-checkout">
                <?php
                if (isset($_POST["cmd"])) {
                    $user_id = $_POST['custom'];
                    $total_count = $_POST['total_count'];
                    echo "
                    <h4>Cart 
                    <span class='price' style='color:black'>
                    <i class='fa fa-shopping-cart'></i> 
                    <b>$total_count</b>
                    </span>
                </h4>
                <table class='table table-condensed'>
                <thead><tr>
                <th>No</th>
                <th>Product Title</th>
                <th>Qty</th>
                <th>Amount</th></tr>
                </thead>
                <tbody>";
                    $total=0;
                    for ($i=1; $i <= $total_count; $i++) {
                        $item_name_ = $_POST['item_name_'.$i];
                        $amount_ = $_POST['amount_'.$i];
                        $quantity_ = $_POST['quantity_'.$i];
                        $total += $amount_ * $quantity_;
                        $sql = "SELECT product_id FROM products WHERE product_title='$item_name_'";
                        $query = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($query);
                        $product_id = $row["product_id"];
                        echo "<tr><td>$i</td><td>$item_name_</td><td>$quantity_</td><td>$" . ($amount_ * $quantity_) . "</td></tr>";
                    }
                echo "</tbody>
                </table>
                <hr>
                <h3>Total <span class='price' style='color:black'><b>$$total</b></span></h3>";
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="newsletter" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="newsletter">
                    <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                    <form>
                        <input class="input" type="email" placeholder="Enter Your Email">
                        <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                    </form>
                    <ul class="newsletter-follow">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
