<?php
$page_title = 'add product';
$page_style = './scss/style.css';



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./scss/style-add.css">
    <title><?php echo ($page_title) ?></title>

</head>

<body>
    <div class="title">
        <h1 class="product__add">product add</h1>
        <form action="./handler_add_form.php" method="post">
            <div class="btnsc">
                <input type="submit" value="Save" class="input-btn" />
                <input type="reset" value="Cancle" id="cancle" class="input-btn" />
            </div </form>
    </div>
    <form action="./handler_add_form.php" method="post" class="form_info">
        <div class="sku__flex">
            <label for="sku">SKU</label>
            <input type="text" id="sku" name="sku" required> <br>
        </div>
        <div class="name_flex">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required> <br>
        </div>
        <div class="price__flex">
            <label for="price">Price($)</label>
            <input type="text" id="price" name="price" required pattern="^[ 0-9]+$">
        </div>
        <div class="form-group">
            <label for="box1">Type Swither</label>
            <select id="box1" name="type" class="box1" required onchange="changeFunc()">
                <option selected> </option>
                <option class="disc" value="disc"> DVD-disc</option>
                <option value="book">Book</option>
                <option value="furniture">Furniture</option>
            </select> <br>


            <div class="form__disk">
                <label for="disc">Size(Mb)
                    <input type="text" class="input__disc" value="" id="disc" name="disc" placeholder="Size(Mb)" pattern="^[ 0-9]+$">
                    <p>Please, provide size(Mb)</p>
                </label>
            </div>
            <div class="form__furniture">
                <label for="furniture">Height (CM)
                    <input type="text" value="" id="furniture" name="furnitureH" placeholder="Height (CM)" pattern="^[ 0-9]+$"><br>
                    <p>Please, provide Height (CM)</p>
                </label>
                <label for="furniture">Width (CM)
                    <input type="text" value="" id="furniture" name="furnitureW" placeholder="Width (CM)" pattern="^[ 0-9]+$"><br>
                    <p>Please, provide Width (CM)</p>
                </label>
                <label for="furniture">Length (CM)
                    <input type="text" value="" id="furniture" name="furnitureL" placeholder="Length (CM)" pattern="^[ 0-9]+$"><br>
                    <p>Please, provide Length (CM)</p>
                </label>
            </div>
            <div class="form__book">
                <label for="book">Weigth (KG)
                    <input type="text" value="" id="book" name="bookw" placeholder="weigth(KG)" pattern="^[ 0-9]+$">
                    <p>Please, provide weigth(KG)</p>
                </label>
            </div>
        </div>
        
    </form>

    <script src="./js/script.js"></script>
</body>

</html>