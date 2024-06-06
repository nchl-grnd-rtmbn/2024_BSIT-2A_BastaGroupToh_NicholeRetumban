<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Sann's Craft | E-Commerce</title>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="admin.css">
        <link rel="stylesheet" href="admin2.css">
    </head>
    <header>
                <h2>
                    <label for="nav-toggle">
                        <span class="las la-bars"></span>
                    </label>
                    Dashboard
                </h2>

                <div class="search-wrapper">
                    <span class="las la-search"></span>
                    <input type="search" placeholder="Search here" />
                </div>

                <div class="user-wrapper">
                    <img src="" width="40px" height="40px" alt="me">
                    
                </div>
            </header>

    <body>

        <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
            <div class="sidebar-brand"> 
                <h1><span class=""></span> <span>Sann's Craft</span> 
                </h1>
            </div>

            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="admin.html"class="active"><span class="las la-igloo"></span>
                            <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="customer.php"><span class="las la-users"></span>
                            <span>Customers</span></a>
                    </li>
                    <li>
                        <a href="orders.php"><span class="las la-book"></span>
                            <span>Orders</span></a>
                    </li>
                    <li>
                        <a href="product.php"><span class="las la-shopping-bag"></span>
                            <span>Product</span></a>
                    </li>
                    <li>
                        <a href="inventory.html"><span class="las la-receipt"></span>
                            <span>Inventory</span></a>
                    </li>
                    <li>
                        <a href="accounts.html"><span class="las la-user-circle"></span>
                            <span>Accounts</span></a>
                    </li>
                </ul>
            </div>
        </div>

<main>
    <h2>Add New Product</h2>
    <form action="add_product.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
        <br>
        <label for="price">Price:</label>
        <input type="number" step="0.01" id="price" name="price" required>
        <br>
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" required>
        <br>
        <input type="submit" value="Add Product">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $description = $_POST["description"];
        $price = $_POST["price"];
        $stock = $_POST["stock"];

        $sql = "INSERT INTO products (name, description, price, stock) VALUES ('$name', '$description', '$price', '$stock')";

        if ($conn->query($sql) === TRUE) {
            echo "New product added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
</main>

<?php include('../includes/footer.php'); ?>