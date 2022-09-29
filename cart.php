<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bizarrdo's Chips</title>
    <!-- font family  google-->
    <link href="https://fonts.googleapis.com/css2?family=Recursive&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header and nav bar html -->
    <div class="header_product">
        <div class="container">
            <!-- nav Bar html -->
            <div class="navbar">
                <div class="log">
                    <img src="/img/Bizarrdos_Chips_V2 (1).png" width="125px" alt="logo Website">
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="account.php">Account</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- cart conteint -->
    <div class="cart">
        <div class="small-container">
            <h2 class="title">Orders</h2>
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>SubTotal</th>
                </tr>
                <tr>
                    <td>
                        <br>
                        <div class="cart-info">
                            <img src="/img/Bizarrdo Bag Classic White Background.jpg" alt="buy-1" >
                            <div>
                                <p>Classic</p>
                                <small>price : <strong>$2.99</strong></small>
                                <br>
                                <a href="/">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1" name="quantity" id="quantity"></td>
                    <td>$2.99</td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <div class="cart-info">
                            <img src="/img/Bizarrdo Bag Spicy White Background.jpg" alt="buy-2" >
                            <div>
                                <p>Flamin Hot</p>
                                <small>price : <strong>$2.99</strong></small>
                                <br>
                                <a href="#">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1" name="quantity" id="quantity"></td>
                    <td>$2.99</td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <div class="cart-info">
                            <img src="/img/Sour Cream and Onion White Background.jpg" alt="buy-3" >
                            <div>
                                <p>Sour Cream and Onion</p>
                                <small>price : <strong>$2.99</strong></small>
                                <br>
                                <a href="#">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1" name="quantity" id="quantity"></td>
                    <td>$2.99</td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <div class="cart-info">
                            <img src="/img/Bizarrdo Bag Salt and Vin White Background.jpg" alt="buy-1" >
                            <div>
                                <p>Salt and Vin</p>
                                <small>price : <strong>$2.99</strong></small>
                                <br>
                                <a href="#">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1" name="quantity" id="quantity"></td>
                    <td>$2.99</td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <div class="cart-info">
                            <img src="/img/Bizarrdo Bag Limon White Background.jpg" alt="buy-2" >
                            <div>
                                <p>Limon</p>
                                <small>price : <strong>$2.99</strong></small>
                                <br>
                                <a href="#">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1" name="quantity" id="quantity"></td>
                    <td>$2.99</td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <div class="cart-info">
                            <img src="/img/Bizarrdo Bag BBQ White Background.jpg" alt="buy-3" >
                            <div>
                                <p>Barbecue</p>
                                <small>price : <strong>$2.99</strong></small>
                                <br>
                                <a href="#">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1" name="quantity" id="quantity"></td>
                    <td>$2.99</td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <div class="cart-info">
                            <img src="/img/Bizarrdo Bag Cheesy White Background.jpg" alt="buy-3" >
                            <div>
                                <p>Cheesy Flavored</p>
                                <small>price : <strong>$2.99</strong></small>
                                <br>
                                <a href="#">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1" name="quantity" id="quantity"></td>
                    <td>$2.99</td>
                </tr>

            </table>

            <br>
            <div class="total-price">
                <table>
                    <tr>
                        <td>SubTotal</td>
                        <td>$</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>$</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn">Pay</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <!------------------- footer--------------- -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-3">
                    <h3>UseFul Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <h1>Bizarrdo's Chips</h1>

                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">BMGT 407 - 2022</p>
        </div>
    </div>
    <!-- script -->
    <script src="script.js"></script>
</body>

</html>