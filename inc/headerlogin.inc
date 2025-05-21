<!DOCTYPE php>
<html lang="en">
<head>
   <link rel="stylesheet" href="..\styles\styleheader.css">
</head>
<!-- ---Header--- -->
<header>
    <a href ="index.php" class="logo"> Debugallica </a>
    <?php

if (isset($_SESSION['account'])){
    echo "<h3>Welcome $acc !</h3>";
}
?>
    <a href="inc\log_out.php" class="login">Log Out</a>
    <div class="menu" onclick=showSidebar()><img src="images\mingcute_menu-fill.svg" width="30"></div>
</header>

