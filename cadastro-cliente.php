<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <form method="post" action="salvar-cliente.php">
        Nome:<input name="nome"><br>
        E-mail:<input type="email" name="email"><br>
        Telefone:<input type="tel" name="telefone"><br>
        Rua:<input name="rua"><br>
        Número:<input name="numero"><br>
        Bairro:<input name="bairro"><br>
        Complemento:<input name="complemento"><br>
        Cidade:<input name="cidade"><br>
        Estado:
        <select name="estado">
            <option value="SP">SP</option>
            <option value="RJ">RJ</option>
            <option value="MG">MG</option>
            <option value="PE">PE</option>
            <option value="SBO">SBO</option>
        </select>
        Data De nascimento:<input name="datadenascimento"><br>
        CPF:<input name="cpf"><br>
        RG:<input name="rg"><br>
        Whatsapp:<input name="whatsapp"><br>
        fuma:
        <input type="radio" name="fuma" value="sim">Sim
        <input type="radio" name="fuma" value="não">Não
        <br>
        Bebida álcolica:
        <input type="radio" name="bebida" value="sim">Sim
        <input type="radio" name="bebida" value="não">Não
        <br>
        <button type="submit">Salvar cadastro</button>
    </form>
</body>
</html>