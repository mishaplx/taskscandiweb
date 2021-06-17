<?php

$page_title = 'list product';
require_once './classes.php';
require_once './config/database.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./scss/style-index.css">
    <title><?php echo ($page_title) ?></title>

</head>

<body>
    <div class="block_title">
        <h1 class="title">Product list</h1>
        <div class="button">
            <button class="add" onclick="document.location='./add_product.php'">add</button>
        </div>
    </div>

    <div class="container">
        <form action="./delete_records.php" method="POST">

            <?php
            $book = new Book($pdo);
            for ($i = 0; $i < count($book->get_data('book')); $i++) {
            ?>
                <ul class="book item">
                    <li>

                        <input type="checkbox" class="delete_book" name="delete_book[]" value="<?php echo ($book->get_data('book')[$i]['id']) ?>">

                    </li>
                    <li><?php echo ($book->get_data('book')[$i]['sku'] . '<br>'); ?></li>
                    <li><?php echo ($book->get_data('book')[$i]['name_product'] . '<br>'); ?></li>
                    <li><?php echo ($book->get_data('book')[$i]['price'] . ' $'); ?></li>
                    <li><?php echo ($book->get_data('book')[$i]['weight_book'] . 'KG'); ?></li>

                </ul>
            <?php
            }

            $disc = new Disc($pdo);
            for ($i = 0; $i < count($disc->get_data('disc')); $i++) {
            ?>
                <ul class="disc item">
                    <li>
                        <input type="checkbox" class="delete_disc" name="delete_disc[]" value="<?php echo ($disc->get_data('disc')[$i]['id']) ?>">
                    </li>
                    <li><?php echo ($disc->get_data('disc')[$i]['sku'] . '<br>'); ?></li>
                    <li><?php echo ($disc->get_data('disc')[$i]['name_product'] . '<br>'); ?></li>
                    <li><?php echo ($disc->get_data('disc')[$i]['price'] . ' $'); ?></li>
                    <li><?php echo ($disc->get_data('disc')[$i]['size_disc'] . 'MB'); ?></li>
                </ul>
            <?php
            }

            $furniture = new Furniture($pdo);
            for ($i = 0; $i < count($furniture->get_data('furniture')); $i++) {
            ?>
                <ul class="furniture item">
                    <li>
                        <input type="checkbox" class="delete_furniture" name="delete_furniture[]" value="<?php echo ($furniture->get_data('furniture')[$i]['id']) ?>">
                    </li>
                    <li><?php echo ($furniture->get_data('furniture')[$i]['sku'] . '<br>'); ?></li>
                    <li><?php echo ($furniture->get_data('furniture')[$i]['name_product'] . '<br>'); ?></li>
                    <li><?php echo ($furniture->get_data('furniture')[$i]['price'] . ' $'); ?></li>
                    <li><?php echo ('Dimension:' . $furniture->get_data('furniture')[$i]['height'] . 'x' . ($furniture->get_data('furniture')[$i]['width']) . 'x' .  $furniture->get_data('furniture')[$i]['length_furtinure']); ?></li>
                    <?php

                    ?>
                </ul>
            <?php
            }

            ?>
            <button type="submit" class="mass__delete" name="buttonDelete" value="Delete"> Mass Delete </button>
        </form>

    </div>

    <script src="./js/script.js"></script>
</body>

</html>