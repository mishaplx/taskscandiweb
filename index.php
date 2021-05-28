<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./scss/style.css">

    <title>Document</title>
</head>

<body>
    <header class="header" method="post">

        <h1 class="product__list">product list</h1>
        <div class="buttons">
            <input type="button" name="add" value="add" onclick=" window.open('add__product.html','_top')" class="input-btn">
        </div>

    </header>

    <div class="container_book">
        <!-- <script type="text/javascript" src="js/jquery-1.6.2.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#checkBoxAll').click(function() {
                    if ($(this).is(":checked"))
                        $('.chkCheckBoxId').prop('checked', true);
                    else
                        $('.chkCheckBoxId').prop('checked', false);
                });
            });
        </script> -->
        <?php
        include "./php/connect.php";
        if (isset($_POST['buttonDelete'])) {
            if (isset($_POST['username'])) {
                foreach ($_POST['username'] as $username) {
                    $stmt = $dbh->prepare('delete from book where id = :username');
                    $stmt->bindValue('username', $username);
                    $stmt->execute();
                }
            }
        }
        $stmt = $dbh->prepare('select * from book');
        $stmt->execute();
        ?>
        <form method="post" action="index.php">
            <input type="submit" name="buttonDelete" value="Delete" class="del-btn" onclick="return confirm('Are you sure?')" />
            <table cellpadding="2" cellspacing="2" border="1">
                <tr class="tr__none">
                    <th><input type="checkbox" id="checkBoxAll" /></th>
                    <th>id</th>
                    <th>sku</th>
                    <th>name</th>
                    <th>prise</th>
                    <th>weigth</th>
                </tr>
                <?php while ($account = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
                    <tr class="tr__flex">
                        <td class="checkbox"><input type="checkbox" class="chkCheckBoxId" value="<?php echo $account->id; ?>" name="username[]" /></td>
                        <!-- <td>//=<?php echo $account->id; ?></td> -->
                        <td><?php echo $account->sku; ?></td>
                        <td><?php echo $account->name_product; ?></td>
                        <td><?php echo $account->price;
                            echo "$"; ?></td>
                        <td><?php echo "Weigth: ";
                            echo $account->weight_book;
                            echo "KG"; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </form>
    </div>
    <div class="container__disc">
    
        <?php
        include "./php/connect.php";
        if (isset($_POST['buttonDelete'])) {
            if (isset($_POST['checkname'])) {
                foreach ($_POST['checkname'] as $checkname) {
                    $stmt = $dbh->prepare('delete from disc where id = :checkname');
                    $stmt->bindValue('checkname', $checkname);
                    $stmt->execute();
                }
            }
        }
        $stmt = $dbh->prepare('select * from disc');
        $stmt->execute();
        ?>
        <form method="post" action="index.php">
            <input type="submit" name="buttonDelete" value="Delete" class="del-btn" onclick="return confirm('Are you sure?')" />
            <table>
                <tr class="tr__none">
                    <th><input type="checkbox" id="checkBoxAll" /></th>
                    <th>id</th>
                    <th>sku</th>
                    <th>name</th>
                    <th>prise</th>
                    <th>size</th>
                </tr>
                <?php while ($account = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
                    <tr class="tr__flex">
                        <td class="checkbox"><input type="checkbox" class="chkCheckBoxId" value="<?php echo $account->id; ?>" name="checkname[]" /></td>
                        <!-- <td>//=<?php echo $account->id; ?></td> -->
                        <td><?php echo $account->sku; ?></td>
                        <td><?php echo $account->name_product; ?></td>
                        <td><?php echo $account->price; echo "$"; ?></td>
                        <td><?php echo "Size:";echo $account->size_disc;echo " MB"; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </form>
    </div>
    <div class="container_furniture">
    
        
        <?php
        include "./php/connect.php";
        if (isset($_POST['buttonDelete'])) {
            if (isset($_POST['username'])) {
                foreach ($_POST['username'] as $username) {
                    $stmt = $dbh->prepare('delete from furniture where id = :username');
                    $stmt->bindValue('username', $username);
                    $stmt->execute();
                }
            }
        }
        $stmt = $dbh->prepare('select * from furniture');
        $stmt->execute();
        ?>
        <form method="post" action="index.php">
            <input type="submit" name="buttonDelete" value="Delete" class="del-btn" onclick="return confirm('Are you sure?')" />
            <table cellpadding="2" cellspacing="2" border="1">
                <tr class="tr__none">
                    <th><input type="checkbox" id="checkBoxAll" /></th>
                    <th>id</th>
                    <th>sku</th>
                    <th>name</th>
                    <th>prise</th>
                    <th>HxWxL</th>


                </tr>
                <?php while ($account = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
                    <tr class="tr__flex">
                        <td class="checkbox"><input type="checkbox" class="chkCheckBoxId" value="<?php echo $account->id; ?>" name="username[]" /></td>
                        <td><?php echo $account->id; ?></td>
                        <td><?php echo $account->sku; ?></td>
                        <td><?php echo $account->name_product; ?></td>
                        <td><?php echo $account->price; ?></td>
                        <td><?php echo "Dimension: ";
                            echo $account->height;
                            echo "x";
                            echo $account->width;
                            echo "x";
                            echo $account->length_furtinure; ?></td>

                    </tr>
                <?php } ?>
            </table>
        </form>
    </div>
    <script src="./js/script.js"></script>
</body>

</html>