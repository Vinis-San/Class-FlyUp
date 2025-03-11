<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php include "assets/components/header.php" ?>
    <main>
        <form action="assets/scripts/login.php" method="post">
            <!-- Email-->
            <div class="form-group">
                <label for="email">Email: </label>
                <input placeholder="Ex.: Arcadia@email.com" id="email" type="email" name="email" required>
            </div>
                        <!-- senha-->
                        <div class="form-group">
                <label for="senha">Senha: </label>
                <input placeholder="Ex.: senha123arcadia" id="senha" type="password" name="senha" required>
            </div>
            <button>Entrar</button>
            <div class="form-group">
                <p>Sem Cadastro?<a href="assets/pages/cadastrar.php">Cadastre-se</a></p>
            </div>
        </form>
    </main>

    <?php include "assets/components/footer.php";
    ?>

</body>

</html> 