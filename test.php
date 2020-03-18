<?php
include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kraeken</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
    <h3>
        <a href="index.php" class="menubar">Home</a>
        <a href="#" class="menubar">Contact</a>
        <a href="zenderoverzicht.php" class="menubar">Zenders</a>
    </h3>
</div>


<table style="width:100%">

    <tr>
        <td><?php
            foreach ($dbh->query('select * from zender where idzender=1') as $row) {
                print $row['omschrijving'].'<br>';
                print $row['slogan'] . '<br>';

            }
            ?>
            <a href="KKSoul.php">Bekijk Programmaoverzicht</a>
        </td>
        <td><?php
            foreach ($dbh->query('select * from zender where idzender=2') as $row) {
                print $row['omschrijving'].'<br>';
                print $row['slogan'] . '<br>';

            }
            ?>
            <a href="KKAlternative.php">Bekijk Programmaoverzicht</a>
        </td>
        <td><?php
            foreach ($dbh->query('select * from zender where idzender=3') as $row) {
                print $row['omschrijving'].'<br>';
                print $row['slogan'] . '<br>';

            }
            ?>
            <a href="KKHiphop.php">Bekijk Programmaoverzicht</a>
        </td>
    </tr>
    <tr>
        <td><?php
            foreach ($dbh->query('select * from song join artiest') as $row) {
                print $row['duur'].'<br>';
                print $row['titel'] . '<br>';
            }
            ?>
            <a href="KKRock.php">Bekijk Programmaoverzicht</a>
        </td>
        <td><?php
            foreach ($dbh->query('select * from zender where idzender=5') as $row) {
                print $row['omschrijving'].'<br>';
                print $row['slogan'] . '<br>';

            }
            ?>
            <a href="KKCountry.php">Bekijk Programmaoverzicht</a>
        </td>
        <td><?php
            foreach ($dbh->query('select * from zender where idzender=6') as $row) {
                print $row['omschrijving'].'<br>';
                print $row['slogan'] . '<br>';


            }
            ?>

        </td>
    </tr>
</table>


</body>
</html>