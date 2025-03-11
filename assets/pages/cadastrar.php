<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcadia</title>
</head>
<body>
    <main>
        <form action="../scripts/cadastro.php" method="post">
        <input placeholder="Ex.: ArquiMago" id="nome" type="text" name="nome" required>
        <input placeholder="Ex.: Arcadia@email.com" id="email" type="email" name="email" required>
        <input placeholder="Ex.: senha123" id="senha" type="password" name="senha" required>
        <button type="submit">Cadastro</button>
        </form>
    </main>

    <?php include "../components/footer.php"?>
</body>
</html>