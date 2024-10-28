<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home<h1/>
    <form action="somar.php" method="post">
        <label for="numl1">Numero 1</label>
        <input type="text" id="numl1"name="numl1" autocomplete="off"maxlength="10" required>
        <br><br/>
        <label for="numl2">Numero 2</label>
        <input type="text" id="numl2"name="numl2" autocomplete="off" maxlength="10" required>
        <br><br/>
        <label for="apres">seu nome</label>
        <input type="text" id="apres"name="apres"autocomplete="off"maxlength="10">
        <br><br/>
        <label for="escolha">Escolha um calculo</label>
        <br>
        1-Somar<br>
        2-subtrair<br>
        3-multiplicar<br>
        4-dividir<br>
        <input type="text" id="escolha" name="escolha"autocomplete="off"maxlength="1"required>
        <input type="submit" value="calcular">
    </form>    

    <br>
    <br>

    
    <a href="alunos.php">Cadastrar alunos</a>
</body>
</html>