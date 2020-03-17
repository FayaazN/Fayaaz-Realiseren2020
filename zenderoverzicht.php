<?php
include 'connection.php';

foreach ($dbh->query('select * from zender') as $row) {
    print $row['omschrijving']  ;
    print $row['slogan'] .'<br>' ;

}
?>