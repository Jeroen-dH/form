<?
if(isset($_POST["Naam"]) || isset($_POST["email"])){
    print("true");
    $naam = $_POST["Naam"];
    $email = $_POST["email"];
}else{
    print("false");
    $naam = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="Naam" value=""><br>
        <input type="text" name="email" value=""><br>
        <button class="btn btn-primary">send</button>
    </form>
    <div>
        <div><b>Ingevulde gegevens zijn:</b></div>
        <div>naam: <?if(isset($naam)){print($naam);}?></div>
        <div>email: <?if(isset($email)){print($email);}?></div>
    </div>
</body>
</html>