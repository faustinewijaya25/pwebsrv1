<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Belajar PHP</title>
</head>
<body>
<?php
// $k = $_GET['times'];
?>
<h1>Tabel Perkalian</h1>
<table border='0' cellspacing='0' cellpadding='5'>
<tr>
<?php
for ($t=1; $t <= 5 ; $t++) {
?>
<td>
<table border='1' cellspacing='0' cellpadding='5'>
<?php
for ($n=1; $n <= 10; $n++) {
echo "<tr>";
echo "<td align='center'>".$n." x ".$t." = ".$n * $t ."</td>" ;
echo "</tr>";
}
?>
</table>
</td>
<?php
}
?>
</tr>
</table>
</body>
</html>
