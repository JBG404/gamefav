<?php
require_once ('head.php');
require_once ('header.php');
?>
<main>

</main>
<div class="container home">

<?php
if (isset($_GET['msg'])) {
    echo "<div class='msg'>" . $_GET['msg'] . "</div>";
}
if (isset($_GET['error'])) {
    echo "<div class='msg'>" . $_GET['error'] . "</div>";
}
?>

<form action="backend/loginController.php" method="POST">
    <div class="form-group">
        <label for="username">Gebruikersnaam</label>
        <input type="text" name="username" id="username" placeholder="Gebruikersnaam">
    </div>
    <div class="form-group">
        <label for="password">Wachtwoord</label>
        <input type="password" name="password" id="password" placeholder="Wachtwoord">
    </div>

    <input type="submit" value="Inloggen">
</form>

</div>
</body>
</html>
