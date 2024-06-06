<?php
session_start();

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo '<p>Your cart is empty.</p>';
    echo '<a href="shopnow.php">Continue Shopping</a>';
    exit;
}

// Calculate total price
$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['item_price'] * $item['quantity'];
}

// Save order to session
if (!isset($_SESSION['order_history'])) {
    $_SESSION['order_history'] = [];
}

$order = [
    'order_id' => uniqid(),
    'date' => date('Y-m-d H:i:s'),
    'items' => $_SESSION['cart'],
    'total' => $total,
    'status' => 'Processing' // Initial status
];
$_SESSION['order_history'][] = $order;

// Generate order receipt
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #10a882;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background: #f2f2f2;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #10a882;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
            text-align: center;
            margin-top: 20px;
        }

        .btn:hover {
            background: #45a049;
        }

        form {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Order Receipt</h1>
        <table>
            <tr><th>Item</th><th>Quantity</th><th>Price</th><th>Subtotal</th></tr>
            <?php
            foreach ($_SESSION['cart'] as $item) {
                $subtotal = $item['item_price'] * $item['quantity'];
                echo '<tr>';
                echo '<td>' . htmlspecialchars($item['item_name']) . '</td>';
                echo '<td>' . htmlspecialchars($item['quantity']) . '</td>';
                echo '<td>₱' . htmlspecialchars($item['item_price']) . '</td>';
                echo '<td>₱' . htmlspecialchars($subtotal) . '</td>';
                echo '</tr>';
            }
            ?>
            <tr>
                <td colspan="3"><strong>Total</strong></td>
                <td>₱<?php echo htmlspecialchars($total); ?></td>
            </tr>
        </table>

        <?php
        // Clear the cart
        unset($_SESSION['cart']);
        ?>

        <p>Thank you for your purchase!</p>
        <a href="shopnow.php" class="btn">Continue Shopping</a>

        <!-- See Order button linked to user profile -->
        <form action="profile.php" method="get">
            <input type="submit" value="See Order" class="btn">
        </form>
    </div>
</body>
</html>
