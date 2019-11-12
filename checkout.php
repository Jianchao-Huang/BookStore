<!doctype html>
<html lang="en">
<head>
    <title>The Best Chef BookStore - Checkout</title>

    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link rel="stylesheet" type="text/css" href="css/checkout.css"/>

</head>
<body>

<?php
include('header.php');
?>
<main>
    <h1>Checkout</h1>

    <section id="bottomSection">

        <section id="dataForm">
            <p id="formTitleText">In order to purchase the items in your shopping cart, please provide the
                following information:</p>
            <!-- TODO Create a form for customer information -->
            <form id="checkoutForm" method="POST">
                <?php
                include('error.php');
                ?>
                <fieldset>
                    <label for="name">Customer Name:</label>
                    <input name="name" type="text" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"
                           autofocus>
                    <span class="error"><?= $nameError ?> </span>
                </fieldset>
                <fieldset>
                    <label for="address">Address:</label>
                    <input name="address" type="text"
                           value="<?php echo isset($_POST['address']) ? $_POST['address'] : '' ?>">
                    <span class="error"><?= $addressError ?> </span>
                </fieldset>
                <fieldset>
                    <label for="phone">Phone:</label>
                    <input name="phone" type="text" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>">
                    <span class="error"><?= $phoneError ?> </span></fieldset>
                <fieldset>
                    <label for="Email">Email:</label>
                    <input name="Email" type="email"
                           value="<?php echo isset($_POST['Email']) ? $_POST['Email'] : '' ?>">
                    <span class="error"><?= $emailError ?> </span>
                </fieldset>
                <fieldset>
                    <label for="creditCardNumber">Credit Card Number:</label>
                    <input name="creditCardNumber" type="text"
                           value="<?php echo isset($_POST['creditCardNumber']) ? $_POST['creditCardNumber'] : '' ?>">
                    <span class="error"><?= $creditCardNumberError ?> </span>
                </fieldset>
                <fieldset>
                    <label for="expMonth">Exp. Date:</label>
                    <select name="expMonth" type="text">
                        <?php
                        $months = array('Select' => 0, 'January' => 1, 'February' => 2, 'March' => 3, 'April' => 4, 'May' => 5, 'June' => 6, 'July' => 7, 'August' => 8, 'September' => 9, 'October' => 10, 'November' => 11, 'December' => 12);
                        if (isset($_POST['expMonth'])){
                            echo "<option value={$_POST['expMonth']}>" . array_search($_POST['expMonth'], $months) . "</option> ";
                        };
                        foreach ($months as $month => $value) {
                            echo "<option value=$value>" . $month . "</option> ";
                        }

                        ?>
                    </select>
                    <select name="expYear" type="text">
                        <?php
                        if (isset($_POST['expYear'])){
                            echo "<option value={$_POST['expYear']}>" .  $_POST['expYear'] . "</option> ";
                        }else{
                            echo "<option value= Select>Select</option> ";
                        };
                        for ($year = 2019; $year < 2030; $year++) {
                            echo "<option value=$year>$year</option> ";
                        }
                        ?>
                    </select>
                    <span class="error"><?= $expDateError ?></span>
                </fieldset>


                <input id="submitButton" name="submit" type="submit" value="submit">


            </form>
        </section>
        <section id="checkoutSummary">
            <ul>
                <li>Next day delivery is guaranteed.</li>
                <li>A $5.00 shipping fee is applied to all orders</li>
            </ul>
            <div id="checkoutTotals">
                <table>
                    <tr>
                        <td>Cart Subtotal</td>
                        <td>
                            $100.00
                        </td>
                    </tr>
                    <tr>
                        <td>Shipping Fee</td>
                        <td>
                            $5.00
                        </td>
                    </tr>
                    <tr>
                        <td class="total">Total</td>
                        <td class="total">
                            $105.00
                        </td>
                    </tr>
                </table>
            </div>
        </section>
    </section>
</main>
<?php
include('footer.php')
?>
</body>
</html>

