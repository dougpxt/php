<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
    // inserting categories
    include 'conexao.php';

    $desc_categoria = $_POST['desc_categoria'];
    $sql = 'INSERT INTO categorias 
    (desc_categorias) VALUES ('$desc_categoria')'
    echo ($sql);
    $inserir = mysqli_query($conexao, $sql);
    ?>

    <div class='container'>
        <h3>Categoria inserida com sucesso!</h3>
        <a href="index.php" class='btn btn-primary'>Voltar</a>
    </div>
</body>
</html>