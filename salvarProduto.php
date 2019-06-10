<?php 
include_once "funcoes.php";

$contadorInputVazio = 0;
foreach($_POST as $item){
        $item == ""?$contadorInputVazio++:0;
}

if($contadorInputVazio == count($_POST)){

    
echo "<h1>Você não enviou nenhuma informação sobre o produto</h1>";
echo '<a class="btn btn-primary" href="cadastroProduto.php">Voltar para o Cadastro!</a>';
exit;
}

$imgAceita = ["image/png", "image/jpg", "image/jpeg"];
$erroEnvio = $_FILES['arquivo']['error'];
$nomeProduto = $_POST['nomeProduto'];
$precoProduto = $_POST['precoProduto'];
$descProduto = $_POST['descProduto'];
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivoTmp = $_FILES['arquivo']['tmp_name'];
$caminhoImg = "img/$nomeArquivo";
$typeFile =$_FILES['arquivo']['error'];

if($erroEnvio !==0){
    echo "<h1>Houve um erro no envio do arquivo verefique e tente novamente!</h1>";
    echo '<a class="btn btn-primary" href="cadastroProduto.php">Voltar para o Cadastro!</a>';
    exit;
}

if(array_search($typeFile, $imgAceita) == 0){
    echo "<h1>Extenção do arquivo invalida, verefique se a imagem e o arquivo</h1>";
    echo '<a class="btn btn-primary" href="cadastroProduto.php">Voltar para o Cadastro!</a>';
    exit;
}


move_uploaded_file($arquivoTmp, "img/$nomeArquivo");

addProduto($nomeProduto, $descProduto, $precoProduto, $caminhoImg);
?>