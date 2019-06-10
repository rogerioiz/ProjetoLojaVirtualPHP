<!DOCTYPE html>
<html lang="en">
    <?php include_once "head.php";?>
    <body>
        <?php include_once "header.php";?>

        <main class="container">
            <section class="row">
                <div class="col-md6"></div>
                            
                <form action="logarUsuario.php" method ="post" enctype="multipart/form-data">
        
                <!-- User Name e-mail -->
                <div class="form-group">
                    <label for="emailUsuario">E-mail</label>
                    <input type="email" step="any" class="form-control" id="emailUsuario" placeholder="E-mail" name="emailUsuario">
                </div>
                <div class="form-group">
                    <label for="senhaUsuario">Senha do Usuario</label>
                    <input type="passaword" name="senhaUsuario" id="senhaUsuario" placeholder="Senha do Usuario">
                </div>

                </div>
                <a class="btn btn-primary" href="cadastroUsuario.php">Criar Cadastro!</a>
                <p> Ou </p>
                <button class="btn btn-success" type="subimit">Logar</button>
                </form>
            </section>
        </main>

    </body>
</html>