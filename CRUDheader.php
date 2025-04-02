<header>

   <nav>
    <a href="<?php  $base_url; ?>/gamesfavs/index.php">|Games List|</a>
    <a href="<?php  $base_url; ?>/gamesfavs/create.php">|Add Game|</a>
    <a href="<?php  $base_url; ?>/gamesfavs/edit.php">|Edit|</a>
    <a style="color: gray" href="<?php  $base_url; ?>/gamesfavs/delete.php">|Delete|</a>
    <a href="<?php $base_url; ?>/index.php">|home|</a>
   </nav> 
   <h1>FAVOURITE GAMES LIST</h1>
   <nav id="login">
   <?php if (isset($_SESSION['user_id'])) {?>
         <a href="<?php  $base_url; ?>/logout.php">|Logout|</a>
      <?php } else { ?>  <a href="<?php  $base_url; ?>/login.php">|Login|</a> <?php } ?>
   </nav>
</header>