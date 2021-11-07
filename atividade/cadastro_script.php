<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Cadastro</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            include "conection.php";
            $descricao = $_POST["descricao"];
            $date = $_POST["date"];

            $sql = "INSERT INTO `cadastros`(`descricao`, `date`) 
                VALUES ('$descricao','$date')";

            if (mysqli_query($conn, $sql)) {
                echo "$descricao foi alocado na base de dados!";
            } else {
                echo "algo deu errado na alocação!";
            }
            ?>
        </div>

    </div>

</body>

</html>