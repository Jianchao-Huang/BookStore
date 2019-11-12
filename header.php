<header>
    <div id="leftHeader">
        <a href="index.php">
            <img src="images/logo.jpg" alt="Treble Clef logo"/>
        </a>
    </div>
    <div id="midHeader">
        <form id="searchBoxForm">
            <input id="searchBox" type="text" value="Search">
            <input id="searchIcon" type="image"
                   src="images/icon/search_icon.png" alt="search icon">
        </form>
        <div class="dropdown">
            <p class="dropdownSelect">Select Category</p>
            <div class="dropdownContent">
                <?php
                $categories = array(1 => "Chinese Cooking", 2 => "Japanese Cooking", 3 => "Korean Cooking", 4 => "French Cooking");
                foreach ($categories as $categoryId => $categoryName) {
                    echo "<p><a href='category.php?category=$categoryId'>$categoryName</a></p> ";
                }
                ?>
            </div>
        </div>
    </div>
    <div id="rightHeader">
        <div id="cart">
            <div id="cartIcon"><a href="cart.php">
                    <img src="images/icon/shopping_cart_icon.png" alt="shopping cart icon"></a>
            </div>
            <div id="cartCount">0 items</div>
        </div>
        <div id="loginButton"><a href="#">login</a></div>
    </div>
    </div>
</header>