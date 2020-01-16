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

<div class="col-md-12">
<table class="table">
    <h1>Kütüphanede Bulunan Kitaplar</h1>
    <tr>
        <th>Id</th>
        <th>Kitap Adı</th>
        <th>Yazarı</th>        
        <th>Kapak Fotoğrafı</th>
        <th>İşlem</th>
    </tr>
    <h5><a href="takenbooks.php">Kiralanmış kitaplar için tıklayınız.</a></h5>
    <h5><a href="newbooks.php">Yeni bir kitap eklemek için tıklayınız.</a></h5>
<?php 


$query = $connect->query("SELECT * FROM renters RIGHT JOIN books on renters.Id= books.Id where renters.Id is null order by BookName");

while ($result = $query->fetch_assoc()) { 
    $Id = $result['Id'];
    $BookName = $result['BookName'];
    $Author = $result['Author'];
    $Photo = $result['Photo'];
?>    
    <tr>
        <td><?php echo $Id; ?></td>
        <td><?php echo $BookName; ?></td>
        <td><?php echo $Author; ?></td>
        <td><img src="<?php echo $Photo; ?>" ></td>
        <td><a href="rent.php?Id=<?php echo $Id; ?>" class="btn btn-success">Kirala</a></td>        
    </tr>
<?php 
} 
?>
</table>
</div>
</body>
</html>