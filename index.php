<?php

$page_title = 'list product';
$page_style = './scss/style-index.css';
require_once './loyaut_header.php';

require_once './classes.php';

?>
<div class="block_title">
    <h1 class="title">Product list</h1>
    <div class="button">
        <button class="add" onclick="document.location='./add_product.php'">add</button>
    </div>
</div>


<?php
require_once './config/database.php';

?>

<div class="container">
    <form action="./delete_records.php" method="POST" style="display: flex;">

        <?php
        $book = new Book($pdo);
        for ($i = 0; $i < count($book->get_data('book')); $i++) {
        ?>
            <ul class="book item" style="list-style-type:none;">
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
            <ul class="disc item" style="list-style-type:none;">
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
            <ul class="furniture item" style="list-style-type:none;">
                <li>
                    <input type="checkbox" class="delete_furniture" name="delete_furniture[]" value="<?php echo ($furniture->get_data('furniture')[$i]['id']) ?>">
                </li>
                <li><?php echo ($furniture->get_data('furniture')[$i]['sku'] . '<br>'); ?></li>
                <li><?php echo ($furniture->get_data('furniture')[$i]['name_product'] . '<br>'); ?></li>
                <li><?php echo ($furniture->get_data('furniture')[$i]['price'] . ' $'); ?></li>
                <li><?php echo ($furniture->get_data('furniture')[$i]['height'] . 'x' . ($furniture->get_data('furniture')[$i]['width']) . 'x' .  $furniture->get_data('furniture')[$i]['length_furtinure']); ?></li>
                <?php

                ?>
            </ul>
        <?php
        }

        ?>
        <button type="submit" class="mass__delete" name="buttonDelete" value="Delete" style="position: absolute;
    top: 5%;
    left: 85%;"> удалить </button>
    </form>

</div>

























<?php
require_once './loyaut_footer.php';
?>