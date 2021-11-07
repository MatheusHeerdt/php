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
            <div class="col">

                <h1>Cadastro</h1>
                <form action="cadastro_script.php" method="POST">

                    <div class="form-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Descrição</span>
                        <input type="text" class="form-control" name="descricao" required>
                    </div>
                    <div class="form-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Data</span>
                        <input type="date" class="form-control" name="date" required>
                    </div>
                    <div class="form-group input-group-sm mb-3">
                        <input type="submit" class="btn btn-success" name="input_data">
                    </div>

            </div>
        </div>

    </div>

</body>

</html>