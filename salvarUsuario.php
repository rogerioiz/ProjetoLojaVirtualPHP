<?php 
include_once "funcoes.php";

$contadorInputVazio = 0;
foreach($_POST as $item){
        $item == ""?$contadorInputVazio++:0;
}
$itensPost = is_array($_POST)?count($_POST):0;
if($contadorInputVazio == $itensPost){

    
echo "<h1>Você não enviou nenhuma informação sobre o produto</h1>";
echo '<a class="btn btn-primary" href="cadastroUsuario.php">Voltar para o Cadastro!</a>';
exit;
}

$nomeUsuario = $_POST['nomeUsuario'];
$emailUsuario = $_POST['emailUsuario'];
$senhaUsuario = password_hash($_POST['senhaUsuario'],PASSWORD_DEFAULT);
$nivelAcesso = $_POST['nivelAcesso'];

if(addUsuario($nomeUsuario,$emailUsuario,$senhaUsuario,$nivelAcesso)){
    echo '<h1>Usuario Cadastrado com Sucesso!</h1>';
    echo '<a class="btn btn-primary" href="login.php">Ir para pagina de login!</a>';
}else{
    echo '<h1> Usuario Não Cadastrado! Tente Novamente!</h1>';
    echo '<a class="btn btn-primary" href="cadastroUsuario.php">Voltar para o Cadastro!</a>';
}