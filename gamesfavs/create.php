<?php
if (!isset($_SESSION['user_id'])) {
    $msg = "Je moet ingelogd zijn om deze pagina te bekijken.";
    header("Location: ../login.php?msg=$msg");
    exit();
}
?>
<!doctype html>
<html lang="nl">

<head>
    <title>favorite games</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>

    <div class="container">
        <h1>add games</h1>

        <form action="../backend/gamefavController.php" method="POST">

            <div class="form-group">
                <label for="game">Name game:</label>
                <input type="text" name="game" id="game" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="type">game genre:</label>
                <select name="type" id="type" class="form-input" required>
                    <option value="">- Kies een type -</option>
                    <option value="horror">horror</option>
                    <option value="story">story</option>
                    <option value="rpg">rpg</option>
                    <option value="action">action</option>
                    <option value="fighting">fighting</option>
                    <option value="adventure">adventure</option>
                    <option value="else">else</option>
                </select>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" min="0" name="price" id="price" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="uploaded_by">Uploaded by:</label>
                <input type="text" name="uploaded_by" id="uploaded_by" class="form-input" required>
            </div>


            <input type="submit" value="Verstuur melding">
        </form>
    </div>

</body>

</html>