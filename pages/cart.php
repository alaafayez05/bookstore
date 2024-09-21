<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/cart.css">
</head>
<body>
    <?php
session_start();
include '../includes/header.php';
if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $_SESSION['cart'][] = ['title' => $title, 'author' => $author, 
    'price' => $price ,'image'=> $image];
}
?>
<?php
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) :?>
   <h2>Your Cart</h2>
    <?php
    $total = 0;
    foreach ($_SESSION['cart'] as $item) :?>

        <div class='cart-item'>

         <img src="<?=$item['image']?>"alt='book cover'>
         <h3><?=$item['title']?></h3>
         <p>Author:<?=$item['author']?></p>
         <p class='price'>Price: <?=$item['price']?></p>
         </div>
         <?php $total += $item['price'];?>
         <h3>Total:<?=$total?></h3>
         <?php endforeach;?>
         <?php else :?>
         <p class='empty'>Your cart is empty.</p>    
        <?php endif;?>



<?php include '../includes/footer.php';
?>
</body>
</html>

