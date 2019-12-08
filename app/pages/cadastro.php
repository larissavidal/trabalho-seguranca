<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
   <!--Made with love by Mutiullah Samim -->

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <form method="post" action="../controllers/CadastroController.php" id="cadastro" name="cadastro">
        <div class="form-row">
            <div class="col-md-4 mb-3">
            <label for="validationTooltip01">Nome</label>
            <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" name="nome" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
            </div>
            <div class="col-md-4 mb-3">
            <label for="validationTooltip02">Senha</label>
            <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" name="senha" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
            </div>
            <div class="col-md-4 mb-3">
            <label for="validationTooltipUsername">Nome de usuário</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                </div>
                <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" name="usuario" required>
                <div class="invalid-tooltip">
                </div>
            </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="validationTooltip03">Endereço</label>
            <input type="text" class="form-control" id="validationTooltip03" placeholder="City" name="end" required>
            <div class="invalid-tooltip">
            Por favor forneça um endereço válido!
            </div>
            </div>
            <div class="col-md-3 mb-3">
            <label for="validationTooltip04">CPF</label>
            <input type="text" class="form-control" id="validationTooltip04" placeholder="State" name="cpf" required>
            <div class="invalid-tooltip">
                Por favor forneça um CPF válido!
            </div>
            </div>

            </div>
        </div>

        <input type="hidden" name="op" value="1"/>
        <input type="submit" value="Cadastrar" class="btn float-right login_btn" >
    </form>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>
</html>
