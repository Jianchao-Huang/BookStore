<!DOCTYPE html>

<html>
<head>
    <title>The Best Chef BookStore</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<?php
include('header.php');
?>

<section>
    <div id="mainLeft">
        <div></div>
        <div>
            <h1>Welcome to the Best Chef BookStore</h1>
        </div>
        <div>
            <h1>Making your own Dim Sum, Sushi, </h1>
            <h1>Bulgogi and Boeuf Bourguignon!</h1>
        </div>
        <div>
            <h1>Extensive Books and Low Price</h1>
        </div>
        <div></div>
    </div>
    <div id='mainRight'>
        <h1>Shop by category:</h1>
        <div class="categoriesContainer">
            <?php

            foreach ($categories as $categoryId => $categoryName) {
                $categoryImage = str_replace(' ', '_', strtolower($categoryName));
                echo "
                     <div>
                        <a href='category.php?category=$categoryId'>
                           <h1>$categoryName</h1>
                        <img src=\"./images/categories/{$categoryImage}.png\" alt=\"{$categoryName}\">                       
                     </a>
                    </div>";
            }
            ?>
        </div>
    </div>
</section>

<?php
include('footer.php');
?>
</body>
</html>
