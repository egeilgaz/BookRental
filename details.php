<?php 
    include("connect.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>detaylar</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container">
<h1>Kiralanmış Kitaplar</h1>
<div class="col-md-12">
<table class="table">
    
    <tr>
        <th>Id</th>
        <th>Kitap Adı</th>
        <th>Yazarı</th>
        <th>Kiracı Adı</th>
        <th>Kiracı Soyadı</th>
        <th>İade Tarihi</th>       
        
    </tr>

<?php 

$query = $connect->query("SELECT * FROM books INNER JOIN renters on books.Id=renters.Id where books.Id=".(int)$_GET['Id']);

while ($result = $query->fetch_assoc()) { 

$Id = $result['Id']; 
$BookName = $result['BookName'];
$Author = $result['Author'];
$RenterName = $result['RenterName'];
$RenterSurname = $result['RenterSurname'];
$Date = $result['Date'];


?>
    
    <tr>
        <td><?php echo $Id; ?></td>
        <td><?php echo $BookName; ?></td>
        <td><?php echo $Author; ?></td>
        <td><?php echo $RenterName; ?></td>
        <td><?php echo $RenterSurname; ?></td> 
        <td><?php echo $Date; ?></td>             
    </tr>

<?php 
} 
 
?>

</table>
<a href="takenbooks.php">Geri dönmek için..</a>
</div>
</body>
</html>