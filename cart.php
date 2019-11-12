<!doctype html>
<html>
<head>
    <title>The Best Chef BookStore - cart</title>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/cart.css">
</head>

<body>

<main>
    <?php
    include('header.php')
    ?>
    <h1>Your Shopping Cart</h1>
    <section id="topSection">

        <a href="#" class="commandButton">Clear Cart</a>

        <a href="checkout.php" class="commandButton">Proceed to Checkout</a>

        <a href="index.php" class="commandButton">Continue Shopping</a>
    </section>

    <section id="midSection">

        <table>
            <tr>
                <th class="titleColumn">Title</th>
                <th class="quantityColumn">Quantity</th>
                <th class="priceColumn">Price</th>
                <th class="totalColumn">Total Price</th>
            </tr>
            <tr>
                <td class="titleColumn">Chinese Cooking for Dummies</td>
                <td class="quantityColumn">
                    <form id="quantityForm" action="cart.php" method="POST">
                        <?php
                        if(isset($_POST['quantityInput_1'])){
                            echo "<input id='quantityInput' name='quantityInput_1' type='number' value={$_POST['quantityInput_1']} autofocus>";
                        }else{
                            echo "<input id='quantityInput' name='quantityInput_1' type='number' value=1 autofocus>";

                        }
                        ?>
                        <input id="updateButton" name="updateButton" type="submit" value="update">
                    </form>
                </td>
                <td class="priceColumn">
                    $30.00
                </td>
                <td class="totalColumn">
                    $30.00
                </td>
            </tr>
            <tr>
                <td class="titleColumn">Healthy Japanese Cooking: Simple Recipes for a Long Life, the Shoku-Iku Way</td>
                <td class="quantityColumn">
                    <form id="quantityForm" action="cart.php" method="POST">
                        <?php
                        if(isset($_POST['quantityInput_2'])){
                            echo "<input id='quantityInput' name='quantityInput_2' type='number' value={$_POST['quantityInput_2']} autofocus>";
                        }else{
                            echo "<input id='quantityInput' name='quantityInput_2' type='number' value=1 autofocus>";

                        }
                        ?>
                        <input id="updateButton" name="updateButton" type="submit" value="update">
                    </form>
                </td>
                <td class="priceColumn">
                    $40.00
                </td>
                <td class="totalColumn">
                    $40.00
                </td>
            </tr>
        </table>
    </section>

    <section id="bottomSection">
        <!--                  Only show totals if something is in the cart-->
        <h2>You have 2 item in the cart</h2>
        <h2>Cart Total: $70.00</h2>

    </section>
    <?php
    include('footer.php')
    ?>

</main>
</body>



