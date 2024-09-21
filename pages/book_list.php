<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/book.css">
</head>

<body>
    
    <?php
    include('../includes/header.php');

    $books=[
    ['title'=>'Ikigai','author'=>'Haruki Murakami','price'=>100 ,'image'=>'../uploads/S.jpg'],
    ['title'=>'You Believe','author'=>'Steve Jobs','price'=>300,'image'=>'../uploads/YOU.jpg'],
    ['title'=>'The Great Gatsby','author'=>'Aldous Huxley','price'=>230,'image'=>'../uploads/T.jpg'],
    ['title'=>'Revolutionary Road','author'=>'Eleanor Roosevelt','price'=>180,'image'=>'../uploads/R.jpg'],
    ['title'=>'Quantum Leap','author'=>'Franklin D. Roosevelt','price'=>360,'image'=>'../uploads/Q.jpeg'],
    ['title'=>'The Catcher in the Rye','author'=>'Peter Gabriel','price'=>400,'image'=>'../uploads/s.webp'],
    ['title'=>'hunger games','author'=>'Haruki Murakami','price'=>100,'image'=>'../uploads/H.webp'],
    ['title'=>'The Alchemist','author'=>'Steve Jobs','price'=>300,'image'=>'../uploads/A.webp'],
    ];
    ?>

    <div class='card-container'>
  <?php
   foreach($books as $book):
    
    $title=$book['title'];
    $author=$book['author'];
    $price=$book['price'];
    $image=$book['image'];?>
  
    <div class='book'>
    <img src= "<?=$image?>"alt='title'>
    <h2 class='book-title'><?=$title?></h2>
    <p class='book-author'><?=$author?></p>
    <p class='book-price'><?=$price?></p>
    <a class='add-to-cart' href='book_details.php?title=<?=$title?>&author=<?=$author?>
    &price=<?=$price?>&image=<?=$image?>'>Add to Cart</a>
    </div>
<?php endforeach;?>
</body>

</html>


