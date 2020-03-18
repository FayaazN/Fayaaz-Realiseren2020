<?php
mysqli_connect("localhost","root","","kraeken") or die(mysql_error());
mysqli_select_db("song");
$output = '';

if(isset($_POST['search'])){
    $searchq = $_POST['search'];

    $query = mysqli_query("SELECT * FROM song WHERE titel LIKE '%$searchq%' ") or die('Niets gevonden');
    $count = mysqli_num_rows($query);
    if($count == 0) {
        $output = 'Er is niks gevonden!';
    }else{
        while($row = mysqli_fetch_array($query)){
            $titel = $row['titel'];
            $output .='<div>'.$titel.'</div>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zoeken</title>
</head>
<body>
<form action="nummers.php" method="POST">
    <input type="text" name="search" placeholder="Zoek naar nummers"/>
    <input type="submit" value="Zoeken"/>
</form>
<?php
print("$output");

?>
</body>
</html>