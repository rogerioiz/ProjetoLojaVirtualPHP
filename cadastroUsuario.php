<!DOCTYPE html>
<html lang="en">
    <?php include_once "head.php";?>
    <body>
        <?php include_once "header.php";?>

        <main class="container">
            <section class="row">
                <div class="col-md6"></div>
                            
                <form action="salvarUsuario.php" method ="post" enctype="multipart/form-data">
                <!-- Nome Usuario-->
                <div class="form-group">
                    <label for="nomeUsuario">Nome de Usuario</label>
                    <input type="text" class="form-control" id="nomeUsuario"  placeholder="Nome do Usuario" name="nomeUsuario">
                </div>
                <!-- User Name e-mail -->
                <div class="form-group">
                    <label for="emailUsuario">E-mail</label>
                    <input type="email" step="any" class="form-control" id="emailUsuario" placeholder="E-mail" name="emailUsuario">
                </div>
                <div class="form-group">
                    <label for="senhaUsuario">Senha do Usuario</label>
                    <input type="passaword" name="senhaUsuario" id="senhaUsuario" placeholder="Senha do Usuario">
                </div>
                <div class="form-group">
                    <label for="nivelAcesso">Nível de Acesso </label>
                    <select name="nivelAcesso" id="nivelAcesso" class="form-control">
                    <option selected disabled> Selecione o nivel! </option>
                    <option valeu="0">Adm</option>
                    <option valeu="1">Usuario</option>
                    </select>

                </div>
    
                <button class="btn btn-success" type="subimit">Finalizar Cadastro</button>
                </form>
            </section>
        </main>

    </body>
</html>