<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = "Rogério";
            if($nome == "Rogério"){
                var_dump($nome."<br>");
            }else{
                echo "Não é o Rogério";
            }
            for($i =0; $i <5; $i++){
                echo "Olá $nome"."<br>";
            }
    ?>
</body>
</html>