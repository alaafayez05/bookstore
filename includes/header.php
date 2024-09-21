
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bookstore</title>
    <link rel="stylesheet" href="/bookstore/style.css">
</head>
<body>
    <?php
    $url = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . "/bookstoreTask";
    
    define("url", $url);
    ?>
    <header>
        <nav>
            <a href="<?php echo url; ?>/home.php">HOME</a>   
            <a href="<?php echo url; ?>/pages/book_list.php">BOOKS</a>
            <a href="<?php echo url; ?>/pages/cart.php">CART</a>
            <a href="<?php echo url; ?>/pages/preferences.php">PREFERENCES</a>
            <a href="<?php echo url; ?>/logout.php">LOG OUT</a>
        </nav>
    </header>
</body>
</html>





<!-- 
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bookstore</title>
    <link rel="stylesheet" href="/bookstore/style.css">

</head>
<body>
    <?php
    $url=$_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . "/bookstoreTask";
    define("url",$url);
    ?>
    <header>
        <nav>
         <a href="<?php url;?>/home.php">HOME</a>   
         <a href="<?php url;?>/pages/book_list.php">BOOKS</a>
         <a href="<?php url;?>/pages/cart.php">CART</a>
         <a href="<?php url;?>/pages/preferences.php">PREFERENCES</a>
         <a href="<?php url;?>/pages/logout.php">LOG OUT</a>
             
        
        </nav>
    </header>

</body>
</html> -->