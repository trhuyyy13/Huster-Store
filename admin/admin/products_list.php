<?php
session_start();
include("../../db.php");
error_reporting(0);

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $product_id = $_GET['product_id'];

    // Fetch product image to delete
    $result = mysqli_query($con, "SELECT product_image FROM products WHERE product_id='$product_id'") or die("Query is incorrect...");
    list($picture) = mysqli_fetch_array($result);
    $path = "../../product_images/$picture";

    if (file_exists($path)) {
        unlink($path);
    }

    // Delete product from database
    mysqli_query($con, "DELETE FROM products WHERE product_id='$product_id'") or die("Query is incorrect...");
}

// Handle pagination
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 12;
$offset = ($page - 1) * $limit;

include "sidenav.php";
include "topheader.php";
?>

<div class="content">
    <div class="container-fluid">
        <div class="col-md-14">
            <div class="card ">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Products List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive ps">
                        <table class="table tablesorter" id="page1">
                            <thead class="text-primary">
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>
                                        <a class="btn btn-primary" href="add_products.php">Add New</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $result = mysqli_query($con, "SELECT product_id, product_image, product_title, product_price 
                                                              FROM products 
                                                              LIMIT $offset, $limit") or die("Query 1 incorrect...");

                                while (list($product_id, $image, $product_name, $price) = mysqli_fetch_array($result)) {
                                    echo "<tr>
                                            <td><img src='../../product_images/$image' style='width:50px; height:50px; border:groove #000'></td>
                                            <td>$product_name</td>
                                            <td>$price</td>
                                            <td>
                                                <a class='btn btn-success' href='products_list.php?product_id=$product_id&action=delete'>Delete</a>
                                            </td>
                                          </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="products_list.php?page=<?php echo max(1, $page-1); ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <?php
                    // Counting total number of products
                    $paging = mysqli_query($con, "SELECT COUNT(*) as count FROM products");
                    $row = mysqli_fetch_assoc($paging);
                    $total_records = $row['count'];
                    $total_pages = ceil($total_records / $limit);

                    for ($b = 1; $b <= $total_pages; $b++) {
                        echo "<li class='page-item'><a class='page-link' href='products_list.php?page=$b'>$b</a></li>";
                    }
                    ?>
                    <li class="page-item">
                        <a class="page-link" href="products_list.php?page=<?php echo min($total_pages, $page+1); ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>
