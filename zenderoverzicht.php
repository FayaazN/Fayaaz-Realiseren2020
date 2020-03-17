<?php
include 'connection.php';




    foreach ($dbh->query('select * from zender where idzender=1') as $row) {
        print $row['omschrijving'];
        print $row['slogan'] . '<br>';

    }

?>