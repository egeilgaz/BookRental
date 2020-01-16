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
    <title>Yeni Kitap</title>
</head>
<body>
    <div class="container">
<div class="col-md-6">


<form action="" method="post">
    
    <table class="table">
        
        <tr>
            <td>Kitap Adı</td>
            <td><input type="text" name="BookName" class="form-control"></td>
        </tr>

        <tr>
            <td>Yazarı</td>
            <td><input type="text" name="Author" class="form-control"></td>
        </tr>

        <tr>
            <td>Resim</td>
            <td><input type="file" name="Photo" class="form-control"></td>
        </tr>
        
        <tr>
        <td></td>
        <td><input type="submit" class="btn btn-danger" value="Ekle"></td>
        </tr>
    </table>
</form>
</div>
</body>
<?php 



if ($_POST) { 

    $dosya = $_FILES ['Photo']['tmp_name'];
    $resim = file_get_contents($_FILES['Photo']['tmp_name']) ;
    $resim_ismi = addslashes($_FILES['Photo']['name'])  ;
    $Photo = getimagesize($_FILES['Photo']['tmp_name']);
    



    $BookName = $_POST['BookName']; 
    $Author = $_POST['Author'];
    $Photo = $_POST['Photo'];
    

    if ($BookName<>"" && $Author<>"" && $Photo<>"") { 


        if ($connect->query("INSERT INTO books (BookName, Author, Photo) VALUES ('$BookName','$Author','$Photo')")) 
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

