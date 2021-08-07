<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Онлайн магазин</title>
</head>
<body>
 <?php
 require('templates/db.php');
 ?>
<header>
     <?php 
require('templates/header.php');
?>
</header>

<div id="content">

   <?php 
    

    $page = $_GET['page'];

    if (!isset($page)) {
        require('templates/main.php');
    } elseif ($page == 'shop') {
        require('templates/shop.php');
    } elseif ($page == 'product') {
        $id = $_GET['id'];
        $good = [];
        foreach ($goods as $product) {
            if ($product['id'] == $id) {
                $good = $product;
                break;
            }
        }
        require('templates/openedProduct.php');
    }

?>
</div>
<footer>
<?php 
require('templates/footer.php');
?>
</footer>
</body>
</html>