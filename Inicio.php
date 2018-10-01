<?php
	session_start();
	if(empty($_SESSION['erroLogin']) == false)
	{
	$erro = $_SESSION['erroLogin'];
	}
	else {
		$erro = null;
	}
?>

<!DOCTYPE html>
  <html>
    <head>

      <meta charset="UTF-8">
      <title>Cotton Candy</title>
      <link rel="shortcut icon" href="logo1.png">
			<link rel="stylesheet" href="styles.css">

    </head>
    <body style="overflow:hidden;">
      <div>
      <header class="cabeçalho">
        <form align="right" class="login" method="post" action="Login.php">
          <?php if ($erro != null) { ?>

						<div class="erro">
	          	<p> Erro: <?= $erro ?> </p>
	        	</div>

      		<?php } ?>

          <div id="divusuario"> <label class="loginlabel"> Usuário  </label><input  id="usuario" type="text" name="usuario" placeholder="ex: Ygor" minlength=3 maxlength=12 required></div>
          <div id="divsenha"> <label class="loginlabel"> Senha  </label> <input id="senha" type="password" name="senha" placeholder="*****" minlength=3 maxlength=12 required></div>
          <button id="loginbutton" type="submit" name="entrar" style="vertical-align:middle"><span>Entrar</span></button>

        </form>
      </header><br>

      <div id="inicio">
      </div><br>

      <div id="cadastro">

        <h1 id="titulocadastro">Crie uma nova conta</h1>
        <form class="cadastro" method="post" action="Cadastro.php">

          <input class="cadastronome" type="text" name="nome" placeholder="Nome" minlength=3 maxlength=12 required/>
          <input class="cadastronome" type="text" name="sobrenome" placeholder="Sobrenome" minlength=3 maxlength=12 required/><br><br>
          <input class="cadastroinput" type="text" name="usuario" placeholder="Usuário" minlength=3 maxlength=12 required><br><br>
          <input class="cadastroinput" type="email" name="email" placeholder="Email" required><br><br>
          <input class="cadastroinput" type="password" name="senha" placeholder="Senha" minlength=3 maxlength=60 required><br><br>
          <input class="cadastroinput" type="password" name="confsenha" minlength=3 placeholder="Confirme sua Senha" maxlength=60 required><br><br>
          <input class="cadastroinput" type="text" name="instituicao" placeholder="Instituição de Ensino" minlength=3 maxlength=12 required><br><br>
          <button id="cadastrobutton" type="submit" name="cadastro" style="vertical-align:middle"><span>Confirmar Cadastro</span></button>

        </form>
      </div>

    </body>
  </html>