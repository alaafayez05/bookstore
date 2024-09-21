<html>
    <head>
        <title>Preferences</title>
        <link rel="stylesheet" type="text/css" href="../css/pref.css">
    </head>
    </html>
<?php 
include '../includes/header.php';

if (isset($_POST['currency'])) {
    setcookie("preferred_currency", $_POST['currency'], time() + (86400 * 30), "/");
}
?>

<h2>Select Your Preferred Currency</h2>
<form action="preferences.php" method="post">
    <select name="currency">
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
        <option value="GBP">GBP</option>
    </select>
    <input type="submit" value="Save">
</form>

<?php if (isset($_COOKIE['preferred_currency'])): ?>
    <p>Preferred Currency: <?php echo $_COOKIE['preferred_currency']; ?></p>
<?php endif; 


include '../includes/footer.php'; 
?>