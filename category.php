<!doctype html>
<html>
<head>
    <title>The Best Chef</title>
    <meta charset="utf-8">
    <meta name="description" content="The homepage for The Treble Clef">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/category.css">
</head>

<body>
<main>
    <?php
    include('header.php');
    ?>
    <section>
        <article id="mainLeft">
            <div class="introSpace"></div>
            <div class="intro">
                <?php
                foreach ($categories as $categoryId => $categoryName) {
                    if ($categoryId == $_GET["category"]) {
                        echo "
                        <button class=\"clickedCategory\" >
                            <a href='category.php?category=$categoryId'>
                            $categoryName</a>
                        </button>";
                    } else {
                        echo "
                        <button class=\"unClickedCategory\" >
                            <a href='category.php?category=$categoryId'>
                            $categoryName</a>
                        </button>";
                    };
                }
                ?>

            </div>
            <div class="introSpace"></div>
        </article>
        <article id="mainRight">

            <?php
            $book1 = array("title" => "Chinese Cooking for Dummies", "author" => "Martin Yan", "price" => 30, "category" => "chinese_cooking", "image" => "chinese_cooking_for_dummies", "readNow" => true);
            $book2 = array("title" => "Key to Chinese Cooking", "author" => "Irene Kuo", "price" => 40, "category" => "chinese_cooking", "image" => "key_to_chinese_cooking", "readNow" => true);
            $book3 = array("title" => "Mastering the art of Chinese Cooking", "author" => "Irene Kuo", "category" => "chinese_cooking", "price" => 50, "image" => "mastering_the_art_of_chinese_cooking", "readNow" => false);
            $book4 = array("title" => "Simple Chinese Cooking", "author" => "Kylie Kwong", "price" => 33, "category" => "chinese_cooking", "image" => "simple_chinese_cooking", "readNow" => false);
            $chineseCooking = array($book1, $book2, $book3, $book4);

            $book1 = array("title" => "Japanese Cooking A Simple Art", "author" => "Shizuco Tsinji", "price" => 25, "category" => "japanese_cooking", "image" => "a_simple_art", "readNow" => true);
            $book2 = array("title" => "Healthy Japanese Cooking: Simple Recipes for a Long Life, the Shoku-Iku Way", "category" => "japanese_cooking", "author" => "Makiko Sano", "price" => 40, "image" => "healthy_japanese_cooking", "readNow" => true);
            $book3 = array("title" => "MJapanese Cooking Made Simple", "author" => "Salinas Press", "price" => 50, "category" => "japanese_cooking", "image" => "japanese_cooking_made_simple", "readNow" => false);
            $book4 = array("title" => "Morimoto: The New Art of Japanese Cooking", "author" => "Masaharu Morimoto", "category" => "japanese_cooking", "price" => 33, "image" => "the_new_art_of_japanese_cooking", "readNow" => false);
            $japaneseCooking = array($book1, $book2, $book3, $book4);

            $book1 = array("title" => "Maangchi's Real Korean Cooking: Authentic Dishes for the Home Cook", "author" => "Maangchi", "price" => 30, "category" => "korean_cooking", "image" => "authentic_dishes_for_the_home_cook", "readNow" => true);
            $book2 = array("title" => "My Rice Bowl: Korean Cooking Outside the Lines", "author" => "Jess Thomson and Rachel Yang", "price" => 40, "category" => "korean_cooking", "image" => "my_rice_bowl", "readNow" => true);
            $book3 = array("title" => "Quick and Easy Korean Cooking for Everyone", "author" => "Ji Sook Choe and Yukiko Moriyama", "price" => 50, "category" => "korean_cooking", "image" => "quick&easy_korean_cooking_for_everyone", "readNow" => false);
            $book4 = array("title" => "Seoul Food Korean Cookbook: Korean Cooking from Kimchi and Bibimbap to Fried Chicken and Bingsoo", "author" => "Naomi Imatome-Yun", "category" => "korean_cooking", "price" => 33, "image" => "seoul_food_korean_cookbook", "readNow" => false);
            $koreanCooking = array($book1, $book2, $book3, $book4);

            $book1 = array("title" => "The New Essentials of French Cooking", "author" => "Melissa Clark", "price" => 30, "category" => "french_cooking", "image" => "essentials_of_french_cooking", "readNow" => true);
            $book2 = array("title" => "Hows and Whys of French Cooking", "author" => "Alma S. Lach", "price" => 40, "category" => "french_cooking", "image" => "hows_and_whys_of_french_cooking", "readNow" => true);
            $book3 = array("title" => "Mastering the Art of French Cooking", "author" => "Simone Beck and Louisette Bertholle", "category" => "french_cooking", "price" => 35, "image" => "mastring_the_art_of_french_cooking", "readNow" => false);
            $book4 = array("title" => "The French Kitchen: 200 Recipes from the Master of French Cooking", "author" => "Roux Jr, Michel", "category" => "french_cooking", "price" => 20, "image" => "the_french_kitchen", "readNow" => false);
            $frenchCooking = array($book1, $book2, $book3, $book4);

            $categories[1] = $chineseCooking;
            $categories[2] = $japaneseCooking;
            $categories[3] = $koreanCooking;
            $categories[4] = $frenchCooking;

            $categoryId = $_GET["category"];

            foreach ($categories[$categoryId] as $book) {
                echo "
                        <div class=\"book\">
                            <div class=\"bookImage\">
                                    <img src=\"./images/book_image/{$book['category']}/{$book['image']}.gif\"
                                         alt=\"{$book['title']}\">
                                </div>
                                <div class=\"bookInfo\">
                                    <h1>{$book['title']}</h1>
                                    <p>By {$book['author']}</p>
                                    <p>$ {$book['price']}</p>
                                    <button>
                                        Add to cart
                                    </button>";
                if ($book['readNow']) {
                    echo "
                                 <button>
                                    <a href='#'>Read now</a>
                                </button>
                            ";
                };
                echo " </div>
                            </div>";
            };
            ?>

        </article>
    </section>

    <?php
    include('footer.php');
    ?>
</main>
</body>
</html>