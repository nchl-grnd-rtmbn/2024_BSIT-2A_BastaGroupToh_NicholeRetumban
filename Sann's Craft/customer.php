
<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Sann's Craft | E-Commercee</title>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="admin.css">
        <link rel="stylesheet" href="admin2.css">
        <link rel="stylesheet" href="admin1.css">
        <link rel="stylesheet" href="account.css">

    </head>
    <header>
                <h2>
                    <label for="nav-toggle">
                        <span class="las la-bars"></span>
                    </label>
                    Dashboard
                </h2>

                <form class="search-form" action="search.php" method="get">
                <input type="text" name="query" placeholder="Search...">
                <button type="submit"><i class="fa fa-search"></i></button>
                </form>

           <div class="header-actions">
        <div class="account-container">
          <button class="account-icon">
            <img src="image/account.png" alt="Account Icon">
            <p>Me</p>
            </div>
          </button>
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
                        <a href="dashboard.php"><span class="las la-igloo"></span>
                            <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="customer.php" class="active"><span class="las la-users"></span>
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
                        <a href="accounts.php"><span class="las la-user-circle"></span>
                            <span>Accounts</span></a>
                    </li>
                </ul>
            </div>
        </div>
<main>
    <h2>Customers</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Full Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>User Type</th>
            <th>Date Added</th>
            <th>Username</th>
        </tr>
        <?php
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["user_id"]. "</td>
                        <td>" . $row["email"]. "</td>
                        <td>" . $row["full_name"]. "</td>
                        <td>" . $row["age"]. "</td>
                        <td>" . $row["address"]. "</td>
                        <td>" . $row["user_type"]. "</td>
                        <td>" . $row["date_added"]. "</td>
                        <td>" . $row["username"]. "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No customers found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</main>