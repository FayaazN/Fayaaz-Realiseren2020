
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
        <a href="nummers.php" class="menubar">Nummers</a>
        <a href="zenderoverzicht.php" class="menubar">Zenders</a>
    </h3>
</div>

<div>
    <h2>Nummeroverzicht</h2>
</div>
<?php
nummersweergeven();

?>

</body>
</html>


<?php
include 'connection.php';

function nummersweergeven() {}
foreach ($dbh->query('select * from song join artiest on artiest.idartiest = song.idsong') as $row) {
    print $row['titel']. '&nbsp;- &nbsp;'. $row['artiestennaam'] .    '<br>';

}
?>