<!DOCTYPE html>
<html>
<head>
    <title>MEU CEP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="index.php" method="post">
        <label>Insira o CEP:</label>
        <input type="text" name="cep">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (!empty($_POST['cep'])) {
        include 'Address.php'; // Inclui a classe Address

        $cep = $_POST['cep'];

        try {
            $address = new Address();
            $address->get_address($cep);

            echo "<div class='result-box'>";
            echo "CEP Informado: $address->cep<br>";
            echo "Rua: $address->logradouro<br>";
            echo "Bairro: $address->bairro<br>";
            echo "Estado: $address->uf<br>";
            echo "</div>";
        } catch (Exception $e) {
            echo "<div class='result-box'>";
            echo "Erro: " . $e->getMessage();
            echo "</div>";
        }
    }
    ?>
</body>
</html>
