<?php 

    include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php 

$sorgu = $connect->query("SELECT Id FROM books WHERE Id =".(int)$_GET['Id']); 


$sonuc = $sorgu->fetch_assoc(); 

$Id = $sonuc['Id'];

?>


    <div class="container">
<div class="col-md-6">

<form action="" method="post">
    
    <table class="table">
        
        <tr>
            <td>Kiracı Adı</td>
            <td><input type="text" name="RenterName" class="form-control"></td>
        </tr>

        <tr>
            <td>Kiracı Soyadı</td>
            <td><input name="RenterSurname" class="form-control"></input></td>
        </tr>

        <tr>
            <td>Geri Verilecek Tarih</td>
            <td><input type="date" name="Date"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" class="btn btn-primary" value="Kirala"></td>
        </tr>

    </table>

</form>
</div>
<div>
<?php 



if ($_POST) { 

    
    $RenterName = $_POST['RenterName']; 
    $RenterSurname = $_POST['RenterSurname'];
    $Date = $_POST['Date'];
    

    if ($RenterName<>"" && $RenterSurname<>"" && $Date<>"") { 
    
        
        if ($connect->query("INSERT INTO renters (Id, RenterName, RenterSurname,Date) VALUES ('$Id','$RenterName','$RenterSurname','$Date')")) 
        {
            header("location:index.php");
        }
        else
        {
            echo "Hata oluştu";
        }

    }

}
?>




</body>
</html>