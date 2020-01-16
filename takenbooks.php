<?php 
    include("connect.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ana Sayfa</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">

<h1>Kiralanmış Kitaplar</h1>
<br><br>

<div class="col-md-12">
<table class="table">
    
    <tr>
        <th>Id</th>
        <th>Kitap Adı</th>
        <th>Yazarı</th>
        <th>Detaylar</th>
        <th></th>
    </tr>

<?php 

$query = $connect->query("SELECT * FROM Books,renters WHERE books.Id = renters.Id order by BookName");

while ($result = $query->fetch_assoc()) { 

$Id = $result['Id']; 
$BookName = $result['BookName'];
$Author = $result['Author'];


?>
    
    <tr>
        <td><?php echo $Id; ?></td>
        <td><?php echo $BookName; ?></td>
        <td><?php echo $Author; ?></td>
        <td><a href="details.php?Id=<?php echo $Id; ?>" class="btn btn-primary">Detaylar</a></td>        
    </tr>

<?php 
} 
 
?>

</table>
<a href="index.php">Ana sayfaya dönmek için..</a>
</div>
</body>
</html>