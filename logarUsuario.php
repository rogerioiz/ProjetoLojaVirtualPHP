<?php

include_once "funcoes.php";

$contadorInputVazio = 0;
foreach($_POST as $item){
        $item == ""?$contadorInputVazio++:0;
}
$itensPost = is_array($_POST)?count($_POST):0;
if($contadorInputVazio == $itensPost){

    
echo "<h1>Você não enviou nenhuma informação sobre o Login</h1>";
echo '<a class="btn btn-primary" href="login.php">Voltar para a pagina de login!</a>';
exit;
}

$Usuarios = file_exists("Usuarios.json")? file_get_contents('Usuarios.json'):"";
$Usuarios = json_decode($Usuarios,true);

$email = $_POST['emailUsuario'];
$senha = $_POST['senhaUsuario'];

foreach($Usuarios['usuarios'] as $key => $usuario){
    if($usuario['email'] == $email){
        $usuarioExiste = $Usuarios['usuarios'][$key];
        break;
    }
}


if(isset($usuarioExiste) && (password_verify($senha, $usuarioExiste['senha']))){
   
    header("Location:index.php");

}else{
    echo "E-mail ou senha invalido, tente novamente";
    echo '<a class="btn btn-primary" href="login.php.php">Voltar para a pagina de login!</a>';

}