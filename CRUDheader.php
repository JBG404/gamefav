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
      <a href="<?php  $base_url; ?>/login.php">|Login|</a>
   </nav>
   <pre style="border: 1px dashed lightgrey; padding: 3px;"><?php 
        if(isset($_SESSION)) print_r($_SESSION);
        else echo '$_SESSION bestaat niet';
        ?></pre>
</header>