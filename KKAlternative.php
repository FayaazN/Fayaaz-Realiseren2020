<?php
include 'connection.php';
include 'zenderoverzicht.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kraeken</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>

<div>
    <h2>Zender KKAlternative</h2>
</div>
<table>
    <tr>
        <th>Programma</th>
        <th>Datum</th>
        <th> Tijd</th>
        <th>Presenatator</th>

    </tr>
    <tr>
        <td><?php
            foreach ($dbh->query('select * from programma where idprogramma=2 ') as $row) {
                print $row['omschrijving'].'<br>';
            }
            ?>
        </td>

        <td><?php
            foreach ($dbh->query('select * from uitzending where idprogramma=2') as $row) {
                print $row['datum'].'<br>';
            }
            ?>
        </td>
        <td><?php
            foreach ($dbh->query('select * from uitzending where idprogramma=2') as $row) {
                print $row['begintijd'].'<br>';
                print $row['eindtijd'].'<br>';
            }
            ?>
        </td>
        <td><?php
            foreach ($dbh->query('select * from medewerker where idmedewerker =2') as $row) {
                print $row['nickname'].'<br>';
            }
            ?>
        </td>
    </tr>
</table>


</body>
</html>