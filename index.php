<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 1</title>
</head>
<body>

    <form method="post">
        Nome: <input type="text" name="nome">
        <br><br>

        Idade: <input type="number" name="idade">
        <br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_POST["nome"]) && isset($_POST["idade"])) {
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];

        echo "Seu nome é " . htmlspecialchars($nome) . "<br>";
        echo "Sua idade é " . htmlspecialchars($idade) . " anos.";
    }
    ?>

</body>
</html>