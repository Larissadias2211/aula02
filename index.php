<?php
#### ESTRUTURA DE DECISÃO
$usuario = 'admin';
$senha = 321;
 
if($usuario == 'admin' && $senha == 321){
    echo "Acesso liberado";
}else{
    echo "Usuário ou senha inválido";
}
 
echo "<br>";
#### ESTRUTURA DE REPETIÇÃO & ARRAY
 
$produtos = ['🎹','🎶','🎤','🎧','📯','🥁']; # Array
echo $produtos[2];
echo $produtos[5];
echo count($produtos);
echo "<br>";
$i = 0;
while( $i < count($produtos)){
    echo $produtos[$i];
    $i++; // $i = $i + 1
}

?>

<form action="recebe.php" method="post">
    Usuário:<input name="usuario">
    Senha:<input name="senha" type="password">
    Nome:<input name="nome">
    Cidade:<input name="cidade">
    Telefone:<input name="telefone">
    E-mail:<input name="email">
    <button type="submit">Enviar</button>
</form>
