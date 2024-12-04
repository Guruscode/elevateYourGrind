<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elevate your Grind Male-Luxury | Wristwatch</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        .cart-container {
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 8px;
        }
        .checkout-btn {
            background-color: #ff6f61;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 20px;
        }
        .checkout-btn:hover {
            background-color: #e75b4d;
        }
        .total-price {
            font-size: 20px;
            font-weight: bold;
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="container cart-container">
        <h2>Your Shopping Cart</h2>
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody id="cart-items">
                <!-- Cart items will be dynamically inserted here -->
            </tbody>
        </table>
        <div class="total-price" id="total-price">Total: $0.00</div>
        <button class="checkout-btn" id="checkout-button">Checkout with Paystack</button>
    </div>

    <!-- Paystack JS -->
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            let totalAmount = 0;

            // Generate cart table HTML and calculate total
            let cartHTML = '';
            cart.forEach(item => {
                const total = (item.price * item.quantity).toFixed(2);
                cartHTML += `
                    <tr>
                        <td>${item.name}</td>
                        <td>${item.price}</td>
                        <td>${item.quantity}</td>
                        <td>${total}</td>
                    </tr>
                `;
                totalAmount += parseFloat(total);
            });

            // Display cart items in the table
            document.getElementById('cart-items').innerHTML = cartHTML;
            document.getElementById('total-price').innerText = `Total: $${totalAmount.toFixed(2)}`;

            // Paystack Checkout
            document.getElementById('checkout-button').addEventListener('click', function () {
                let handler = PaystackPop.setup({
                    key: 'pk_test_xxxxxxxxxxxxxxxxxxxxxxx', // Replace with your Paystack public key
                    email: 'customer@example.com', // Replace with customer's email
                    amount: totalAmount * 100, // Amount in kobo
                    currency: 'USD',
                    ref: 'TX' + Math.floor((Math.random() * 1000000000) + 1), // Generate a random reference
                    callback: function (response) {
                        alert('Payment successful! Transaction ref: ' + response.reference);
                    },
                    onClose: function () {
                        alert('Payment cancelled.');
                    }
                });
                handler.openIframe();
            });
        });
    </script>
</body>

</html>
