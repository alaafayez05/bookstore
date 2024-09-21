
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<?php
include_once'includes/header.php';

function welcome(){
    echo "<h1 class='welcome'> Welcome to our website </h1>";
}
echo welcome();

include_once'includes/footer.php';
?>



</body>
</html>