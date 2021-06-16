<?php
require_once './config/database.php';
require_once './classes.php';

if (isset($_POST['buttonDelete'])) {
    if (empty($_POST['delete_book']) && empty($_POST['delete_disc']) && empty($_POST['delete_furniture'])) {
?>
        <script>
            alert('no checked')
        </script>
<?php
    } else {
        foreach ($_POST['delete_book'] as $delete_book) {
            $book = new Book($pdo);
            $book->delete('book', intval($delete_book));
        }
        foreach ($_POST['delete_disc'] as $delete_disc) {
            $disc = new Disc($pdo);
            $disc->delete('disc', intval($delete_disc));
        }
        foreach ($_POST['delete_furniture'] as $delete_furniture) {
            $furniture = new Furniture($pdo);
            $furniture->delete('furniture', intval($delete_furniture));
        }
    }
}



// if (isset($_POST['buttonDelete'])) {
//     if (isset($_POST['delete_book'])) {
//         foreach ($_POST['delete_book'] as $delete_book) {
//             $book = new Book($pdo);
//             $book->delete('book', intval($delete_book));
//             header('Location: index.php'); 
//         }
//     }
// }


// if (isset($_POST['buttonDelete'])) {
//     if (isset($_POST['delete_disc'])) {
//         foreach ($_POST['delete_disc'] as $delete_disc) {
//             $disc = new Disc($pdo);
//             $disc->delete('disc', intval($delete_disc));
//             header('Location: index.php'); 
//         }
//     }
// }

// if (isset($_POST['buttonDelete'])) {
//     if (isset($_POST['delete_furniture'])) {
//         foreach ($_POST['delete_furniture'] as $delete_furniture) {
//             $furniture = new Furniture($pdo);
//             $furniture->delete('furniture', intval($delete_furniture));
//             header('Location: index.php'); 
//         }
//     }
// }
