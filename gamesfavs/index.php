<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    $msg = "Je moet ingelogd zijn om deze pagina te bekijken.";
    header("Location: ../login.php?msg=$msg");
    exit();
}
?>
<!doctype html>
<html lang="nl">


<?php
require_once ('../head.php');
require_once ('../CRUDheader.php');
?>


<body>


    <div class="container">
        <h1>Voeg je favoriete games toe</h1>

        <form action="../backend/gamefavController.php" method="POST">

            <div class="form-group">
                <label for="game">Naam van de game:</label>
                <input type="text" name="game" id="game" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="type">Genre van de game:</label>
                <select name="type" id="type" class="form-input" required>
                    <option value="">- Kies een genre -</option>
                    <option value="horror">Horror</option>
                    <option value="story">Story</option>
                    <option value="rpg">RPG</option>
                    <option value="action">Action</option>
                    <option value="fighting">Fighting</option>
                    <option value="adventure">Adventure</option>
                    <option value="else">Overig</option>
                </select>
            </div>

            <div class="form-group">
                <label for="price">Prijs:</label>
                <input type="number" min="0" name="price" id="price" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="uploaded_by">Geüpload door:</label>
                <input type="text" name="uploaded_by" id="uploaded_by" class="form-input" required>
            </div>

            <input type="submit" value="Voeg game toe" class="btn">
        </form>

    </div>

</body>

</html>
