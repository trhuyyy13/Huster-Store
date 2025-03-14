<?php
include "db.php";

$category = isset($_GET['category']) ? intval($_GET['category']) : 0;
$query = isset($_GET['query']) ? mysqli_real_escape_string($con, $_GET['query']) : '';

$sql = "SELECT * FROM products, categories 
        WHERE products.product_cat = categories.cat_id";

if ($category > 0) {
    $sql .= " AND products.product_cat = $category";
}

if (!empty($query)) {
    $sql .= " AND (products.product_title LIKE '%$query%' 
                  OR products.product_keywords LIKE '%$query%')";
}

$run_query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include "header.php"; ?>
    <div class="container">
        <h2>Search Results</h2>
        <div class="row">
            <?php
            if (mysqli_num_rows($run_query) > 0) {
                while ($row = mysqli_fetch_array($run_query)) {
                    $pro_id = $row['product_id'];
                    $pro_title = $row['product_title'];
                    $pro_price = $row['product_price'];
                    $pro_image = $row['product_image'];
                    $cat_name = $row['cat_title'];
                    echo "<div class='col-md-4 col-xs-6'>
                            <a href='product.php?p=$pro_id'><div class='product'>
                                <div class='product-img'>
                                    <img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
                                    <div class='product-label'>
                                        <span class='sale'>-30%</span>
                                        <span class='new'>NEW</span>
                                    </div>
                                </div></a>
                                <div class='product-body'>
                                    <p class='product-category'>$cat_name</p>
                                    <h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
                                    <h4 class='product-price header-cart-item-info'>$$pro_price<del class='product-old-price'>$$990.00</del></h4>
                                    <div class='product-rating'>
                                        <i class='fa fa-star'></i>
                                        <i class='fa fa-star'></i>
                                        <i class='fa fa-star'></i>
                                        <i class='fa fa-star'></i>
                                        <i class='fa fa-star'></i>
                                    </div>
                                    <div class='product-btns'>
                                        <button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
                                        <button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
                                        <button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
                                    </div>
                                </div>
                            </div>
                          </div>";
                }
            } else {
                echo "<p>No products found matching your criteria.</p>";
            }
            ?>
        </div>
    </div>
    <?php include "footer.php"; ?>

    <script>
        $(document).ready(function() {
            $('#searchForm').on('submit', function(e) {
                e.preventDefault();
                let query = $('#searchInput').val();
                window.location.href = 'search.php?query=' + encodeURIComponent(query);
            });

            $('#searchInput').on('keypress', function(e) {
                if (e.which == 13) { // Enter key pressed
                    e.preventDefault();
                    $('#searchForm').submit();
                }
            });
        });
    </script>
</body>
</html>
