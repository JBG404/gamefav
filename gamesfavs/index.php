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

    <div class="container home">
        <h1>Game List</h1>
        
        <?php
        require_once ('../backend/conn.php');
        $query = "SELECT * FROM games";
        $statement = $conn->prepare($query);
        $statement->execute();
        $games = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($games as $game)
        ?>
        <table>
            <tr>
                <th>GameName</th>
                <th>genre</th>
                <th>price</th>
                <th>User Updloaded/Fav</th>
            </tr>
            <?php foreach($games as $game) :?>
                <tr>
                    <td><?php echo $game['Game'] ?></td>
                    <td><?php echo $game['genre'] ?></td>
                    <?php if (!isset($game['price'])) {?> <td>Free</td> <?php } else { ?> <td><?php echo $game['price'] ?></td> <?php } ?>
                    <td><?php echo $game['uploadend by'] ?></td>
                </tr>
            <?php endforeach;?>
        </table>

    </div>

</body>

</html>
