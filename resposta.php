<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta - Cadastro Senac</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h3 class="center-align">Dados do Cadastro</h3>

        <div class="row">
            <div class="col s12">
                <?php
                    $nome = $_POST['nome'];
                    $sobrenome = $_POST['sobrenome'];
                    $email = $_POST['email'];
                    $telefone = $_POST['telefone'];
                    $cursoname = $_POST['cursoname'] ?? 'Nenhum curso selecionado.';
                  
                    echo "<p><strong>Nome:</strong> $nome</p>";
                    echo "<p><strong>Sobrenome:</strong> $sobrenome</p>";
                    echo "<p><strong>E-mail:</strong> $email</p>";
                    echo "<p><strong>Telefone:</strong> $telefone</p>";
                    echo "Curso selecionado: " . htmlspecialchars($cursoname);
                ?>
            </div>
        </div>

        <div class="row">
            <a href="index.php" class="btn waves-effect waves-light">Voltar</a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
